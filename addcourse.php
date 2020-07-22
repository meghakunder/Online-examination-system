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
		.login-box{
        width: 30%;
        height: auto;
        background:black;
        color:#fff;
        top:50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 40px 30px;
        text-align: center;

      }

    .login-box label{
      margin:0;
      padding:0;
      font-weight: bold;
      font-size: 20px;
    }
    .login-box input{
      width:100%;
      margin-bottom: 20px;

    }
    .login-box input[type="text"],input[type="name"]
    {
      border:none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height:40px;
      color:#fff;
      font-size: 16px;
    }
    .login-box input[type="submit"]
    {
      border: none;
      outline:none;
      height: 40px;
      background:#1c8adb;
      font-size: 18px;
    }
    .login-box input[type="submit"]:hover{
      cursor:pointer;
      background:#39dc79;
      color:#000;
    }
    .login-box a{
      text-decoration: none;
      font-size: 20px;
      color: black;
    }
    .login-box a:hover{
      color: red;
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
<body style=" background-image: url('public/frontside/images/bg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1>ADD NEW COURSE</h1>
	</div>
	<div class="login-box">
		<form method="post">
			<label>Enter the name of Course</label>
			<input type="text" name="name" placeholder="Enter Course Name"><br>
			<label>Enter the department name</label>
			<select name="department" required>
  <option value="CSE">CSE</option>
  <option value="ISE">ISE</option>
  <option value="ECE">ECE</option>
  <option value="MECH">MECH</option>
  <option value="CIV">CIV</option>
  <option value="OTHER">OTHER</option>
</select><br><br>
<input type="submit" value="Add" name="add"><br>
<button type="button" class="btn btn-success"><a href="admindash.php">  Go Back to Main Menu</a></button>
		</form>
	</div>
<?php 
	 include('db.php');
	 if(isset($_POST['add']))
	 {
		$_SESSION['name']=$_POST['name'];
		
		
		$check=$_POST['department'];
		if ($check == "CSE") {
			$dno = 1;
		}
		elseif ($check == "ISE") {
			$dno = 2;
		}
		elseif ($check == "ECE") {
			$dno = 3;
		}
		elseif ($check == "MECH") {
			$dno = 4;
		}
		elseif ($check == "CIV") {
			$dno = 5;
		}
		elseif ($check == "OTHER") {
			$dno = 6;
		}
		$_SESSION['dno'] = $dno;
       
        echo "
          <script>
         
          window.location='confirm.php';
          </script>
          ";
	
		
	 }
    ?>
</body>
</html>