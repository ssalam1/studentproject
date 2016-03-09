<?php
ob_start();
// 
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

     $db=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  
   echo 'connected';
   
    $email = $_POST['email'];
	$pass = $_POST['pass']; 
	
	//$email = stripslashes($email);
	//$pass = stripslashes($pass);
	$email = mysql_real_escape_string($email);
	$pass = mysql_real_escape_string($pass);
      
      echo $email;
      echo $pass;
      $sql="SELECT * from studentinfo where email='$email' and password='$pass' and valid=1";
      $result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  
		  $name=$row['Name'];
		  $dob=$row['DOB'];
		  $age=$row['Age'];
		  $gender=$row['Gender'];
		  $prog=$row['Program'];
		  $regtno=$row['Registration_no'];
		  $roll=$row['Roll_no'];
		  $sem=$row['Sem'];
		  $email=$row['Email'];
		  $mobile=$row['Mobile_no'];
		  $uid=$row['Uid'];
		  $pass=$row['Password'];
		  
	  }
     // $active=$row['active'];
      $count=mysqli_num_rows($result);
      
		
      if($count==1)
      {
		  session_start();
		   $_SESSION['email'] = "$email";
		   $_SESSION['pass'] = "$pass";
		   $_SESSION['Name'] ="$name";
		   $_SESSION['roll_no']="$roll";
		   $_SESSION['reg_no']="$regn";
		   $_SESSION['dob']="$dob";
		   $_SESSION['semester']="$sem";
         
         header("location: welcomeuser.php");
      }
      else 
      {
         
		  header("location: home.html");
		  echo'<h1>INCORRECT USERNAME OR PASSWORD</h>';
      }
   ob_end_flush();
?>