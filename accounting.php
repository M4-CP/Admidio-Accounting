<?php
/*************************************************
* Admidio Grundeinstellungen und Accounting Values
**************************************************/
include('Scripts/Comon.php');

/*************************************************
* Seitentitel hier eingeben:
**************************************************/
$headline = 'Accounting';

//Begin der Seite
$page = new HtmlPage($headline);
/*************************************************
* Menue
*************************************************/

$listsMenu = new HtmlNavbar('menu_lists_list', $headline, $page);

// show link to pluginpreferences 

/*************************************************
* Menue Einträge erstellen:
* 1. Link Back aufs Hauptmenue
* 2. Untermenuepunkte
*************************************************/
              
	$listsMenu->addItem('menu_item_back', $app_show, $gL10n->get('SYS_BACK'), 'back.png');


	// $listsMenu->addItem('admMenuItemPreferencesLists', $app_url . 'preferences.php', 'Einstellungen', 'options.png', 'right');  
        
/********************************************
* Menue Ende, Anzeige
********************************************/
$page->addHtml($listsMenu->show(false));
/********************************************
* Seiteninhalt
********************************************/

$page->addHtml('       ');


// $page->addHtml('<form action="'.$app_show.'"><input height=20px type="submit" value="Testeintrag" /></form>');
$page->addHtml('<center><div>');
$page->addHtml(' ');
$page->addHtml(' <p><img src='. $image_url . 'Logo.png width= 80%');
$page->addHtml('<div></center>');

$page->addHtml(bar());

$page->addHtml('<center><div>');

$page->addHtml(bbutton ($app_show, 'Test 1','Habe mal ...'));
$page->addHtml(bbutton ($app_show, 'Bank','Konto 1'));
$page->addHtml(bbutton ($app_show, 'Kasse','Kasse 1'));

$page->addHtml('</div></center>');


/********************************************
* Seite anzeigen
********************************************/
$page->show();

?>
