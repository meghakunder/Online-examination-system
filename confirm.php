<?php 
session_start();
      if(!isset($_SESSION['aid'])){
      header("Location: admin.php");}  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Staff</title>
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
    margin-left: 30%;
    padding:20px;
    top: 25%;
    left: 6%;
    width: 28%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container a{
    text-decoration-line: line;
    color: red;
  }
  .container a:hover{
    color:green;
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
<body style=" background-image:url('public/frontside/images/bg.png'); background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h1>SELECT STAFF</h1>
  </div>
<div class="container">
  <?php 
  $check=$_SESSION['dno'];
    if ($check == "1") {
      $dno = "CSE";
    }
    elseif ($check == "2") {
      $dno = "ISE";
    }
    elseif ($check == "3") {
      $dno = "ECE";
    }
    elseif ($check == "4") {
      $dno = "MECH";
    }
    elseif ($check == "5") {
      $dno = "CIV";
    }
    elseif ($check == "6") {
      $dno = "OTHER";
    } ?>
		<form method="post">
			<label>Course Name</label>
			<input type="text" name="name" readonly value="<?php echo $_SESSION['name'] ?>"><br><br>
			<label>Department Name</label>
			<input name="department" readonly value="<?php echo $dno ?>"><br>
			<hr>
			<table border="1" align="center">
  <thead>
      <tr>
      <th>Staff ID</th>
      <th>Staff Name</th>
      <th>Select</th>
    </tr>
  </thead>
  <tbody>
    <a href=""></a>
    <?php 
    
     
    
    include('db.php');

    
     $dn2= $_SESSION['dno'];
    $sql = mysqli_query($con,"SELECT * FROM `teacher` WHERE dno='$dn2'");
    while ($res = mysqli_fetch_array($sql)) 
    {
      echo'
      <tr>
      <td>'.$res['tid'].'</td>
      
      <td>'.$res['tname'].'</td>
      
      

      <td><a href="select.php?tid='.$res['tid'].'">Select</a></td>
        
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