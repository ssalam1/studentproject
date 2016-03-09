<?php
ob_start();
// 
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

     $db=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
  
   
    $uid = $_POST['name'];
	$pass = $_POST['pwd'];
	$uid = mysql_real_escape_string($uid);
	$pass = mysql_real_escape_string($pass);
      
      $sql="SELECT * from studentinfo where Uid='$uid' and Password='$pass' and valid='1'";
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
		  $image=$row['image_valid'];
		  
		  
		  
		  
		 
}
      $count=mysqli_num_rows($result);
      //echo $image;
	 if($count==1)
      {
	    echo $count;
		  session_start();
		   $_SESSION['Uid'] = "$uid1";
		   $_SESSION['Name'] = "$name";
		   $_SESSION['DOB'] = "$dob";
		   $_SESSION['Age'] = "$age";
		   $_SESSION['Gender'] = "$gender";
		   $_SESSION['Program'] = "$program";
		   $_SESSION['Reg'] = "$regtno";
		   $_SESSION['Dept'] = "$dept";
		   $_SESSION['Roll'] = "$roll";
		   $_SESSION['Sem'] = "$sem";
		   $_SESSION['Email'] = "$email";
		   $_SESSION['Mobile'] ="$mobile";
		   $_SESSION['Password']="$password";
		   $_SESSION['img']="$image";
		   
		 }
      else 
      {
         
	 
		  echo'false';
		   //header("location: home.html");
      }
   ob_end_flush();
?>