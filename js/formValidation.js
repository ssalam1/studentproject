
function validateForm(){
 flag=true;
 if(login.username.value=="")
 {
 alert("Please Enter Your Username")
 flag=false;
login.username.focus()

}
else if(login.password.value=="")
{
alert("Please Enter Your Password")
flag=false;
login.password.focus()
}
return flag;
}

 
function finalCheck(){
flag=true;
if(register.name.value==""){
alert("please Enter Name")
flag=false;
register.name.focus()
}
else if(register.dob.value==""){
alert("please Enter Date Of Birth")
flag=false;
register.dob.focus()
}
else if(register.reg_no.value==""){
alert("Please Enter Registration No ")
flag = false;
register.reg_no.focus()
}
else if (register.email.value==""){
alert("Please Enter Email")
flag=false;
register.email.focus()
}
else if(register.phone.value==""){
alert("please enter Mobile No.")
flag = false; 
register.phone.focus()
}
else if(register.pwd.value==""){
alert("Please Enter Password")
flag=false
register.pwd.focus()
}
else if(register.cpwd.value==""){
alert("Please Renter Password")
flag=false
register.cpwd.focus()
}
return flag
}
function phonecheck(){
flag=true;
if(register.phone.value=="")
{
alert("Enter your phone no")
flag=false;
register.phone.focus();
}
else if(isNaN(register.phone.value))
{
alert("only number allowed")
flag=false;
register.phone.focus();
}
else if(register.phone.value.length!=10){
alert("Not A valid Mobile no.")
flag=false;
register.phone.focus();
}
else if(register.phone.value.length!=10||register.phone.value.length>10||register.phone.value.length<10)
{
alert("enter a valid number")
flag=false;
register.phone.focus();
}
return flag;
}
function hob(){
	if (document.getElementById("chk").checked)
  {
      document.getElementById("others").style.display = 'block';
  } else {
      document.getElementById("others").style.display = 'none';
  }
	
}

function ageCount() {
  var input = document.getElementById("dob").value;
  var d = new Date( input );
  var day= d.getDate();
  var month=d.getMonth();
  var year = d.getFullYear();
  var today = new Date();
  var yearNow = today.getFullYear();
  var tm=today.getMonth();
  var td=today.getDate();
  var ageyear=yearNow-year;
  var agemonth=Math.abs(tm-month);
  var ageday=Math.abs(td-day);
  var age=ageyear + " Years "+ agemonth +" Months "+ ageday +" Days ";
  
  document.getElementById("ageId").value = age;

}

function generateRoll(){
	var no=document.forms["register"]["reg_no"].value;
	if(no == "")
	{
		alert("please fill Registration no first");
		document.forms["register"]["reg_no"].focus();
		return;
	}
	var dept;
	switch(document.forms["register"]["dept"].value)
	{
		case "Biotechnology":
			dept="BT";
			break;
		case "Civil Engineering":
			dept="CE";
			break;
		case "Chemical Engineering":
			dept="CHE";
			break;
		case "Computer Science Engineering":
			dept="CSE";
			break;
		case "Electronics And Communication Engineering":
			dept="ECE";
			break;
		case "Electrical Engineering":
			dept="EE";
			break;
		case "Information Technology":
			dept="IT";
			break;
		case "Mechanical Engineering":
			dept="ME";
			break;
		case "Metallurgical And Materials Engineering":
			dept="MME";
			break;
	}
	document.forms["register"]["roll_no"].value=no.substring(2,4).concat("/").concat(dept).concat("/");
	}

function validateEmail() {
    var x = document.forms["register"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos
            <1 || dotpos
                <atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
		register.email.focus()
        return false;
    }
}


function generateUid(){
		var rand = Math.floor((Math.random() * 1000) + 1);
		var name = "student"
		var uid= name.concat(rand); 
		document.register.uid.value=uid;
		
	}

function checkpassword(){
var pass=document.getElementById("pwd").value;
var cpass=document.getElementById("cpwd").value;
if(cpass!=pass){
alert("Password Does not Match!!")
register.cpwd.focus()
}
}

function checkAvailability1() {
var reg_no=$('#reg_no').val();
$.ajax
({
type: "POST",
url: "ajax_check_regt.php",
data:"reg_no="+reg_no,
cache: false,
success: function(data)
{
	//alert(data);
if(reg_no.length!=8){
	alert("not a valid registration no")
	$("#reg_no").val('');
	}
else if(data==0){
$('#status').html('&nbsp;<img src="images/tick.gif" align="absmiddle">');
}
else if(data > 0){
	$('#status').html('<span class="error" >Registration Number already exist</span>');
	$("#reg_no").val('');

	}
	else{alert("sql error");}
} 
});
}

