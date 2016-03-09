<?php
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
$username 		= $conn->real_escape_string($_POST['reg_no']);
	$sqlUser='SELECT Registration_no FROM studentinfo WHERE Registration_no = "'.$username.'"';
	$resUser=$conn->query($sqlUser);
	if($resUser === false) {
		trigger_error('Error: ' . $conn->error, E_USER_ERROR);
	} else {
		echo $rows_returned = $resUser->num_rows;
	}
?>