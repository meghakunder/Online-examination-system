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
    padding:10px;
    top: 25%;
    right: 33%;
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
  top:15%;
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
		<h1>ADD QUESTIONS</h1>
	</div>
	<?php 
	$qno=$_SESSION['qno'];
	$qno++;
    $_SESSION['qno']=$qno;
	 ?>
	 <div class="container">
	<form method="post">
		<label>Question no</label>
<input type="text" name="qno" required value="<?php echo  $qno ?>"><br>
<label>Question</label>
<input type="text" name="question" required><br>
<label>Choice 1</label>
<input type="text" name="c1" required><br>
<label>Choice 2</label>
<input type="text" name="c2" required><br>
<label>Choice 3</label>
<input type="text" name="c3" required><br>
<label>Choice 4</label>
<input type="text" name="c4" required><br>
<label>Answer</label>
<input type="text" name="ans" required><br>
<input type="submit" name="s1" value="Submit and Add another question">
<input type="submit" name="s2" value="Submit and End">
	</form>
	</div>
<?php
include('db.php');
$one=1;

        $sql1 = mysqli_query($con,"SELECT * FROM `test` WHERE now='$one'");
    $res1 = mysqli_fetch_array($sql1);
        $testid=$res1['testid'];
	 if(isset($_POST['s1']))
	 {
	 	$ch1=$_POST['c1'];
	 	$ch2=$_POST['c2'];
	 	$ch3=$_POST['c3'];
	 	$ch4=$_POST['c4'];
	 	$ans=$_POST['ans'];
	 	$ques=$_POST['question'];
	 	$sql="INSERT INTO questions(testid,question,q1,q2,q3,q4,answer) VALUES ('$testid','$ques','$ch1','$ch2','$ch3','$ch4','$ans')";
        $result= mysqli_query($con,$sql);
        $qno=$_SESSION['qno'];
	$qno--;
    $_SESSION['qno']=$qno;
       
          echo "
          <script>
          alert('Addition Successful');
          window.location='ques.php';
          </script>
          ";
	 }
	 if(isset($_POST['s2'])){
	 	$ch1=$_POST['c1'];
	 	$ch2=$_POST['c2'];
	 	$ch3=$_POST['c3'];
	 	$ch4=$_POST['c4'];
	 	$ans=$_POST['ans'];
	 	$ques=$_POST['question'];
	 
	 	   
	 	$sql="INSERT INTO questions(testid,question,q1,q2,q3,q4,answer) VALUES ('$testid','$ques','$ch1','$ch2','$ch3','$ch4','$ans')";
        $result= mysqli_query($con,$sql);
  
       $sql2="UPDATE test SET now=0 WHERE testid=$testid";
        $result2= mysqli_query($con,$sql2);
          echo "
          <script>
          alert('Addition Successful');
          window.location='teacherdash.php';
          </script>
          ";

	 }
  ?>
</body>
</html>