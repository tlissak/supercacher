<?php
class AHookModal extends Module{
	private $hookName = 'navBar' ;
	public function __construct(){
		$this->name = 'ahookmodal';
		$this->tab = 'modules by tlissak';
		$this->version = 0.1;
		parent::__construct();		
		$this->page = basename(__FILE__, '.php');
		$this->displayName = $this->l('create new hook modal template');
		$this->description = $this->l('create new hook modal template');
	}
	public function install(){
        $name = $this->hookName ;
        $title = "Navigation Bar";
        $description = "Hooks the Navigation Bar onto the top of your page";
        $position = "1";
		
		if (parent::install() == false OR $this->registerHook('top') == false)
			return false;
 	 	return Db::getInstance()->Execute('INSERT INTO `'._DB_PREFIX_.'hook` (`id_hook`, `name`, `title`, `description`, `position`) VALUES ("'.intval($this->id).'", "'.$name.'", "'.$title.'", "'.$description.'", "'.$position.'")');
    }
 	public function uninstall()	{
 	 	if (!parent::uninstall())
 	 		return false;
 		return Db::getInstance()->Execute('DELETE FROM `'._DB_PREFIX_.'hook` WHERE `id_hook` = '.intval($this->id));
	}
	function hookTop($params){
		global $smarty;
		$depth = 0;
		$rootCateg = Category::getRootCategory()->recurseLiteCategTree($depth);
		if (isset($_GET['id_category']))
		$smarty->assign('currentCategoryId', intval($_GET['id_category']));
		$smarty->assign('bar_tpl_path', _PS_MODULE_DIR_.'categoriesbar/category-bar-level.tpl');
		$smarty->assign('categoriesLevel', $rootCateg);
		return $this->display(__FILE__, 'categoriesbar.tpl');
	}	
	function hookNavbar($params){
		return $this->hookTop($params);
	}			
}

?>