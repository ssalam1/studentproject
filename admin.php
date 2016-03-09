<?php
session_start();
if(!isset($_SESSION['auid'])){
header("location:home.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>NIT Durgapur</title>
<body onLoad="loginfocus()">
<?php
include "resources/adminheader.html";
?>
  <div class="container">
	<div class="h2"><b>Admin Details:-</b></div>
   <div class="col-lg-8 col-lg-offset-2 h4">
   <table class="table table-bordered table-hover">
   <tr>
   <td>Name:</td>
   <td ><?php echo $_SESSION['Name'];?></td>
   </tr>
   <tr>
   <td>UserId:</td>
   <td ><?php echo $_SESSION['auid'];?></td>
   </tr>
   <tr>
   <td>Email:</td>
   <td><?php echo $_SESSION['Email'];?></td>
   </tr>
   <tr>
   <td>Phone No:</td>
   <td>9851561800</td>
   </tr>
   </table>
   </div>
   </div>
   <div class="container">
  <div class="col-lg-4 col-lg-offset-2 well">
    <div class="h4" align=center>To Confirm new registration please click the below button  </div>
    <a class="btn btn-primary btn-lg btn-block" href="student_c.php">To Accept Click Here!</a> 
  </div>
  <div class="col-lg-4 well">
    <div class="h4" align=center>To View Student Details please click the below button</div>
    <a class="btn btn-primary btn-lg btn-block" href="details.php">To View Details Click Here </a>
  </div>
</div>
    
    <a class="btn btn-primary btn-lg col-lg-4 col-lg-offset-4" href="logout.php" style="margin-top:40px">Logout</a>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><br />
    </p>
</div>

</p>
</p>
</p>
</p>
</p>
</p></p></p></p></p>
<?php include "resources/footer.html";?>
</body>
</html>
