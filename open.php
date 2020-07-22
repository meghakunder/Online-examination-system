<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Open Test</title>
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
    <h1>OPEN TEST</h1>
  </div>
  <div class="container">
	<table border="1">
 <thead>
      <tr>
      <th>Test ID</th>
      <th>Course Id</th>
      <th>Exam Code</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     
    
    include('db.php');

    
     $tid=$_SESSION['tid'];
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE tid='$tid'");
    $res = mysqli_fetch_array($sql);
    $cid=$res['cid'];
    $zero=0;
    $sql1 = mysqli_query($con,"SELECT * FROM `test` WHERE cid='$cid' AND start='$zero'");
    
    while ($res1 = mysqli_fetch_array($sql1)) 
    {
      echo'
      <tr>
      <td>'.$res1['testid'].'</td>
      
      <td>'.$res1['cid'].'</td>

      <td>'.$res1['code'].'</td>
      

      <td><a href="start.php?testid='.$res1['testid'].'">Open test</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
</div>
</body>
</html>
