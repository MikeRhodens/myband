<?php
// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;
//functions
require 'models/newsFunctions.php';

$templateParser->assign('title', 'dagboek van een bloger');
$action = (empty($_GET['action'])) ? '' : $_GET['action'];
$templateParser->assign('action',$action);
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');



switch ($action) {
	case 'news':
		// Haal de nieuws artikelen op
		$page = (empty($_GET['page'])) ? '' : $_GET['page'];
		if ($page == '') {
			header('location:?action=news&page=1');
		}
		$result = selectNewsArticles($page);
		$pagecount = getPageCount();

		$templateParser->assign('pagecount',$pagecount);
		$templateParser->assign('result',$result);
		$templateParser->assign('page',$page);
		$templateParser->display('views/newsNav.tpl');
		$templateParser->display('views/newsarticles.tpl');
		$templateParser->display('views/newsNav.tpl');
		break;
	case 'upload':
		$templateParser->display('views/productform.tpl');
		break;
	case 'doUpload':
		header('location:?action=news');
		break;
	case 'aboutUs':
		$templateParser->display('views/aboutUs.tpl');
		break;
	case 'contact':
		$templateParser->display('views/contact.tpl');
		break;
	case 'search':
		$page = (empty($_GET['page'])) ? '' : $_GET['page'];
		if (!isset($doSearch)) {
			$search = (empty($_GET['search'])) ? '' : $_GET['search'];
		}
		if ($page == '') {
			header('location:?action=search&page=1');
		}
		$templateParser->display('views/search.tpl');
		$templateParser->assign('search',$search);
		$resultTitle = getSearchResults($page,$search);
		$pagecount = getSearchpagecount($search);
		if ($pagecount != 0) {
			$templateParser->assign('page',$page);
			$templateParser->assign('pagecount',$pagecount);
			if ($pagecount >= 2) {
				$templateParser->display('views/searchNav.tpl');
			}
			if ($search != '') {
				$templateParser->assign('resultTitle',$resultTitle);
				$templateParser->display('views/searchResult.tpl');
			}
			if ($pagecount >= 2) {	
				$templateParser->display('views/searchNav.tpl');
			}
		}
		break;
	default:
		header('location:?action=news');
		break;
}
$templateParser->display('views/footer.tpl');