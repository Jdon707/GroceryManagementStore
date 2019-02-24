<?php

session_start();
if(!isset($_SESSION ['username'])){
	
	header('location:login.php');
}


?>


<html>
<head> 
<title> Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<meta http-equiv="refresh" content="8;url=Grocery/index.html" />
</head>

<body>

	<div class="container">
	
 

<a class="float-right" href="logout.php">LOGOUT</a>

<h1>WELCOME <?php echo $_SESSION['username']; ?></h1>
<br><br>
<h3> <marquee>Redirecting you to Grocery E-Store </marquee></h3>


</body>
</html>