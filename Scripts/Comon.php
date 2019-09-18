<?php

// Pfad des Plugins ermitteln
// Pfad des Plugins ermitteln
$plugin_folder_pos = strpos(__FILE__, 'adm_plugins') + 11;
$plugin_file_pos   = strpos(__FILE__, basename(__FILE__));
$plugin_path       = substr(__FILE__, 0, $plugin_folder_pos);
$plugin_folder     = substr(__FILE__, $plugin_folder_pos+1, $plugin_file_pos-$plugin_folder_pos-2);        

//global $g_tbl_praefix;
//$tablename=$g_tbl_praefix.'_organizations';

require_once(substr(__FILE__, 0,strpos(__FILE__, 'adm_plugins')-1).'/adm_program/system/common.php');


$app_url = substr(__DIR__ ). '/adm_plugins/accounting/';
$app_show = $app_url . 'accounting.php';
$image_url = $app_url . 'Images/';
$script_url = 'Scripts/';

//  function bar()
//  {
//   return 'Ich existiere nicht, bis foo() aufgerufen wurde.';
//  }

function bbutton ($Link, $Label1, $Label2)
	{
	$B1 = '<a href="'.$Link.'" title="Backn">';
	$B1 = $B1 . '<button name="Klickmich" type="button"';
	$B1 = $B1 . '  value="SELFHTML">';
	$B1 = $B1 . ' <p><img src=Scripts/button.php?text=' . $Label1 . ' border="0" alt="'. $Label1 . '/' . $Label2 . '"><br>';
	$B1 = $B1 . '<b>'.$Label2.'</b></p>';
	$B1 = $B1 . '</button>';
	$B1 = $B1 . '</button></a>';

	return $B1;
}
?>
