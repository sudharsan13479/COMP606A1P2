

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <style>
 .container_Main
 {
 margin-left:25%;
 padding:5%;
 background-color:#f1f1f1;
 border-radius:1%;
 width:50%;
 text-align:center;
 }
 .container_Main1
 {
 margin-left:25%;
 padding:1%;
 background-color:#f1f1f1;
 border-radius:1%;
 width:50%;
 text-align:center;
 }
 
.sidenav {
  height: 100%;
  width: 150px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 50px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 12px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: lightseagreen;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Muscle Relief</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>      
        <li><a href="contact.php">About us</a></li>
        <li><a href="about.php">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php
if(isset($_SESSION['UID']))
{
?>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
		<?php }
		else
		{?>
		
        <li><a href="Signup.php"><span class="glyphicon glyphicon-log-out"></span> Sign UP</a></li>
			<?php } ?>
      </ul>
    </div>
  </div>
</nav>
  


<div class="sidenav">
  <a href="page1.php">Sports massage</a>
  <a href="page2.php">Hot stone massage</a>
  <a href="page3.php">Cuping therapy </a>
  <a href="page4.php">kinesio therapy</a>
</div>
