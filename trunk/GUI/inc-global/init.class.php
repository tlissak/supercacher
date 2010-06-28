<?php
class GUI  {
	public	$loaded = 'X' ;
	private $smarty = NULL ;
	public	$tplpath = 'GUI/' ;
	private $id_lang ;
	
	public	$ajax_search_limit = 10 ;
	public	$ajax_search_query_name = 'q' ;
	
	public	function __construct(){ 	
		global $smarty ;
		global $cookie ;
		$this->smarty 	=  $smarty ; 
		$this->id_lang 	= intval( $cookie->id_lang) ? intval( $cookie->id_lang) : intval(Tools::getValue('id_lang')) ;
		
		$this->AssignLoaded() ;		
		$this->AssignGUIPath() ;
	}
	public function AssignLoaded(){
		$this->smarty->assign('GUI',$this->loaded) ;	
	}
	public function AssignGUIPath(){
		$this->smarty->assign('GUI_THEME_PATH', '../../../GUI/');
		$this->smarty->assign('GUIPATH',$this->GUI_PATH()) ;
	}
	public $GUI_PAGES_EXECPTION = array('shopping-cart' ,' header /footer' ,' order-slip '
	,' order-address ',' order-carrier ' ,' order-payment ','order-confirmation') ;
	public $GUI_PAGES_ORDERSTEPS = array('order'=>'order-confirmation'		
			,'order-address'=>'order-address','order-carrier'=>'order-carrier'	
			,'order-confirmation'=>'order-confirmation'	,'order-detail'=>'order-detail'	
			,'order-follow'=>'order-follow'	,'order-payment'=>'order-payment','order-return'=>'order-return') ;			
	public $GUI_PAGES = array(
			'404'=>'404'
			,'address'=>'address'
			,'addresses'=>'addresses'
			,'authentication'=>'authentication'
			,'best-sales'=>'best-sales'
			,'category'=>'category'
			,'cms'=>'cms'
			,'contact-form'=>'contact-form'
			,'discount'=>'discount'
			,'history'=>'history'
			,'identity'=>'identity'
			,'index'=>'index'	
			,'maintenance'=>'maintenance'	
			,'manufacturer-list'=>'manufacturer-list'	
			,'manufacturer'=>'manufacturer'	
			,'my-account'=>'my-account'	
			,'new-products'=>'new-products'
			,'password'=>'password'	
			,'prices-drop'=>'prices-drop'
			,'product'=>'product'	
			,'search'=>'search'	
			,'shopping-cart'=>'shopping-cart'	
			,'sitemap'=>'sitemap'				
			,'supplier-list'=>'supplier-list'	
			,'supplier'=>'supplier'
	) ;
	public function GUI_PATH() { 	
		$__gui_ext	= '.asp' ;
		$__gui_relpath='GUI/' ;
		$__gui_path	= '../../../GUI/' ;
		$__phpself 	= $_SERVER['PHP_SELF'] ;
		$__spos 	= strrpos($__phpself,'/',-1) ;
		$__fname 	= substr($__phpself,$__spos+1) ;
		$__name		= str_replace('.php','',$__fname) ;
		$__out_path = $__gui_path. $this->GUI_PAGES[$__name]  .$__gui_ext ;
		$__rel_path	= $__gui_relpath. $this->GUI_PAGES[$__name]  .$__gui_ext ;				
		if (file_exists($__rel_path)){
			return  $__out_path ;
		}else{
			//echo __FILE__ . ': file not found ' .$__out_path. ' token :'. $__phpself . ' - ' 	;
		}
	}
}
?>