<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<?php
include "resources/about.html";
?>
</div>

<div class="footer">
<?php
include "resources/footer.html";
?>
</div>