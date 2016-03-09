<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
</head>
<body >
<?php
session_start();
if(isset($_SESSION['Uid']))
{
include "resources/userheader.html";
}
else if (isset($_SESSION['auid'])) {
  include "resources/adminheader.html";
}
else{
  include "resources/header.html";
}

?>
 
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide " data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <div class="carousel-inner" >
      <div class="item active">
        <img src="images/img/1.jpg"  >
      </div> 

      <div class="item">
		<a href="about.html" target="_blank">
        <img src="images/img/2.jpg"  >
		</a>
      </div>
    
      <div class="item">
        <img src="images/img/3.jpg"  >
      </div>

 <!---     <div class="item">
        <img src="images/d.jpg" width="460" height="600">
      </div>
    </div> -->


    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" ></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br><br><br><br><br><br>
</div>

<?php
if(isset($_SESSION['Uid'])||isset($_SESSION['auid'])){
  echo '<div></div>';
  }

else

{ 
  echo'<div class="container" style="margin-bottom:50px" >'; 
	echo'<div class="col-lg-4 col-lg-offset-4">';
    echo'<a href="adminlogin.php"><img src="images/admin-button.jpg" width="200" height="59" alt="Admin Login" class="float-left" /></a>';
	echo'</div>';
	echo'<div class="col-lg-4 ">';
	echo'<a href="userlogin.php"><img src="images/student.jpg" width="200" height="60" alt="student" class="float-right"  /></a>';
	echo'</div>';
    
    echo'<p>';echo'<br />';
    echo'</p>';
  echo'</div>';
echo'</div>';
}
?>
<div class="footer">
<?php
include "resources/footer.html";
?>
</div>
</body>
</html>
