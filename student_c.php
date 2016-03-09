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
<script>
function myFunction(objButton) {
var id1=objButton.value;
//alert(id1);
	
	
$.ajax({
type: "POST",
url: "ajax_del1.php",
data:{id1: id1},
cache: false,
success: function(html)
{
$("#ex").html(html);
window.location.reload();
//alert(id1);
} 
});

}
</script>
<script>
function confrim(objConfrim){
var id1=objConfrim.value;
//alert(id1);
$.ajax({
type: "POST",
url: "ajax_conf.php",
data:{id1: id1},
cache: false,
success: function(html)
{
$("#ex").html(html);
window.location.reload();
} 
});


}


</script>
</script>
<script type="text/javascript" src="jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="work.js"></script>

</head>
<body onLoad="loginfocus()">
<?php
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

 $conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
 
include "resources/adminheader.html";	



$sql="SELECT Name,DOB,Gender,Program,Registration_no,Dept,Roll_no,Email,Mobile_no,Uid from studentinfo where valid=0";
$result=mysqli_query($conn,$sql);
?>
<div class="container">
<br />
<div align="center">
<h1>Register Student</h1>
<div class="container">
<?php

echo'<table class="table table-bordered table-hover" id="t01">';
           echo '<TR>';
                
               
                echo'<TH > Name</TH>';
                echo'<TH>Birthday</TH>';
                echo'<TH>Program</TH>';
                echo'<TH>Registration No.</TH>';
                echo'<TH>Department</TH>';
                echo'<TH>Roll No</TH>';
                echo'<TH>Email</TH>';
                echo'<TH>Mobile No</TH>';
				echo'<th>UserId</th>';
				 echo'<th>Delete</th>';
				echo'<th>Confrim</th>';
				
          echo'</TR> ';


 while($row = mysqli_fetch_array($result)){
 		    
			echo '<tr ><td>'.$row['Name'].'</td>';
 		    echo  '<td>'.$row['DOB'].'</td>';
			echo  '<td>'.$row['Program'].'</td>';
			echo  '<td>'.$row['Registration_no'].'</td>';
			echo  '<td>'.$row['Dept'].'</td>';
			echo  '<td>'.$row['Roll_no'].'</td>';
			echo  '<td>'.$row['Email'].'</td>';
			echo  '<td>'.$row['Mobile_no'].'</td>';
			
			echo  '<td>'.$row['Uid'].'</td>';
echo '<td ><button type="button" onClick="myFunction(this)" style="background:url(images/Delete.png) no-repeat;cursor:pointer;border: none;width:32px;height:32px; class="DelButton" name="del1[]" value='.$row['Uid'].' ></button>';
echo '<td ><button  type="button" onClick="confrim(this)" style="background:url(images/Confrim.png) no-repeat;cursor:pointer;border: none;width:100px;height:32px; width:50px;height:50px;" name="confrim[]" class="ConButton"  value='.$row['Uid'].'></button>';
			echo'</tr>';
			}
 echo'</table>';
 $uid=$row
 ?>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 </div>
 </div>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 </div>
 <?php include "resources/footer.html"?> 
</body>
</html>