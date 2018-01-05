<!DOCTYPE html>

<html>

<head>
<title>Callback</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script src="js/jquery-3.1.1.js"></script>

</head>

<body>

<div id="body-box">
<h1>Callback</h1>
<img src="images/city1.jpg" width="900" /> <br/><br/>
<img src="images/city2.jpg" width="900" />
</div>

<img id="cb-img" src="images/phone.jpg" width="170" height="130" />

<div id="cb-box">
<form method="POST" action="callback.php">
<input type="text" name="username" placeholder="Enter your name ... "/>
<input type="text" name="phone_number" placeholder="Enter your phone number ... "/>

<input type="submit" id="send" name="send" value="Send" />
<a id="cb-down">&darr;</a>
</form>
</div>

<script>
$(document).ready(function(){

$('#cb-img').click(function(){
$('#cb-box').show();
$('#cb-img').hide();
});

$('#cb-down').click(function(){
$('#cb-img').show();
$('#cb-box').hide();
});

});







</script>

</body>

</html>