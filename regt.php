<?php
session_start();
if(isset($_SESSION['Uid'])||isset($_SESSION['auid'])){
  header("location: home.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
    xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

            </head>
            <body onLoad="loginfocus()">
<?php
include "resources/header.html"; 
?>
                <div id="main" class="container">
                    <a name="TemplateInfo"></a>
                    <h1 align="center" class="style1">Student Registration </h1>
                    <div class="form col-lg-10">
                        <marquee>
                            <h2>Please fill All The Fields</h2>
                        </marquee>
                        <form  role ="form" name="register" method="post" action="insert.php"style="background:url(../images/1.jpg) ;" onsubmit="return finalCheck()" enctype="mutipart/form-data" >
                            <fieldset>
                                
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse1">
                                                        <b>Personal Details</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="form-group container ">
                                                        <div class="col-lg-6">
                                                            <label for="name">
                                                                <span>Name 
                                                                    <span class="from-control required">*</span>
                                                                </span>
                                                                <input type="text" class="form-control input-field" id="name" name="name" placeholder="Please Enter Your Name"  onblur="validate()"/>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="form-group col-lg-6 ">
                                                            <label for="dob">
                                                                <span>Date Of Birth 
                                                                    <span class="required">*</span>
                                                                </span>
                                                             <input type="date" class="form-control input-field" name="dob" placeholder="dd/mm/yyyy" id="dob" onblur="ageCount()"/>
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-lg-6 ">
                                                            <label for="age">
                                                                <span>Age 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="text" class="form-control input-field" name="age"  id="ageId" readonly="readonly"/>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="container form-group ">
                                                        <div class="col-lg-6">
                                                            <label for="gender">
                                                                <span>Gender 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <select class="form-control" name="gender">
                                                                    <option value="Male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </label>
                                                        
                                                    </div>
													<div class="container form-group ">
													<div class="col-lg-6">
                                                            <label for="hobby">
                                                                <span>Hobbies 
                                                                    <span class="required">*</span>
                                                                </span>
																<br>
                                                                
               													 <input type="checkbox" id="hb2" name="hobbies" value="reading" >Reading
																	<input type="checkbox" id="hb3" name="hobbies" value="football" >Football
																	<input type="checkbox" id="hb4" name="hobbies" value="coding" >Coding
																	<input type="checkbox" id="chk" name="hobbies" value="others" onClick="hob()">Others
																	<input type="text" id="others" class="form-control input-field" name="hobbies" style="display:none;" placeholder="Enter Other Hobbies">
                                                            </label>
															</div>
                                                        </div>
                                                    </div>
													
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </fieldset>
                            <fieldset>
                                
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse2">
                                                        <b>College Details</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12">
                                                            <div class="container">
                                                                <label for="prog">
                                                                    <span>Program
                                                                        <span class="required">*</span>
                                                                    </span>
                                                                    <select class="form-control" name="prog">
                                                                        <option value="B.Tech">B.Tech</option>
                                                                        <option value="M.tech">M.Tech</option>
                                                                        <option value="P.hd">P.hd</option>
                                                                    </select>
                                                                </label>
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div  class="from-group col-lg-12">
                                                        <label for="reg_no">
                                                            <span>Registration  
                                                                <span class="required" id="check_registration">*</span>
                                                            </span>
															
                                                            <input type="text" class="form-control input-field" name="reg_no" maxlength="8" id="reg_no" placeholder="Please Enter Your Registration No"  onblur="checkAvailability1()" /><span style="color:#FF0000" id="status" align="right"></span>
                                                        </label>
                                                    
                                                    <div class="form-group col-lg-6">
                                                        <label for="dept">
                                                            <span>Department 
                                                                <span class="required">*</span>
                                                            </span>
                                                            <select class="form-control" name="dept" required="select department" onblur="generateRoll()">
                                                                <option>&nbsp;</option>
                                                                <option value="Biotechnology">Biotechnology</option>
                                                                <option value="Civil Engineering">Civil Engineering</option>
                                                                <option value="Chemical Engineering">Chemical Engineering</option>
                                                                <option value="Computer Science Engineering">Computer Science Engineering</option>
                                                                <option value="Electronics And Communication Engi">Electronics And Communication Engi</option>
                                                                <option value="Electrical Engineering">Electrical Engineering</option>
                                                                <option value="Information Technology">Information Technology</option>
                                                                <option value="Mechanical Engineering">Mechanical Engineering</option>
                                                                <option value="Metallurgical And Materials Engineering">Metallurgical And Materials Engineering</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="form-group col-lg-12">
                                                    <label for="rollno">
                                                        <span>Roll No. 
                                                            <span class=" required">*</span>
                                                        </span>
                                                        <input type="text" class="form-control input-field" name="roll_no" onfocus="generateRoll()" placeholder="__/____/__"/>
                                                    </label>
                                                    <div class="form-group col-lg-6">
                                                        <label for="sem">
                                                            <span>Semester
                                                                <span class="required">*</span>
                                                            </span>
                                                            <select class="form-control"name="sem">
                                                                <option value="First Sem">First Semester</option>
                                                                <option value="Second Sem">Second Semester</option>
                                                                <option value="Third Sem">Third Semester</option>
                                                                <option value="Forth Sem">Forth Semester</option>
                                                                <option value="Fifth Sem">Fifth Semester</option>
                                                                <option value="Sixth Sem">Sixth Semester</option>
                                                                <option value="Seventh Sem">Seventh Semester</option>
                                                                <option value="Eight Sem">Eight Semester</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <fieldset>
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse3">
                                                        <b>Contact Information</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="container">
                                                        <div class="col-lg-6">
                                                            <label for="email">
                                                                <span>Email 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="email" class="form-control input-field" name="email" placeholder="Please Enter Your Email" onBlur="validateEmail()" />
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label  for="Phno">
                                                                <span>Mobile No 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="text" maxlength="10" class="form-control input-field" name="phone" placeholder="Please Enter Your mobile No" onBlur="phonecheck()"/>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse4">
                                                        <b>Login Information</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="container">
                                                        <div class="container">
                                                            <label for="userid">
                                                                <span>User Id
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="text" class="form-control input-field" name="uid"  id="uid"  readonly="readonly"/>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="form-group col-lg-6 ">
                                                            <label for="pwd">
                                                                <span>Password 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="password" class="form-control input-field" name="pwd" placeholder="Please Enter Your Password" onfocus="generateUid()" />
                                                            </label>
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <label for="cpwd">
                                                                <span>Confrim Password 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="password" class="form-control input-field" name="cpwd" id="" placeholder="Reenter Password" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                     <fieldset>
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse5">
                                                        <b>Upload Image</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="container">
                                                        <div class="container">
                                                            <label for="imageupload">
                                                                <span>Image Upload
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="file" class="input-field" id="uploadedimage" name="uploadedimage" accept="image/*" onchange="loadFile(event)" onblur="vimage" />
                                                                <img id="output" class=" img-responsive" alt="" width="240" height="160" style="margin-left:400px; margin-top: 10px" / >
                                                            </label>
                                                        </div>
                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <label>
                                    <input class="btn btn-info btn-lg" type="submit" value="Submit" align="right"/>
                                </label>
                            </div>
                        </div>
                        <br>
                             <div class="container">
<?php
include "resources/footer.html"
?> </div>
                        </body>
                    </html>
<script type="text/javascript" src="js/formvalidation.js"></script>
 <script>
                var loadFile = function(event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                };
</script>