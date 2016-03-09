<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<link type="text/css" rel="stylesheet" href="css/cvstyle.css">
<?php 
session_start();
if(!isset($_SESSION['Uid'])){
	header("location:home.php");
}
$img= $_SESSION['img'];
$uid= $_SESSION['Uid'];
include "connect.php";
$image="Select image from image_upload where Uid='$uid'";
$sql = mysql_query($image) or die(mysql_error());   
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){




include 'resources/userheader.html';
?>
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<img src="<?php echo $row["image"];?>" class="img-thumbnail img-responsive" alt="" width="320" height="240">
		</div>
<?php }?>		
		<div id="name">
			<h1 class="quickFade delayTwo"><?php echo $_SESSION['Name'];?></h1>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>E-mail: <a href="mailto:<?php echo $_SESSION['Email'];?> "target="_blank"><?php echo $_SESSION['Email'];?></a></li>
				<li>Contact Number: <?php echo $_SESSION['Mobile'];?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle h4">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent h4" >
				<table class="table " align=center>
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
    <td>Hobbies:</td>
    <td> <?php echo $_SESSION['Gender'];?></td>
  </tr>
  </table>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle h4">
				<h1>College Details</h1>
			</div>
			
			<div class="sectionContent h4">
				<article>
				<table class="table">
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
  </table>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle h4">
				<h1>Contact Details</h1>
			</div>
			
			<div class="sectionContent h4">
				<table class="table">
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
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle h4">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent h4">
				<article>
					<h3>College/University</h3>
					<p>Pursuing <?php echo $_SESSION['Program'];?> from National Institute of Technology Durgapur</p>
				</article>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
</div>
<?php
include 'resources/footer.html';
?>
</body>
</html>