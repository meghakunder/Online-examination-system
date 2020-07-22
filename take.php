<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Exam Login</title>
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
        top: 50%;
        left:50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 30px 30px;
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
    .login-box input[type="password"],input[type="password"],input[type="name"],input[type="username"]
    {
      border:none;
      border-bottom: 1px solid #fff;
      background: transparent;
      outline: none;
      height:40px;
      color: white;
      font-size: 16px;
      text-align: center;
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
  top:13%;
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
    <h1>EXAM LOGIN</h1>
  </div>
  <?php 
  $cid=$_GET['cid'];
  $_SESSION['cid']=$cid;
   include('db.php');
  
  $sql1="SELECT * FROM `course` WHERE cid='$cid'";
        $result1= mysqli_query($con,$sql1);
        $check1= mysqli_fetch_array($result1);
        $cname=$check1['cname'];
   ?>
  <div class="login-box">
  
<form method="post">
<label>Course Name</label>
<input type="name" name="cname" required value="<?php echo  $cname ?>" readonly><br>
<label>Course Code</label>
<input type="password" name="code" required><br>
<input type="submit" value="Login" name="login">
<button type="button" class="btn btn-success"><a href="studentdash.php">Back to Login Page</a>
</form></div>

<?php 
   include('db.php');
 
   if(isset($_POST['login']))
   {
    $username=$cid;
    $password=$_POST['code'];
    $one=1;
    $zero=0;
    $three=3;
        $sql="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$one'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        $sql0="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$zero'";
        $result0= mysqli_query($con,$sql0);
        $check0= mysqli_fetch_array($result0);
        $sql3="SELECT * FROM `test` WHERE cid='$username' AND code='$password' AND start='$three'";
        $result3= mysqli_query($con,$sql3);
        $check3= mysqli_fetch_array($result3);
        $_SESSION['testid']=$check['testid'];
        $testid=$check['testid'];
      
        if (isset($check)) 
        { $sid=$_SESSION['sid']; 
          $sql2="SELECT * FROM `result` WHERE sid='$sid' AND testid='$testid'";
        $result2= mysqli_query($con,$sql2);
        $check2= mysqli_fetch_array($result2);
        if(isset($check2))
        {
          echo "
          <script>
          alert('you have already attempted the exam');
          window.location='studentdash.php';
          </script>
          ";
        }
        else
        {
           $_SESSION['cid']= $username;
           $_SESSION['qno']=0;
          echo "
          <script>
          alert('Login Successful');
          window.location='exam.php';
          </script>
          ";
        }
        }
        elseif(isset($check0))
        {
           echo "
          <script>
          alert('Test is not open');
          window.location='studentdash.php';
          </script>
          ";
        }
        elseif(isset($check3))
        {
          echo "
          <script>
          alert('Test is already completed');
          window.location='studentdash.php';
          </script>
          ";
        }
  
    
   }
    ?>
</body>
</html>