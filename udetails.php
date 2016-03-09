<?php 
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

     $db=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$uid=$_GET['id2'];
?>
<html>
<head></head>
<body>
<?php 
$sql="Select * from studentinfo where Uid='$uid'";
$result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  
		  $uid1=$row['Uid'];
		  $name=$row['Name'];
		  $dob=$row['DOB'];
		  $age=$row['Age'];
		  $gender=$row['Gender'];
		  $program=$row['Program'];
		  $regtno=$row['Registration_no'];
		  $dept=$row['Dept'];
		  $roll=$row['Roll_no'];
		  $sem=$row['Sem'];
		  $email=$row['Email'];
		  $mobile=$row['Mobile_no'];
		  $password=$row['Password'];
		  
		  }
?>
<div class="container">
<div class="h3"><?php echo $name;?>'s Details<br />
<br /></div>
<div class="container h4" align="left">
<table class="table table-bordered table-hover"  >
  <tr>
    <th ><div align="left">Student Id:</div></th>
    <td > <?php echo $uid1;?></td>
  </tr>
  <tr>
    <th ><div align="left">Name:</div></th>
    <td> <?php echo $name;?></td>
  </tr>
  <tr>
    <th ><div align="left">Date Of Birth:</div></th>
    <td> <?php echo $dob?></td>
  </tr>
  <tr>
    <th ><div align="left">Age:</div></th>
    <td> <?php echo $age;?></td>
  </tr>
  <tr>
    <th ><div align="left">Gender:</div></th>
    <td> <?php echo $gender;?></td>
  </tr>
  <tr>
    <th ><div align="left">Programe: </div></th>
    <td><?php echo $program;?></td>
  </tr>
  <tr>
    <th ><div align="left">Registration No:</div></th>
    <td> <?php echo $regtno;?></td>
  </tr>
  <tr>
    <th><div align="left">Department :</div></th>
    <td> <?php echo $dept;?></td>
  </tr>
  <tr>
    <th ><div align="left">Roll Number:</div></th>
    <td> <?php echo $roll;?></td>
  </tr>
  <tr>
    <th ><div align="left">Semester:</div></th>
    <td> <?php echo $sem;?></td>
  </tr>
  <tr>
    <th><div align="left">Email:</div></th>
    <td> <?php echo $email;?></td>
  </tr>
  <tr>
    <th ><div align="left">Mobile Number:</div></th>
    <td> <?php echo $mobile;?></td>
  </tr>
</table>

<br />
<br />
<br />

</div>
</div>

<div >

<h1>Profile Picture</h1><br />
<?php 
include "connect.php";
$image="Select image from image_upload where Uid='$uid'";
$sql = mysql_query($image) or die(mysql_error());   
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
?>

 <table style="border-collapse: collapse; font: 12px Tahoma;" border="2" cellpadding="5" cellspacing="5">
	<tbody><tr>

	<td>
<img src="<?php echo $row["image"];?>" alt="" width="250" height="250" /></td>
</tr>
</tbody>
</table>
<br />
<p style="color:#0080FF; font-weight:bold"><?php echo  $name;?></p>
<?php
}
?>

</div>
</div>
</body>
</html>