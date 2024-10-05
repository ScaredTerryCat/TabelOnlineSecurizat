<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.formContainer{display:flex;justify-content:center;align-items:center;height:80vh;}
form{background-color:lightgreen;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;}
h1{margin:0;background-color:yellow;color:darkblue;padding:3px;border-radius:7px;border:3px solid skyblue;outline:3px solid lightgreen;width:fit-content;}
.titleContainer{display:flex;justify-content:center;}
body{background-color:black;margin-top:20px;}
#username{margin-bottom:20px;}
#password{margin-bottom:20px;}
#submit{font-weight:bolder;padding-top:3px;padding-left:3px;padding-right:8px;padding-left:8px;background-color:black;color:white;cursor:pointer;}
browner{color:red;}
.formContainer{padding-left:10px;padding-right:10px;}
form{outline:3px solid grey;}

</style>
</head>
<body>
<div class="titleContainer">
<h1>Prezenta La Analiza</h1>
</div>
<div class="formContainer">
<form action="" method="post">
<input type="text" name="username" id="username" placeholder="Username"></input>
<br>
<input type="password" name="password" id="password" placeholder="Parola"></input>
<br>
<input type="submit" value="Tabel" name="submit" id="submit"></input>
<?php
$realUsername="Paper";
$realPassword="Salt";
if(isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	if($username==$realUsername && $password==$realPassword){header("Location:table.html");}
	else{echo "<b><browner>Credentials are handicapataded.</browner></b>";}
}
?>
</form>
</div>
</body>
<html>