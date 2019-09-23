<?php
require "config.php";
session_start();




 $bookingdate = $_REQUEST["bookingdate"];
    $bookingtime = $_REQUEST["bookingtime"];
    $typemsg = $_REQUEST["typemsg"];
	
  $User_AutoID =   $_SESSION['UID'];
  $sql=" INSERT INTO `tbl_sch`( `p_id`, `t_id`, `u_id`, `time`, `date`) VALUES ('1','".$typemsg."','".$User_AutoID."','". $bookingtime."','".$bookingdate."')";
  
  
if ($conn->query($sql)) {

      
	 
	  ?>
				 <script>
					 
					 window.location = 'Home_c.php?msg="suucess"';
				 </script>
					<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>