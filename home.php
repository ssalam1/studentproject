<!DOCTYPE html PUBLIC "-//W3C//Dtd XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/Dtd/xhtml1-strict.dtd">
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
        <img src="images/img/2.jpg" class="img-thumbnail img-responsive" >
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
<div class="container " >
<div class ="container  col-lg-4" style="margin-bottom: 20px">
<img src="images/lib.jpg" class="img-thumbnail img-responsive" >
<div class ="h2">
Library  </div>
<hr>
<div class=" well well-lg">

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Library as one of the important central facilities of the Institute supports the study, teaching, research and development programmes of the Institute. It is housed in a separate building having three floors on a plinth area of 1000sq. mtrs. The library has a collection of 1.2 lac volumes which includes Text Books, Reference Books and Bound vols. of Journals, Standards etc. The Library subscribes to about 180 current Journals. Library operations have been automated with the help of an integrated library software package, LIBSYS-4. The book database is accessible through OPAC (Online Public Access Catalogue). Circulation Services are executed through Barcode System. It has a good collection of Electronic resources in its Digital Library. It is an open access library and remains open from 8:30a.m. to 10:30 p.m. on weekdays and from 9 a.m. to 5 p.m. on Saturdays and Sundays. Library has introduced wi-fi Internet facility inside it to facilitate free-flow of information to the users.
  <br>

<a href="http://www.nitdgp.ac.in/library/" class="btn btn-info btn-lg" >More Info!</a>
</div>
</div>
<div class ="container  col-lg-4" style="margin-bottom: 20px ">
 <img src="images/place.jpg" class="img-thumbnail img-responsive" >
<div class ="h2">Placement </div>
<hr>
<div class=" well well-lg ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Placement Office facilitates in securing placements for   students passing out from the Institute. The office keeps close liaison with   various industrial establishments (both private and public sectors), which   conduct campus interviews and select graduate and post-graduate students from   all disciplines. The Placement Cell provides the infra-structural facilities to   conduct group discussions, tests and interviews. The Office interacts with over   150 industries in the country, of which nearly 50 companies visit the campus   for holding campus interviews. The industries which approach the institute can   be broadly 
                      categorized as : <br>
                    <ul> 
                      <li>Core Engineering industries   
                      </li><li>Software / IT Industries   
                      </li><li>Manufacturing Industries   
                      </li><li>Consultancy Firms   
                      </li><li>Management Organizations   
                      </li><li>R &amp; D laboratories etc </li> 
                    </ul> 
          <br>
<a href="http://www.nitdgp.ac.in/placement_activity.php" class="btn btn-info btn-lg" >More Info!</a>
</div>


</div>
<div class ="container  col-lg-4" style="margin-bottom: 20px">
<img src="images/dept.jpg" class="img-thumbnail img-responsive" >
<div class ="h2">
Department </div>
<hr>
<div class="h5 well well-lg ">
<ul >
   
    <p >&#8226; Biotechnology</p>
  
    <p >&#8226; Chemical Engineering</p>
  
    
    <p >&#8226; Chemistry</p>
  
    
    <p >&#8226; Civil Engineering</p>
  
    <p >&#8226; Computer Applications</p>
  
    <p >&#8226; computer Centre</p>

    <p >&#8226; Computer Science & Engg</a></p>

    <p >&#8226; Earth & Environmental Studies</a></p>

    <p >&#8226; Electrical Engineering</a></p>

    <p >&#8226; Electronics & Communication Engg</a></p>

    <p >&#8226; Humanities</a></p>

    <p >&#8226; Information Technology</a></p>

    <p >&#8226; Management Studies</a></p>

    <p >&#8226; Mathematics</a></p>

    <p >&#8226; Mechanical Engineering</a></p>

    <p >&#8226; Metallurgical & Materials Engg</a></p>

    <p >&#8226; Physics</a></p>
    <br>
    </ul>  
<a href="http://www.nitdgp.ac.in/department.php" class="btn btn-info btn-lg" >More Info!</a>
</div>
</div>
</div>

<?php
if(isset($_SESSION['Uid'])||isset($_SESSION['auid'])){
  echo '<div></div>';
  }

else

{ 
  echo'<div class="container" style="margin-bottom:50px " >'; 
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
