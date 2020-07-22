<?php 
session_start();
      if(!isset($_SESSION['sid'])){
      header("Location: student.php");}  
?>
<!DOCTYPE html>
<html>
<head>
  <title>confirm</title>
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
    top: 28%;
    left: 6%;
    width: 28%;
    height: auto;
    display: inline;
    text-align: center;
  }
  .container input[type="name"],input[name="cname"],input[type="name"],input[name="tname"]{
    text-align: center;
  }
    .title{
  
  
  position: absolute;
  top: 20%;
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
    <h1>SUBMIT EXAM</h1>
  </div>
  <?php 
  $cname=$_SESSION['cname'];
  $tname=$_SESSION['tname'];
   ?>
  <div class="container">
<form  method="post">
  <label>Course Name</label>
  <input type="name" name="cname" required value="<?php echo  $cname ?>" readonly><br>
  <label>Instructor Name</label>
  <input type="name" name="tname" required value="<?php echo  $tname ?>" readonly><br><br>
<input type="submit" name="s2" value="Submit">
</form></div>
<?php
include('db.php');
 
if(isset($_POST['s2']))
{ $testid=$_SESSION['testid'];
  $sid=$_SESSION['sid'];
    $score=0;
$inn=1;
      $sql1 = mysqli_query($con,"SELECT * FROM `answer` WHERE testid='$testid' AND sid='$sid'");
   
    while ($res1 = mysqli_fetch_array($sql1)) {
      $count=1;
        $sql2 = mysqli_query($con,"SELECT * FROM `questions` WHERE testid='$testid'");
      while($res2 = mysqli_fetch_array($sql2)){
        if($count==$inn){
      if($res1['ans']==$res2['answer'])
      {
      
      $score++;
      
     }
     
 }
     $count++;
  }
  $inn++;
    }
     $_SESSION['score']=$score;
     $sql3="SELECT * FROM `test` WHERE testid='$testid' ";
        $result1= mysqli_query($con,$sql3);
        $check1= mysqli_fetch_array($result1);
        
        $cid=$check1['cid'];
       
           $sql2="INSERT INTO result(sid,cid,testid,score) VALUES ('$sid','$cid','$testid','$score')";
        $result2= mysqli_query($con,$sql2);
      
          echo "
          <script>
          alert('Submission Successful,You scored $score');
          window.location='studentdash.php';
          </script>
          ";
       
}
  ?>  
</body>
</html>

