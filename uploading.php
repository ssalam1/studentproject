<?php
session_start();
$uid=$_SESSION['Uid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>NIT Durgapur</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
include "resources/userheader.html";
?>
<script>
function image(){
alert("clicked")

}

</script>
<body>
<div  align="center">

<div class="container">

<div id="main" class="">
<h1>Please Upload Your Image</h1>
<form class="form"action=""<?php echo $_SERVER['PHP_SELF']; ?>"" enctype="multipart/form-data" method="post" >
<div class="well well-block col-lg-8 col-lg-offset-2">
<fieldset>
<label for="photo"><div class="h3">Upload Image</div>
<br><br>
<input type="file" class="form-control input-field " name="uploadedimage" required="Required"/>
</label><br>
<br>
<label><span>&nbsp;</span><input class="btn btn-info btn-lg btn-block" type="submit" value="Upload Image"/></label>
</fieldset>
</div>
</form>

</div>
</div>
</div>
</body>
</html>
<?php 
include "connect.php";

    function GetImageExtension($imagetype)
    {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }

     }
	 
	 if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/"."profile/".$imagename;
if(move_uploaded_file($temp_name, $target_path)) {

 	$sql="INSERT into image_upload (Uid,image) VALUES ('$uid','$target_path')";
	mysql_query($sql);
	$sql2="UPDATE studentinfo set image_valid='1' where Uid='$uid'";
	mysql_query($sql2);
	echo "Sucesfully Uploaded";
	header("location: user.php");
	
}else{

  header("location: uploading.php");
  echo "Upload Failed";
  
} 

}

include "resources/footer.html";

?>