<?php
session_start();
if(isset($_SESSION['auid'])){
header("location: admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>NIT Durgapur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
function admin(){
flag=true;
if(adminlogin.uid.value=="")
{
alert("Please Enter Your UserId");
flag=false;
adminlogin.uid.focus()
}
else if (adminlogin.pass.value=="")
{
alert("Enter your Password");
flag==false;
adminlogin.pass.focus()
}
return flag;
}
</script>
</head>
<body onLoad="loginfocus()">
<body onLoad="loginfocus()">
<?php
include "resources/header.html";
?>
  <div class="container">
    <p align="center"><marquee><strong>
    <div class="h3">Welcome Admin Please Enter Your UserId And Password For Login</div>
    </strong></marquee></p>
	<div class="form col-lg-6 login-div">
	    <form action="loginadmin.php" method="post" name="adminlogin" onSubmit="admin()" >
		   <div class="panel panel-primary">
      <div class="panel-heading"><h3>Admin Login</h2></div>
		 
		 <div class="panel-body" ><div class="container">
		 <label for="uid"><span>User ID<span class=" required">*</span></span>
	     <input name="uid" type="text" class="form-control input-field" id="uid" placeholder="Please Enter UserId" />
	    </label></div>
		<div class="container">
        <label for="pass"><span>Password<span class=" required">*</span></span>
		<input name="pass" type="password" class="form-control input-field" id="pass" placeholder="Please Enter Password" />
        </label></div></div>
        <div class "col-lg-10" align=right style="padding-right:50px; padding-bottom:20px"><input class="btn btn-primary " type="submit" value="Submit"/></label></div>
		<div class="panel-footer" align=right>
		<label><span><a href="">Forget Password</a></span></label>
		</div>
		
		</div>
		</form>
		</div>
   <p>&nbsp;</p>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><br />
    </p>
  </div>
</div>
</p>
</p>
</p>
</p>
</p>
</p></p></p></p></p>
<?php 
include "resources/footer.html";
?>
</body>
</html>
