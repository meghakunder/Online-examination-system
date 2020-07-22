<?php 
session_start();
      if(!isset($_SESSION['tid'])){
      header("Location: teacher.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
    right: 38%;
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
  top:15%;
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
    <h1>SELECT COURSE</h1>
  </div>
<div class="container">
	<form method="post">
		<table border="1" style="text-align: center;">
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
    $tid=$_SESSION['tid'];
$sql1 = mysqli_query($con,"SELECT * FROM `teacher` WHERE tid='$tid'");
    $res1 = mysqli_fetch_array($sql1);
    $dno=$res1['dno'];
     
    $sql = mysqli_query($con,"SELECT * FROM `course` WHERE dno='$dno'");
    while ($res = mysqli_fetch_array($sql)) 
    {
	    	$_SESSION['cid']=$res['cid'];
	    	
      echo'
      <tr>
      <td>'.$res['cid'].'</td>
      
      <td>'.$res['cname'].'</td>
      
      

      <td><a href="next.php?cid='.$res['cid'].'">SELECT</a></td>
        
      </tr>
      ';
      
     }
  
      ?>
  </tbody>
</table>
	</form>
</div>
</body>
</html>