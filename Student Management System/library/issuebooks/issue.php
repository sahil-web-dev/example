<?php
session_start();

	if($_SESSION['Username'])
	{
	}
	else
	{
		header('location:../librarian/login/librarylogin.php');
	}
?>
<html>
<head>
<title>Issue Book</title>
<link href="../CSS/search.css" rel="stylesheet" type="text/css" />
<Link href="../CSS/Logo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<header class="masthead">
		<div class="logo1">
			<h1 class="logo">
			  <span class="word2">&nbspSmartCard&nbsp</span>
			  <span class="word1">&nbspSystems&nbsp</span>
			</h1>
			<!-- @rblakejohnson o{-<]: -->
		</div>
		<nav>
			<ul>
				<li><a href="../../index.php">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">Contact US</a></li>
				<li><a href="../libdash.php">Dashboard</a></li>
				<li><a href="../logout.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<div class="lgm">
	<h3>Issue Book</h3><br/><br/>
	<form action="issuebook.php" method="post">
		<input type="number" name="SID" placeholder="Enter Student ID">
		<input type="Submit" name="submit" value="Search">
	</form>
</div>
</body>
</html>
