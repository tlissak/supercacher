<?php
class CategorySort  extends Module { //TOFIX : print unlimited depth forms
	private $_html ;
	private $_postErrors = array();
	public $categories ;
	public $category_max_depth = 4 ;
	public $assign ;
	public	function __construct(){ 
		global $smarty,$cookie ;		
		$this->id_lang 	= intval( $cookie->id_lang)  ;
		$this->id_customer = intval($cookie->id_customer) ;
		$this->smarty 	=  $smarty ; 		
		$this->name = 'categorysort';
		$this->tab = 'tlissak modules';
		$this->version = '1.0';	// see tofix 
		$this->displayName = $this->l('Category Sort');
		$this->description = $this->l('Sort your cataloge categories to display them like you want. like Category::recurseLiteCategTree ');	
		$this->confirmUninstall = $this->l('Are you sure you want to delete the order of the categories ?') ;				
		parent::__construct();
	}
	function getRootCategories($maxdepth){
		global $cookie;	
		$sql = 'SELECT DISTINCT c.*, cl.* '
		.'FROM `'._DB_PREFIX_.'category` c '
		.'LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON '
		.' (c.`id_category` = cl.`id_category` AND `id_lang` = '.$this->id_lang.')'
		.' LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`) '
		.' WHERE 1' .($maxdepth != 0 ? ' AND `level_depth` <= '.$maxdepth : '')
		.' AND (c.`active` = 1 OR c.`id_category`= 1) '
		.' AND cg.`id_group` '.(! $this->id_customer ?  '= 1' : 
		'IN (SELECT id_group FROM '._DB_PREFIX_.'customer_group WHERE id_customer = '.$this->id_customer.')')
		.' ORDER BY `level_depth` ASC, c.`sort` ASC' ;		
		if (!$result = Db::getInstance()->ExecuteS($sql))
			return ;
		return $result ;
	}
	function getAllCaetgories(){
		$maxdepth =  $this->category_max_depth;
		$result = $this->getRootCategories($maxdepth) ;
		$resultParents = array();
		$resultIds = array();
		foreach ($result as $row){
			$row['name'] = Category::hideCategoryPosition($row['name']);
			$resultParents[$row['id_parent']][] = $row;
			$resultIds[$row['id_category']] = $row;
		}		
		$CategTree = $this->getTree($resultParents, $resultIds, $maxdepth);
		return $CategTree ;		
	}	
	function getTree($resultParents, $resultIds, $maxDepth, $id_category = 1, $currentDepth = 0)	{
		global $link;		
		$children = array();
		if (isset($resultParents[$id_category]) AND sizeof($resultParents[$id_category]) 
		AND ($maxDepth == 0 OR $currentDepth < $maxDepth))
			foreach ($resultParents[$id_category] as $subcat)
				$children[] = $this->getTree($resultParents, $resultIds, $maxDepth
					, $subcat['id_category'], $currentDepth + 1);
		if (!isset($resultIds[$id_category]))
			return false;
		return array('id' => $id_category
		, 'sort' => $resultIds[$id_category]['sort']
		, 'link' => $link->getCategoryLink($id_category
										, $resultIds[$id_category]['link_rewrite'])
		, 'name' => Category::hideCategoryPosition($resultIds[$id_category]['name'])
		, 'desc'=> $resultIds[$id_category]['description']
		, 'children' => $children);
	}
	public function assignSmarty(){
		$this->categories = $this->getAllCaetgories() ;
		$this->smarty->assign('categories_sort',$this->categories['children']);	
	}
	public function install(){
		if (parent::install() == false OR $this->installDB() == false 
		OR $this->registerHook('top') == false )
			return false;
		return true;
	}
	public function hookTop(){
		$this->categories = $this->getAllCaetgories() ;
		$this->assignSmarty() ;	
		return '<!-- category sort -->'  ;
	}
	public function uninstall()	{
		if (parent::uninstall() == false OR $this->unistallDB()  == false)
			return false;			
		return true;
	}
	function installDB(){
		Db::getInstance()->Execute('ALTER TABLE category ADD `sort` INT(4) NULL DEFAULT 0 AFTER id_parent ;') ;
		return true;
	}
	function unistallDB(){
		Db::getInstance()->Execute('ALTER TABLE category DROP  `sort`  ;') ;
		return true;
	}
	public function getContent(){
		$this->_html = '<h2>'.$this->displayName.'</h2>';
		if (!empty($_POST))	{
			$this->_postValidation();
			if (!sizeof($this->_postErrors))
				$this->_postProcess();
			else
				foreach ($this->_postErrors AS $err)
					$this->_html .= '<div class="alert error">'. $err .'</div>';
		}else
			$this->_html .= '<br />';			
		//get the category again with the updated values
		$this->categories = $this->getAllCaetgories() ;	
		$this->_displayAdminConfigModalForm(); 
		return $this->_html ;
	}
	private function _postValidation(){
		if (isset($_POST['btnSubmit']))	{
			if (intval($_POST['value']) < 0 )
				$this->_postErrors[] = $this->l('Please enter a valid numeric value.');
		}
	}
	public function _postProcess(){
		if (isset($_POST['btnSubmit']))	{
			Db::getInstance()->Execute('UPDATE category SET `sort` = '.intval($_POST['value']).' WHERE id_category = '.intval($_POST['id']).' ;') ;
		}
		$this->_html .= '<div class="conf confirm"><img src="../img/admin/ok.gif" alt="'.$this->l('ok').'" /> '.$this->l('Settings updated').'</div>';
	}
	private function render_form($arr){
			return "<form action='".$_SERVER['REQUEST_URI']."' method='post' style='display:inline'>
					<input type='text' name='value' value='".$arr['sort']."' />
					<input type='hidden' name='id' value='" .$arr['id'] . "' />
					<input class='button' name='btnSubmit' value='".$this->l('Update settings')."' type='submit' /></form>" ;
	}
	private function _displayAdminConfigModalForm(){
		$this->_html .='<fieldset>
			<legend><img src="../img/admin/tab-categories.gif" />'.$this->l('Category list').'</legend>
			<table border="0" width="700" cellpadding="0" cellspacing="0" id="form">
			<tr><td colspan="2">'.$this->l('Please specify sort order for each category (starting with 0) .<br />
			 sub categories has there own sort order ').'.<br /><br /></td></tr>
			 <tr><th>'.$this->l('Category name').'<hr/></th><th>'.$this->l('Position').'<hr/></th></tr>' ;
		
		foreach ($this->categories['children'] as $cat){
			$this->_html .=	'<tr><td>'.$cat['name'].'</td>' ;
			$this->_html .=	'<td>' . $this->render_form($cat) .'</td></tr>';
			foreach ($cat['children'] as $ch){
				$this->_html .=	'<tr><td> &nbsp; &nbsp; '.$ch['name'].'</td>' ;
				$this->_html .=	'<td>' . $this->render_form($ch) .'</td></tr>';
			}
		}
		$this->_html .=		'</table></fieldset>';
	}
}