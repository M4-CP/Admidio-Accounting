<?php
// Erzeuge ein 100*30 Bild
//$im = imagecreate(100, 30);
include('Common.php');

$limage = 'images/button1.png';
$im     = imagecreatefrompng($limage);
// Weißer Hintergrund und blauer Text
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);
//$py     = (imagesy($im) / 2;
$string = $_GET['text'];
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;

// Schreibe die Zeichenkette oben links
imagestring($im, 5, $px, 40, $string, $textcolor);

// Gib das Bild aus
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);

?>
