
<?php

require "config.php";
session_start();
$Type_id = $_GET["id"];
$p_id = $_GET["pid"];
$U_id =$_SESSION['UID'];
$sql = "SELECT * FROM tbl_sch where t_id= '".$Type_id."' and p_id= '".$p_id."'";
$Message ='s';
$exec = mysqli_query($conn,$sql); 
         //$fet = mysqli_fetch_array($exec);
		 
  if(mysqli_num_rows($exec)>0)
		  {
     $message = "already booked";
 
    
 }
 else
		 {
				
					 $sql1 = "SELECT * FROM tbl_sch where t_id= '".$Type_id."' and p_id= '".$p_id."' and u_id='".$U_id."'";
					$exec1 = mysqli_query($conn,$sql1); 
							// $fet = mysqli_fetch_array($exec1);
							  if(mysqli_num_rows($exec1)>0)
							 {
						 $Message = "You Already booked";
								 }
					 else
					  {
						 $sql2 ="insert into tbl_sch (p_id,u_id,t_id) values('".$p_id."', u_id='".$U_id."','".$Type_id."');"
					  //mysqli_query($conn,$sql2);
					 // $conn->query($sql2)
					 $Message = "Success";
					  }
		   }
    
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="wrapper1" >
  <div class="container1">
<span><?php echo $Message;?></span>
  </div>
  </div>
</body>
</html>