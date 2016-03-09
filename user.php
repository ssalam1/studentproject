<?php 
session_start();
if(!isset($_SESSION['Uid'])){
	header("location:home.php");
}

$img= $_SESSION['img'];
$uid= $_SESSION['Uid'];
include "resources/userheader.html";
?>
<html>
<body>
<link rel="stylesheet" href="images/style.css" type="text/css" />
<div  class="container wrap" >

<div class="container col-lg-7 h4 " >
<div class="h1">Welcome: <?php echo $_SESSION['Name'];?></div>
<table class="table table-bordered table-hover" align=center>
  <tr>
    <td>Student Id:</td>
    <td > <?php echo $_SESSION['Uid'];?></td>
  </tr>
  <tr>
    <td >Name:</td>
    <td> <?php echo $_SESSION['Name'];?></td>
  </tr>
  <tr>
    <td >Date Of Birth:</td>
    <td> <?php echo $_SESSION['DOB'];?></td>
  </tr>
  <tr>
    <td>Age:</td>
    <td> <?php echo $_SESSION['Age'];?></td>
  </tr>
  <tr>
    <td>Gender:</td>
    <td> <?php echo $_SESSION['Gender'];?></td>
  </tr>
  <tr>
    <td>Program:</td>
    <td><?php echo $_SESSION['Program'];?></td>
  </tr>
  <tr>
    <td>Registration No:</td>
    <td> <?php echo $_SESSION['Reg'];?></td>
  </tr>
  <tr>
    <td>Department:</td>
    <td> <?php echo $_SESSION['Dept'];?></td>
  </tr>
  <tr>
    <td>Roll Number:</td>
    <td> <?php echo $_SESSION['Roll'];?></td>
  </tr>
  <tr>
    <td>Semester:</td>
    <td> <?php echo $_SESSION['Sem'];?></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td> <?php echo $_SESSION['Email'];?></td>
  </tr>
  <tr>
    <td>Mobile Number:</td>
    <td> <?php echo $_SESSION['Mobile'];?></td>
  </tr>
</table>
</div>
<div >
<div class="h1 img" align=center>Profile Picture</div>
<?php 
include "connect.php";
$image="Select image from image_upload where Uid='$uid'";
$sql = mysql_query($image) or die(mysql_error());   
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
?>

<div class="container ">
<img src="<?php echo $row["image"];?>" class="img-thumbnail img-responsive" alt="" width="320" height="240" style="margin-left:80px; margin-bottom:80px"  />
</div>
    <a class="btn btn-primary btn-lg col-lg-2 col-lg-offset-2" href="logout.php" style="margin:40px">Logout</a>
    <a class="btn btn-primary btn-lg col-lg-2 col-lg-offset-2" href="cv.php" style="margin:40px">View Your CV here!</a>
    <a class="btn btn-primary btn-lg col-lg-2 col-lg-offset-2" href="updateprofile.php" style="margin:40px">Update Profile</a>

</div>




<?php 
  $_SESSION['Name'];?>

<?php
}
?>


</div>


<?php
include "resources/footer.html";
?>

</body>
</html>
