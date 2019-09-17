<?php
/*************************************************
* Admidio Grundeinstellungen und Accounting Values
**************************************************/
include('Scripts/Comon.php');

/*************************************************
* Seitentitel hier eingeben:
**************************************************/
$headline = 'Leer';

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


$page->addHtml('<div>');

$page->addHtml('<a href="'.$app_show.'" title="Backn">');
$page->addHtml('<button name="Klickmich" type="button" minwidth="150" minheight="200"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="' . $image_url . 'Blanko.png" width="155" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>Hauptseite</b></p>');
$page->addHtml('</button></a>');

$page->addHtml('<button name="Klickmich" type="button"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="https://www2.informatik.hu-berlin.de/Themen/www/selfhtml/html/formulare/anzeige/selfhtml.gif" width="106" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>SELFHTML Portalseite</b></p>');
$page->addHtml('</button>');

$page->addHtml('<a href="http://wiki.selfhtml.org/wiki/href" title="mehr Informationen">');
$page->addHtml('<button name="Klickmich" type="button"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="https://www2.informatik.hu-berlin.de/Themen/www/selfhtml/html/formulare/anzeige/selfhtml.gif" width="106" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>SELFHTML Portalseite</b></p>');
$page->addHtml('</button></a>');

$page->addHtml('</div>');

$page->addHtml('<div>');

$page->addHtml('<a href="http://wiki.selfhtml.org/wiki/href" title="mehr Informationen">');
$page->addHtml('<button name="Klickmich" type="button"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="https://www2.informatik.hu-berlin.de/Themen/www/selfhtml/html/formulare/anzeige/selfhtml.gif" width="106" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>SELFHTML Portalseite</b></p>');
$page->addHtml('</button></a>');
$page->addHtml('<button name="Klickmich" type="button"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="https://www2.informatik.hu-berlin.de/Themen/www/selfhtml/html/formulare/anzeige/selfhtml.gif" width="106" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>SELFHTML Portalseite</b></p>');
$page->addHtml('</button>');
$page->addHtml('<a href="http://wiki.selfhtml.org/wiki/href" title="mehr Informationen">');
$page->addHtml('<button name="Klickmich" type="button"');
$page->addHtml('  value="SELFHTML">');
$page->addHtml(' <p><img src="https://www2.informatik.hu-berlin.de/Themen/www/selfhtml/html/formulare/anzeige/selfhtml.gif" width="106" height="109" border="0" alt="SELFHTML Logo"><br>');
$page->addHtml(' <b>SELFHTML Portalseite</b></p>');
$page->addHtml('</button></a>');

$page->addHtml('</div>');

/********************************************
* Seite anzeigen
********************************************/
$page->show();

?>
