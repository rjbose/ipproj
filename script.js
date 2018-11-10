$(document).ready(function(){
$("#submit").click(function(){
var query = $("#query").val();
var category = $("#category").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'query='+ query + '&category='+ category;
if(query==''||category=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxsubmit.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});


