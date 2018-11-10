  $(document).ready(function(){
$("#asubmit").click(function(){
var query = $("#aquery").val();
var answer = $("#answer").val();
var category = $("#acategory").val();

// Returns successful data submission message when the entered information is stored in database.
var dataString = 'query='+ query + '&answer='+ answer + '&category='+ category;
if(query==''||category==''||answer=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "admin_submit.php",
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
    
    
    