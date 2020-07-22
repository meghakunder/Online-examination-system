<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Questions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/frontside/css/bootstrap.css">
	<script type="text/javascript" src="public/frontside/js/jquery.js"></script>
	<script type="text/javascript" src="public/frontside/js/bootstrap.js"></script>
	<style>
 .container{
    
    color: white;
    border: 1px solid black;
    background: black;
    text-decoration-color: white;
    font-size: 20px;
    position: absolute;
    margin-left: 35%;
    padding:20px;
    top: 30%;
    left: 3%;
    width: 26%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: line;
    color: white;
    font-size: 20px;
  }
  .container a:hover{
    color: red;
  }

    .title{
  
  position: absolute;
  top:18%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 35px;

  }
	</style>
</head>

<body style=" background-image: url('public/frontside/images/tecbg.jpg'); background-repeat: no-repeat;background-size: cover;">
<div class="title">
		<h1>TEST CODE</h1>
	</div>
<div class="container">
	
	<form method="post">
		<label>CODE FOR TEST</label>
<input type="text" name="code" required ><br>
<label>DATE</label><br>
<input type="date" name="date" required><br><br>

<input type="submit" name="s2" value="Create">
	</form>
	</div>
<?php
include('db.php');
$one=1;
$_SESSION['qno']=0;
	 if(isset($_POST['s2']))
	 {
	 	$cid=$_SESSION['cid'];
	 	$date=$_POST['date'];
	 	$code=$_POST['code'];
	 	$now=1;
	 	$start=0;
	 	$sql="INSERT INTO test(`cid`,`date`,`start`,`code`,`now`) VALUES ('$cid','$date','$start','$code','$now')";
        $result= mysqli_query($con,$sql);
       
          echo "
          <script>
          alert('Addition Successful');
          window.location='ques.php';
          </script>
          ";
	 }
	 
  ?>
</body>
</html>