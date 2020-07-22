<!DOCTYPE html>
<html>
<head>
	
	<title>Home</title>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <style>
	header{
		font-size: 20px;
		
		background-size:cover;
		background-position:center; 
	}
        
	
 ul{
	 	
	 	list-style-type: none;
	 	margin-top: 25px;
	 }
	 ul li{
	 	display:inline-block;
	 }
ul li a{
	text-decoration-line: none;
	color:white;
	padding: 5px 20px;
	border:1px solid white;
	transition:0.6s ease;
}
ul li a:hover{
	background-color: white;
	color:#000;
}
ul li.active a{
	background-color: white;
	color:#000;
}
.container-fluid{
	max-width: 1200px;
	margin:auto;
	text-align: center;
	padding-top: 8px;
	padding-bottom: 8px;
}
.title{
	position: absolute;
	top: 30%;
	left:50%;
	transform:translate(-50%,-50%);
	text-align: center;
}
.title h1{
	color: black;
	font-size: 35px;
}
.title p{
	font-size: 20px;
	font-weight: bold;
}	
.images{
	position: absolute;
	top: 55%;
	left: 40%;
}
.img-circle{
width: 50%;
height: 50%;
border-radius: 50%;
	
}
.container{
	position: absolute;
	top: 43%;
	left: 35%;
	width:30%;
	height:30%;
}

</style>


</head>

<body style=" background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , url('public/frontside/imageS/bg.png'); background-repeat: no-repeat;background-size: cover;">
	<div class="title">
		<h1><b>ONLINE EXAMINATION SYSTEM</b></h1>
		<p>"Exams and grades are temporary, but education is permanent."</p>
	</div>
	<header>
	<div class=container-fluid>
		<form method="post">
		<ul>
			<li class="active"><a href="home.php ?>">Home</a></li>
			<li><a href="admin.php">Admin Login</a></li>
			<li><a href="teacher.php">Teacher Login</a></li>
			<li><a href="student.php">Student Login</a></li>
		</ul>
		</form>
	</div>
	</header>
	<div class="container" >
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border: 3px solid black;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="public/frontside/imageS/test.jpg"  style="width:100%;">
        
      </div>

      <div class="item">
        <img src="public/frontside/imageS/ontest.jpg" style="width:100%;">
       
      </div>
    
      <div class="item">
        <img src="public/frontside/imageS/onlineex.jpg" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	
	
  
 

</body>
</html>
