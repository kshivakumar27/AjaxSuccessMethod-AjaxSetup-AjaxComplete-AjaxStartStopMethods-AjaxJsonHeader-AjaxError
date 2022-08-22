<!doctype html>
<html lang = "en">
<head>
<meta charset = "utf-8">
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
</script>

</head>
<body>

<button id = "Btn" > Send the ajax request with headers option <button/>
<br>
<p id = "p1" style = "color : red"> </p>
<script type = "text/javascript">
$(document).ready( function () {
$('#Btn').click( function(){
// url from where we want to get the data
var ajxReq = $.ajax( { url : 'http://time.jsontest.com',
contentType : 'application/json',
dataType : 'json',
headers: {"Accept": "application/json"}
});
ajxReq.success( function ( data, status, jqXhr ) {
$( '#p1' ).append( '<h3> The json data details is : </h3>');
$( '#p1' ).append( '<p> Date : ' + data.date + '</p>');
$( '#p1' ).append( '<p> Milliseconds_since_epoch : ' + data.milliseconds_since_epoch + '</p>');
$( '#p1' ).append ('<p> Time: ' + data.time + '</p>');
$( '#p1' ).append( '<p> The request status is : ' + status + '</p>');
});
ajxReq.error( function ( jqXhr, textStatus, errorMessage ) {
$( "p" ).append( "The status is : " + textStatus);
});
});
});
</script>
</body>
</html>