<?php
session_start();
if(!isset($_SESSION['Uid'])){
  header("location: home.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
    xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

            </head>
            <body >
<?php
include "resources/userheader.html"; 
?>
                <div id="main" class="container">
                    <a name="TemplateInfo"></a>
                    <h1 align="center" class="style1">Update Profile </h1>
                    <div class="form col-lg-10">
                        <form  role ="form" name="register" method="post" action="update.php"style="background:url(../images/1.jpg) ;" onsubmit="return finalCheck()" enctype="mutipart/form-data" >
                            <fieldset>
                                
                                    <div class="panel-group">
                                        <div class="panel panel-info ">
                                            <div class="panel-heading">
                                                <div class="container panel-title">
                                                    <a data-toggle="collapse" href="#collapse1">
                                                        <b>Personal Details Update</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="form-group container ">
                                                      <div class="col-lg-6">
                                                            <label for="name">
                                                                <span></div>
                                                    </div>
                                                    <div class="container">
                                                        <div class="form-group col-lg-6 ">
                                                            <label for="dob">
                                                                <span>Date Of Birth 
                                                                    <span class="required">*</span>
                                                                </span>
                                                             <input type="date"  value="<?php echo $_SESSION['DOB']; ?>"class="form-control input-field" name="dob" placeholder="dd/mm/yyyy" id="dob" onblur="ageCount()"/>
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
                                                                
               													 <input type="checkbox" id="hb2" name="hobbies[]" value="reading" >Reading
																	<input type="checkbox" id="hb3" name="hobbies[]" value="football" >Football
																	<input type="checkbox" id="hb4" name="hobbies[]" value="coding" >Coding
																	<input type="checkbox" id="chk" name="hobbies[]"  onClick="hob()">Others
																	<input type="text" id="others" class="form-control input-field" name="hobbies[]" style="display:none;" placeholder="Enter Other Hobbies">
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
                                                        <b>Update College Details </b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                  <div class="form-group col-lg-12">
                                                            <div class="container">
                                                                <label for="prog">
                                                                    <span><div class="form-group col-lg-12">
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
                                                                <input type="email" value="<?php echo $_SESSION['Email'];?>" class="form-control input-field" name="email" placeholder="Please Enter Your Email" onBlur="validateEmail()" />
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label  for="Phno">
                                                                <span>Mobile No 
                                                                    <span class="required">*</span>
                                                                </span>
                                                                <input type="text" value="<?php echo  $_SESSION['Mobile']; ?>" maxlength="10" class="form-control input-field" name="phone" placeholder="Please Enter Your mobile No" onBlur="phonecheck()"/>
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
                                                        <b>Update Login Information</b>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="container">
                                                        <div class="container">
                                                            <label for="userid">
                                                                <span></div>
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
                                </form>
                                <label>
                                    <input class="btn btn-info btn-lg" type="submit" value="Update Profile" align="right"/>
                                </label>
                            </div>
                        </div>
                        <br>
                             <div class="container">
<?php
include "resources/footer.html"
?> </div>
<script type="text/javascript" src="js/update.js"></script>
                        </body>
                    </html>
