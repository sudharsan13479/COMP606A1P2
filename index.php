
<?php

 include_once 'header.php';
?>
<div class= " jumbotron"  id="menu" style="width:89%;margin-left:11%;" align="center" set>
<h3>Muscle Relief </h3>
</div>
<style>
#menu{
   opacity: 0.2;
}


    body {
	font-size: 120%;
	background-image: url("image/home.jpg");
	background-repeat: no-repeat;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
  }
</style>
<div  class="row">
<div class="col-lg-6 col-md-6 col-xs-6">
Content
</div>
<div class="col-lg-6 col-md-6 col-xs-6">
<div class="container container_Main">
  <h2>Login form</h2>
  <form class="form-horizontal" action="login_verify.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">User name</label>
      <div class="col-sm-8 col-md-8">
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter User Name" name="email">
		
          <span id="unamespan" style="display:none;">Invalid User Name</span>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password</label>
      <div class="col-sm-8 col-md-8">          
        <input type="password" class="form-control"  placeholder="Enter password" id="psw" type="password" name="pwd">
          <span id="pwdspan" style="display:none;">Invalid Password</span>
      </div>
    </div>
    <input type="submit"  id="submitbtn" style="display:none;"> 
  </form>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button class='btn btn-success' onclick="Check_Empty();return false;"> Login</button>
		
      </div>
    </div>
</div>


</div>
</div>







        
        
        
         <script>
        function Check_Empty()
            {
                
                document.getElementById('unamespan').style.display = 'none'; 
                document.getElementById('pwdspan').style.display = 'none';
            
        
              var uname =   document.getElementById('uname').value;
              var psw =   document.getElementById('psw').value;
                if(uname == '')
                {
                
               document.getElementById('unamespan').style.display = 'inline';
                }
                if(psw == '')
                {
                 document.getElementById('pwdspan').style.display = 'inline';
                }
             if((uname != '') &&(psw != ''))
                {
                 document.getElementById('submitbtn').click();
                }
            }
        </script>
    