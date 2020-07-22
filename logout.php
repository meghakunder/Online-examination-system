<?php
session_start();
     unset($_SESSION['sid']);
     unset($_SESSION['obid']); 
     unset($_SESSION['mid']);
     unset($_SESSION['aid']);  
      session_destroy();  
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logged out</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="public/frontside/css/bootstrap.css">
  <script type="text/javascript" src="public/frontside/js/jquery.js"></script>
  <script type="text/javascript" src="public/frontside/js/bootstrap.js"></script>
	
</head>
<body>
<div>
	
      echo "
      <script>
      alert('Logged out successfully');
      window.location='home.php';
      </script>
      ";
</div>
</body>
</html>