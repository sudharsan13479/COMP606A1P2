
<?php

require "config.php";
session_start();
$uname = $_POST["uname"];
$pwd = $_POST["pwd"];
$sql = "SELECT * FROM user where uname= '".$uname."' and pwd= '".$pwd."'";

$exec = mysqli_query($conn,$sql); 
          $fet = mysqli_fetch_array($exec);
		 
 if(mysqli_num_rows($exec)>0)
		 {
    $_SESSION['uname']= $fet['uname'];
    $_SESSION['UID']= $fet['User_AutoID'];
  header('Location: Home_c.php');
    
 }
else
		{
					 ?>
				 <script>
					 alert("wrong password or email");
					 window.location = 'index.php';
				 </script>
					<?php
		   }
    
$conn->close();
?>