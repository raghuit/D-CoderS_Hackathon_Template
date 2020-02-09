<?php 
require_once('session.php');
?>
<html>
<head>
	<title>Home</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" />
</head>
<body>


	<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
	    <div class="container">
	        <a class="navbar-brand" href="#">
	            Panel
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	            <!-- Left Side Of Navbar -->
	            <ul class="navbar-nav mr-auto">
	            <li class="nav-item">
	                    <a class="nav-link" href="index.php">Home</a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="logout.php">Logout</a>
	                </li>
	            </ul>

	            
	        </div>
	    </div>
	</nav>
