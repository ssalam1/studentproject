<?php
ob_start();
// 
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

     $db=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  
   echo 'connected';
   
    $uid = $_POST['uid'];
	$pass = $_POST['pass'];
	$uid = mysql_real_escape_string($uid);
	$pass = mysql_real_escape_string($pass);
      
      echo $uid;
      echo $pass;
      $sql="SELECT * from admin where Uid='$uid' and Password='$pass'";
      $result=mysqli_query($db,$sql);
      while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  
		  $uid1=$row['Uid'];
		  $name=$row['Name'];
		  $email=$row['Email'];
		  $password=$row['Password'];
		  $mobile=$row['Ph_no'];
		  
		 
}
     // $active=$row['active'];
      $count=mysqli_num_rows($result);
      
		
      if($count==1)
      {
		  session_start();
		   $_SESSION['auid'] = "$uid1";
		   $_SESSION['Name'] = "$name";
		   $_SESSION['Email'] ="$email";
		   $_SESSION['Password']="$password";
		   $_SESSION['Ph']="$mobile";
		   
         header("location: admin.php");
      }
      else 
      {
         
	  header("location: adminlogin.php");
		  echo'<h1>INCORRECT USERNAME OR PASSWORD</h>';
      }
   ob_end_flush();
?>