<?php 
$root="http://cruab.cat/";
$lang="cat";
$fullPath=explode("/",getcwd());
$folder = end($fullPath);
if($folder == "es")
	$lang="es";
else if($folder == "en")
	$lang="en";

?>