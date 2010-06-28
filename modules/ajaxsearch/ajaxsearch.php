<?php

class AjaxSearch extends Module{
	public $ajax_search_limit = 20;
	
	public function __construct(){
		$this->name = 'ajaxsearch';
		$this->tab = 'tlissak modules';
		$this->version = '0.1';
		parent::__construct();
		$this->displayName = $this->l('Ajax Search');
		$this->description = $this->l('Adds more details to the ajax search');
	}
	public function listenAjaxSearch(){
		
		$out = array() ;
		
		if ($query = urldecode(Tools::getValue('q')) 
			AND !is_array($query)){
			global $cookie ;					
			$link = new Link();
			$search = Search::find($cookie->id_lang, $query, 1, $this->ajax_search_limit , 'position', 'desc', /*isAJAX*/ true);
			
			foreach ($search as $product){				
				$out_product = array() ;				
				$product_o 	= new Product(intval($product['id_product'])) ;
				$id 		= $product['id_product'] ;
				$image_cover= $product_o->getCover($id);
				$price		= $product_o->price ;
				$out_product['price'] 	= Tools::displayPrice( $price )   ;				
				$out_product['name']  	= $product['pname'] . ' ' . $product['cname'] ; 				
				$out_product['link'] 	= $link->getProductLink($id, $product['prewrite'], $product['crewrite'])	;
				$out_product['image']	= $link->getImageLink($id,$id.'-'.$image_cover['id_image']  , 'small') ;		
				
				$out[] = $out_product ;
			}
		}
		echo json_encode($out) ;
	}
	public function install(){
		if(	parent::install() == false	)
			return false;
		return true;
	}
}


?>
