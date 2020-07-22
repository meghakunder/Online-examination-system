<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
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
    top: 23%;
    right: 37%;
    width: auto;
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
  <h1>Questions</h1>
</div>
	<?php  
	$qno=$_SESSION['qno'];
	$qno++;
	$_SESSION['check']=0;
	$_SESSION['qno']=$qno;
	include('db.php');
	$testid=$_SESSION['testid'];
	$sql="SELECT * FROM `questions` WHERE testid='$testid'";
        $result= mysqli_query($con,$sql);
        $check= mysqli_fetch_array($result);
        
        $qid=$check['qid'];
        $qid++;
        $_SESSION['qid']=$qid;
        $quu=$check['question'];
        $q1=$check['q1'];
        $q2=$check['q2'];
        $q3=$check['q3'];
        $q4=$check['q4'];
        $ans=$check['answer'];

	 ?>
   <div class="container">
<form  method="post">
<label>Qno:</label>
<input type="text" name="qno" value="<?php echo  $qno ?>"><br><br>
<label>Question:</label>
<input type="text" name="qno" value="<?php echo  $quu ?>"><br>
<input type="radio" name="radio" value="1"><?php echo  $q1 ?><br>
<input type="radio" name="radio" value="2"><?php echo  $q2 ?><br>
<input type="radio" name="radio" value="3"><?php echo  $q3 ?><br>
<input type="radio" name="radio" value="4"><?php echo  $q4 ?><br><br>
<input type="submit" name="submit" value="Submit">
</form>
</div>
<?php
include('db.php');
if(isset($_POST['submit']))
{
	$qno--;
	$_SESSION['qno']=$qno;
	$sid=$_SESSION['sid'];
	if(isset($_POST['radio']))
	{   
     $ans=$_POST['radio'];
         $sql="INSERT INTO answer(sid,testid,ans) VALUES ('$sid','$testid','$ans')";
        $result= mysqli_query($con,$sql);
				
			echo "
          <script>
          
          window.location='exam1.php';
          </script>
          ";
		}
		
	}

  ?>

</body>
</html>
