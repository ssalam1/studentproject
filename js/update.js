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




function checkpassword(){
var pass=document.getElementById("pwd").value;
var cpass=document.getElementById("cpwd").value;
if(cpass!=pass){
alert("Password Does not Match!!")
register.cpwd.focus()
}
}

