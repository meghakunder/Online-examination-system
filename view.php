<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
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
    right: 38%;
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
    color: black;
  }

    .title{
  
  position: absolute;
  top:15%;
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
    <h1>VIEW RESULT</h1>
  </div>
  <div class="container">
		<table border="1">
 <thead>
      <tr>
      <th>Student ID</th>
      <th>student Name</th>
      <th>Score</th>
      
    </tr>
  </thead>
  <tbody>
   
    <?php 
    
     $testid=$_GET['testid'];
    
    include('db.php');

    
     
    $sql1 = mysqli_query($con,"SELECT * FROM `result` WHERE testid='$testid'");
    
    while ($res1 = mysqli_fetch_array($sql1)) 
    { $sid=$res1['sid'];
      $sql2 = mysqli_query($con,"SELECT * FROM `student` WHERE sid='$sid'");
      $res2 = mysqli_fetch_array($sql2);
      echo'
      <tr>
      <td>'.$res1['sid'].'</td>

      <td>'.$res2['sname'].'</td>
      
      <td>'.$res1['score'].'</td>

      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table><br>
<button type="button" class="btn btn-success"><a href="teacherdash.php">Back to Dashboard</a></button>
</div>
</body>
</html>