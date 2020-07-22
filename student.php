<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="public/frontside/css/bootstrap.css">
  <script type="text/javascript" src="public/frontside/js/jquery.js"></script>
  <script type="text/javascript" src="public/frontside/js/bootstrap.js"></script>
  <style>
      .login-box{
        border: 1px solid black;
        width: 20%;
        height: auto;
        background: black;
        color: white;
        top: 57%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        text-align: center;
      }

      .avatar{
        width:100px;
        height:100px;
        border-radius: 50%;
        position: absolute;
        top:-50px;
        left:calc(50% - 50px);

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
    .login-box input[type="password"],input[type="password"],input[type="name"],input[type="username"]
    {
      border:none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height:40px;
      color: white;
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
    
      color: red;
    }
    .login-box a:hover{
      color: black;
    }
    .title{
  position: absolute;
  top:10%;
  left:50%;
  transform:translate(-50%,-50%);
  }
  .title h1{
    color: black;
    font-size: 35px;

  }
  </style>
</head>
<body style=" background-image: url('public/frontside/images/bgexam.jpg'); background-repeat: no-repeat;background-size: cover;">
  <div class="title">
    <h1>STUDENT LOGIN</h1>
  </div>
  <div class="login-box">
    <img src="public/frontside/images/student.png" class="avatar" >
<form method="post">
<label>Username</label>
<input type="name" name="Username" placeholder="Enter Username" required><br>
<label>Password</label>
<input type="password" name="Password" placeholder="Enter Password" required><br>
<input type="submit" value="Login" name="login">
<button type="button" class="btn btn-success"><a href="home.php">Back to Login Page</a>
</form></div>

<?php 
	 include('db.php');
   session_start();
	 if(isset($_POST['login']))
	 {
		$username=$_POST['Username'];
		$password=$_POST['Password'];
        $sql="SELECT * FROM `student` WHERE sid='$username' AND spwd='$password'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        $_SESSION['dno']=$check['dno'];
        if (isset($check)) 
        {
           $_SESSION['sid']= $username;
          echo "
          <script>
          alert('Login Successful');
          window.location='studentdash.php';
          </script>
          ";
        }
        else
        {
           echo "
          <script>
          alert('Login Unsuccessful');
          window.location='student.php';
          </script>
          ";
        }
	
		
	 }
    ?>
</body>
</html>