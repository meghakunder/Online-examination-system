<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/frontside/css/bootstrap.css">
	<script type="text/javascript" src="public/frontside/js/jquery.js"></script>
	<script type="text/javascript" src="public/frontside/js/bootstrap.js"></script>
	<style>
	.button{
		position:absolute;
		top: 55%;
		right: 37%;
		transform: translate(-50%,-50%);
		text-align: center;
	}
	.btn{
		border:1px solid #fff;
		border-radius: 5px;
		padding:10px 30px;
		color: #fff;
		background-color: black;
		text-decoration: none;
		transition: 0.6s ease;
	}
	.btn:hover{
		background-color: #fff;
		color:#000;
	}
	.main{
		margin: auto;
	}
	ul{
		float: right;
		list-style-type: none;
		margin-top: 15px;
		padding-bottom: 5px;
		padding-right: 10px;
	}
	ul li{
		display: initial;
	}
	.title{
	position: absolute;
	top:28%;
	left:50%;
	transform:translate(-50%,-50%);
	}
	.title h1{
		color: black;
		font-size: 35px;

	}	
	</style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('public/frontside/images/bg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1>ADMIN DASHBOARD</h1>
	</div>
	<div class="button">
		<form method="post">		
		<a href="addstaff.php" class="btn">Add New Staff</a><br><br>
		<a href="addstudent.php" class="btn">Add New Student</a><br><br>
		<a href="addcourse.php" class="btn">Add New Course</a><br><br>
		</form>
	</div>
	<div class="main">
		<ul>
			<li><a href="logout.php" class="btn">LOGOUT</a></li>
		</ul>
	</div>
</body>
</html>