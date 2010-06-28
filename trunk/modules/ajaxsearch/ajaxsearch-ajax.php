<?php
include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/../../init.php');
include(dirname(__FILE__).'/ajaxsearch.php');
$ajaxSearch = new AjaxSearch();
$ajaxSearch->listenAjaxSearch() ;
?>