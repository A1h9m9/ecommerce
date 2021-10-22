<?php
include 'connect.php';

$tpl  ='include/templates/'; //templets direcrtory
$css  = 'layout/css/'; //css direcrtory
$js   = 'layout/js/'; //css direcrtory
$lang ='include/languages/'; //languages direcrtory
$func = 'include/functions/';


//includes files

include $func . 'function.php';
include $lang .'english.php';
// include $lang .'arabic.php';
include $tpl .'header.php';
if(!isset($Nonavbar)){
include $tpl .'navbar.php';
}
?>