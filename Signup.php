<?php  
include_once 'header.php';
?>
     


<div class="container container_Main1">
  <h2>Registration form</h2>
  <form class="form-horizontal" action="Signup_insert.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name</label>
      <div class="col-sm-8 col-md-8">
        <input type="text" class="form-control" id="User_Name" name="User_Name" placeholder="Enter  Name" required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Age</label>
      <div class="col-sm-8 col-md-8">
        <input type="number" class="form-control" id="Age" name="Age" placeholder="Enter  Age" required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="email">Address</label>
      <div class="col-sm-8 col-md-8">
        <input type="textarea" class="form-control" id="Address" name="Address" placeholder="Enter  Address" required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div> 
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email Address</label>
      <div class="col-sm-8 col-md-8">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter  Email " required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">User Name</label>
      <div class="col-sm-8 col-md-8">
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter  User Name " required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Password</label>
      <div class="col-sm-8 col-md-8">
        <input type="text" class="form-control" id="pwd" name="pwd" placeholder="Enter  Password" required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Confirm Password </label>
      <div class="col-sm-8 col-md-8">
        <input type="text" class="form-control" id="cpwd" name="cpwd" placeholder="Enter  Confirm Password " required>
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>

  <button type="submit" class="btn btn-default" style="display:none;" id='Submit_btn'>Submit</button>
</form>

  <button class="btn btn-success signup" style="" onclick='verify();'>Submit</button>
  <button class="btn btn-default reset" style="" type="reset" onclick="">Cancel</button>
</div>	
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h8 class="modal-title">Message</h8>
        </div>
        <div class="modal-body">
          <p>Password and confirm password shoud be same </p>
		  <input type="hidden" id="hdnID" />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="madelopen" style="display:none">Open Modal</button>
    
        <script>
        function verify()
            {
              var password =   document.getElementById('pwd').value;
              var cpassword =   document.getElementById('cpwd').value;
                if(password == cpassword)
                {
                document.getElementById('Submit_btn').click();
                }
                else
                {
					$('#madelopen').click();
                    document.getElementById('pwd').value ="";
                     document.getElementById('cpwd').value= "";
                }
            }
            function cancel()
            {
              window.location="index.php";
            }
        </script>
    </body>
</html>