function checkAvailability() {
var reg_no=$('#reg_no').val();
//alert(reg_no);
$.ajax
({
type: "POST",
url: "ajax_check_regt.php",
data:"reg_no="+reg_no,
cache: false,
success: function(data)
{
if(reg_no.length!=8){
	alert("not a valid registration no")
	$("#reg_no").val('');
	}
else if(data==0){
$('#status').html('&nbsp;<img src="tick.gif" align="absmiddle">');
}
else if(data > 0){
	$('#status').html('<span class="error" >Registration No already exist</span>');
	$("#reg_no").val('');

	}
	else{alert("sql error");}
} 
});
}