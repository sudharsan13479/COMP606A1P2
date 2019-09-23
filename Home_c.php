<script>
function Show_Booking()
{

document.getElementById('Booking_s').style.display="block";
document.getElementById('User_Details').style.display="none";
document.getElementById('User_Booking_Details').style.display="none";
}
function cancelbooking()
{

document.getElementById('Booking_s').style.display="none";
document.getElementById('User_Booking_Details').style.display="none";
document.getElementById('User_Details').style.display="block";
}
function Show_OldBooking()
{
document.getElementById('Booking_s').style.display="none";
document.getElementById('User_Details').style.display="none";
document.getElementById('User_Booking_Details').style.display="block";
}
function storedata()
{
var dpd= document.getElementById('sel1').value;
var bdate= document.getElementById('bdate').value;
var btime= document.getElementById('btime').value;
if((dpd!="0")||(bdate !="")||(btime != ""))
{
$('#sub_btn').click();
}


}

function Cancelbooking(id,amount,date)
{
 
var date1 = new Date(date);
var date2 = new Date();
var timeDiff = Math.abs(date2.getTime() - date1.getTime());
var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 

$('#madelopen').click();
$('#hdnID').val(id);
$('#hdnID1').val(date);
$('#amount_bok').text(diffDays+"Days -> $"+amount);
$('#amount_fine').text(diffDays*10);

}
function cancelbooking_confirm()
{
var ID = $('#hdnID').val();
 window.location = 'Booing_Cancel.php?id='+ID;

}
</script>

<?php
require "config.php";
session_start();
$sql = "SELECT * FROM parlour ";
$exec = mysqli_query($conn,$sql); 
$fet = mysqli_fetch_array($exec); 

$sql1 = "SELECT * FROM type_massage ";

$exec1 = mysqli_query($conn,$sql1); 

  $User_AutoID =   $_SESSION['UID'];
  
 $sql7 = " select a.id,a.t_id,a.u_id,a.time,a.date,b.id,b.Name,b.amnt from tbl_sch a left outer join type_massage b on a.t_id = b.id
 where a.u_id='".$User_AutoID."' group by a.id,a.t_id,a.u_id,a.time,a.date,b.id,b.Name,b.amnt";

$sql5 = "SELECT * FROM user where User_AutoID= '".$User_AutoID."' ";

$exec5 = mysqli_query($conn,$sql5); 
 $fetchUserDetails = mysqli_fetch_array($exec5);

 
 $exec7 = mysqli_query($conn,$sql7); 
 // $_SESSION['uname'];
 include_once 'header.php';
 
 if(isset($_REQUEST["msg"]))
 {
 ?>
 <script>
 </script>
 <?php
 }
?>
<div class="container container_Main" id="User_Details">
<h3>Welcome Mrs/Ms <?php echo $fetchUserDetails['User_Name'];?> </h3>

<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Age:</div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchUserDetails['Age'];?></div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Address:</div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchUserDetails['Address'];?></div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Email ID </div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchUserDetails['email'];?></div>
</div>

  <div class="container-fluid" style="margin-top:15%;">
<button class="btn btn-block btn-success" onclick="Show_Booking();">Booking now</button>
<button class="btn btn-block btn-success" onclick="Show_OldBooking();">My Booking List</button>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="madelopen" style="display:none">Open Modal</button>
</div>
</div>

<div class="container container_Main" id="User_Booking_Details" style="display:none;">
<h3>Welcome Mrs/Ms <?php echo $fetchUserDetails['User_Name'];?> </h3>
<?php
while( 
 $fetchBookingDetails = mysqli_fetch_array($exec7))
{
?>

<div class="row">

<div class="col-md-6">
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Type:</div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchBookingDetails['Name'];?></div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Amount:</div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchBookingDetails['amnt'];?></div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">Date </div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchBookingDetails['date'];?></div>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xs-6">time </div>
<div class="col-lg-6 col-md-6 col-xs-6"><?php echo $fetchBookingDetails['time'];?></div>
</div>
 </div>
<div class="col-md-6"> 
<img src="image/<?php echo $fetchBookingDetails['id'];?>.jpg" height="100px" width="100px"/>
<button onclick="Cancelbooking('<?php echo $fetchBookingDetails['id'];?>','<?php echo $fetchBookingDetails['amnt'];?>','<?php echo $fetchBookingDetails['date'];?>');"class="btn btn-danger">Cancel Booking</button>

</div>
</div>
<br>
<?php
}
?>

  <div class="container-fluid" style="margin-top:5%;">
<button class="btn btn-block btn-success" onclick="Show_Booking();">Booking now</button>
</div>
</div>

<div id="Booking_s" style="display:none;"  class="container container_Main" ">


  <form class="form-horizontal" action="storedata.php" method="post">
<div class="row" style="margin:auto;">
<div class="form-group col-lg-10 " style="margin-left:20px;">
  <label for="usr">Booking Date:</label>
  <!--<input type="date" name="bookingdate" id="bdate" class="form-control" require > -->
  <input required type="date" name="bookingdate" id="bdate"  min="<?php echo date('Y-m-d'); ?>" class="form-control" required> 
</div>
</div>
<div class="row" style="margin:auto;">
<div class="form-group col-lg-10 " style="margin-left:20px;">
  <label for="usr">Booking Time:</label>
  <input  type="time" name="bookingtime" id="btime" class="form-control" require>
</div>
</div>
<div class="row" style="margin:auto;">
<div class="form-group col-lg-10 " style="margin-left:20px;">
  
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="typemsg">
  <option value="0">Select One</option>
  <?php
while( $fet1 = mysqli_fetch_array($exec1))
{   
  ?> 
  
<option value="<?php echo $fet1['id']?>" > <?php echo $fet1['Name']?>  --( $<?php echo $fet1['amnt']?>) </option>
<?php }
?>
  
  </select>

</div>
</div>

  <input type="submit" id="sub_btn"  style="display:none;"/>
</form>
<div class="row" style="margin:auto;">
<div class="form-group col-lg-10 " style="margin-left:20px;">
  <button  class="btn btn-success" onclick="storedata();" >
  submit
  </button>
  <button  class="btn btn-info" onclick="cancelbooking();" >
  cancel
  </button>
</div>
</div>
</div>
   

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message</h4>
        </div>
        <div class="modal-body">
          <p>Chargers apply from ur booing money<span id="amount_bok"></span> - $<span id="amount_fine"></span></p>
 <input type="hidden" id="hdnID" />
 <input type="hidden" id="hdnID1" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" onclick="cancelbooking_confirm();">Ok</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>