<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
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
    top: 33%;
    left: 2%;
    width: auto;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: none;
    color: red;
    font-size: 20px;
  }
  .container a:hover{
    color: green;
  }
  .button{
    position:absolute;
    top: 60%;
    right: 35%;
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
  top: 22%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 35px;
  }
</style>
</head>
<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('public/frontside/images/bgexam.jpg'); background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h1>STUDENT DASHBOARD</h1>
  </div>
  <div class="container">
	<form method="post">
	

		
	
		
			<table border="1">
  <thead>
      <tr>
      <th>Course ID</th>
      <th>Course Name</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     
    
    include('db.php');

    
     $dno=$_SESSION['dno'];
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE dno='$dno'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['cid'].'</td>
      
      <td>'.$res['cname'].'</td>
      
      

      <td><a href="take.php?cid='.$res['cid'].'">Take test</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
	
	</form>
</div>
<div class="main">
    <ul>
      <li><a href="logout.php" class="btn">LOGOUT</a></li>
    </ul>
  </div>
</body>
</html>