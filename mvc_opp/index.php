<?php 
include 'controller/controller.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="webroot/css/style.css">
 </head>
 <body>
 	<h1>Welcome to my Website</h1>
 	<a href="index.php">home</a>
 	<a href="index.php?action=news">News</a>
 	<a href="index.php?action=products">products</a>
 	<a href="index.php?action=user">user</a>
 </body>
 </html>

<?php 
	$controller = new Controller();
	$controller ->handleRequest();
 ?>