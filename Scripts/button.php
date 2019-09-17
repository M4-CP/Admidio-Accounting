
<?php
include ('Comon.php');
header("Content-type: image/png");
$string = $_GET['text'];
$im     = imagecreatefrompng($image_url."kisspng-finance-business-saving-investment-security-hand-writing-finance-5a7326c4441993.4362403415174960042789.png");
$orange = imagecolorallocate($im, 220, 210, 60);
$px     = (imagesx($im) - 7.5 * strlen($string)) / 2;
imagestring($im, 3, $px, 9, $string, $orange);
imagepng($im);
imagedestroy($im);

?>
