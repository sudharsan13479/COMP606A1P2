<?php
require "config.php";
session_start();

$id = $_REQUEST['id'];
$sql = "DELETE FROM `tbl_sch` WHERE id='".$id."' ";
  
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