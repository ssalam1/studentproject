<?php
session_start();
if(isset($_SESSION['Uid'])){
header("location: user.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<script>
function loginfocus()
{
login.username.focus()
}
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
function validateForm(){
 flag=true;
 if(login.username.value=="")
 {
 alert("Please Enter Your Username")
 flag=false;
login.username.focus()

}
else if(login.password.value=="")
{
alert("Please Enter Your Password")
flag=false;
login.password.focus()
}
return flag;
}
</script>
<script>
function user(){
flag=true;
if(login1.uid.value=="")
{
alert("Please Enter Your UserId");
flag=false;
login1.uid.focus()
}
else if (login1.pass.value=="")
{
alert("Enter your Password");
flag=false;
login1.pass.focus()
}
return flag;
}
</script>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<SCRIPT type="text/javascript">
$(document).ready(function(){
	//$("#add_err").css('display', 'none', 'important');
	 $("#login").click(function(){	
		 var username=$("#uid").val();
		 var password=$("#pass").val();
		  $.ajax({
		   type: "POST",
		   url: "ulogin.php",
			data: "name="+username+"&pwd="+password,
			
		   success: function(data){
		   //alert(data);    
			if(data==1)    {
			 //$("#add_err").html("right username or password");
			 window.location="user.php";
			}
			else    {
			//$("#add_err").css('display', 'inline', 'important');
			 $("#add_err").html("Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			//$("#add_err").css('display', 'inline', 'important');
			$("#add_err").html("<img src='images/loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});

</script>
</head>
<?php 
include "resources/header.html";
?>
<body onLoad="loginfocus()">
<div class="container">
<p align="center"><marquee><strong>
    <div class="h3">Welcome! Please Enter Your UserId And Password For Login</div>
    </strong></marquee></p>
<div class="col-lg-6 login-div" >
<form  action="ulogin.php" method="post" name="login1" onSubmit="return user()" >
		    <div class="panel panel-primary">
      <div class="panel-heading"><h3>User Login</h2></div>
		 
		 <div class="panel-body" ><div class="container">
		 <label for="uid"><span>User ID<span class=" required">*</span></span>
	     <input name="uid" type="text" class="form-control input-field" id="uid" placeholder="Please Enter UserId" />
	    </label></div>
		<div class="container">
        <label for="pass"><span>Password<span class=" required">*</span></span>
		<input name="pass" type="password" class="form-control input-field" id="pass" placeholder="Please Enter Password" />
        </label></div></div>
		 <div class=" err" id="add_err"></div>
        <div class "col-lg-10" align=right style="padding-right:50px; padding-bottom:20px"><input class="btn btn-primary " type="submit" value="Submit"  id="login" name="login" value="Login" class="loginbutton"/></label></div>
		
		<div class="panel-footer" align=right>
		<label><span ><a href="regt.php">Sign Up</span></a>&nbsp;&nbsp;</label>
		<label><span ><a href="regt.php">Forget Password</span></a>&nbsp;&nbsp;</label>

		
		
		</div>

		
		</div>
		
		</form>

  </div>
  <div class="col-lg-6">
  <!-- Add something Here!!! !-->
  </div>
  </div>
 <div >
 <br>
<?php
include "resources/footer.html"
?> </div>
</body>
</html>
