<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>NIT Durgapur</title>
<body onLoad="loginfocus()">
<?php
include "resources/header.html";
?>
  <div id="main" class="container"> 
    <div class="container">
    <div class="well h2">
	<h2 align=center><b>Successfully Registered!!!!</b></h2>
	<h3 align=center>Please Wait for Administrator To Confrim Your Registration!!!</h3> 
	<h4 align=center >Please Note Your UserId. It Is Required Durring Login.</h4>
	<h4 align=center>Your UserId Is: <strong style="color:#FF0000"><?php echo $_SESSION['uid'];?><strong></h4>
	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
	<p>&nbsp;</p>
	<br><br><br>
  </div>
</div>

<?php include "resources/footer.html";?>
</body>
</html>
