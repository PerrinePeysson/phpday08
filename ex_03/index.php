<?php
session_start();
if (isset($_GET["name"]) != NULL){
	$_SESSION["name"] = $_GET["name"];
}
if (isset($_SESSION["name"])!= NULL){
	echo "Hello " . $_SESSION["name"];
}else
echo "Hello platypus";
?>
