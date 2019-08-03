<?php 
	include 'controller/controller.php';
 ?>
<h1>MY WEDSITE</h1>
	|	<a href="index.php?action=home">HOME</a>
	|	<a href="index.php?action=user">USER</a>
	|	<a href="index.php?action=product">PRODUCTS</a>
	|	<a href="index.php?action=login">LOGIN</a>
<?php 
	$controller = new Controller();
	$controller->handleRequest();
 ?>	