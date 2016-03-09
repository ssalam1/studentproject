<?php
$mysql_host ='localhost';
$mysql_user = 'root';
$mysql_pass= '';
$mysql_db='studentadmin';

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

$uid=mysql_real_escape_string($_POST['id1']);
$sql="update studentinfo set valid='1' where Uid='$uid'";
mysqli_query($conn,$sql);
?>