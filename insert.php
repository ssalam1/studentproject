<?php
ob_start();
include "connect.php";

 $name=      $_POST['name'];
 $dob=       $_POST['dob'];
 $age=       $_POST['age'];
 $gender=    $_POST['gender'];
 $prog=      $_POST['prog'];
 $reg_no=    $_POST['reg_no'];
 $dept=      $_POST['dept'];
 $roll_no=   $_POST['roll_no'];
 $sem=       $_POST['sem'];
 $email=     $_POST['email'];
 $mobile_no= $_POST['phone'];
 $uid=       $_POST['uid'];
 $pass=      $_POST['pwd'];
 
 $name = mysql_real_escape_string($name);
 $dob = mysql_real_escape_string($dob);
 $age = mysql_real_escape_string($age);
 $gender = mysql_real_escape_string($gender);
 $prog = mysql_real_escape_string($prog);
 $reg_no = mysql_real_escape_string($reg_no);
 $dept = mysql_real_escape_string($dept);
 $roll_no = mysql_real_escape_string($roll_no);
 $sem = mysql_real_escape_string($sem);
 $email = mysql_real_escape_string($email);
 $mobile_no = mysql_real_escape_string($mobile_no);
 $uid = mysql_real_escape_string($uid);
 $pass = mysql_real_escape_string($pass);
 

 
// echo $name,$dob,$age,$gender,$prog,$reg_no, $dept, $roll_no, $sem, $email,$mobile_no,$uid,$pass;
 
 if(!empty($name)&&!empty($dob)&&!empty($age)&&!empty($gender)&&!empty($prog)&&!empty($reg_no)&&!empty($dept)&&!empty($roll_no)&&!empty($sem)&&!empty($email)&&!empty($mobile_no)&&!empty($uid)&&!empty($pass)){
 $sql="insert into studentinfo values('$name','$dob','$age','$gender','$prog','$reg_no','$dept','$roll_no','$sem','$email','$mobile_no','$uid','$pass',0,0)";
 $result=mysql_query($sql);
 mysql_query($sql1);
 header("location: conform.php");
 session_start();
 $_SESSION['uid'] = "$uid";
 
 }
 else
			{
				echo'you forgot to enter all the fields of the form.please enter everything and then submit';
			}

?>