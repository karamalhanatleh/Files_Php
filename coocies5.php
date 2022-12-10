<?php
# By default, a cookie is available to all Web pages in the same directory.
# the following statement makes the cookie (univName) available to all directories on a server 
setcookie ("univName", "The University of Jordan", time () +60*60*24*60, "/");

/* the following statement makes the cookie (deptName) available to all Web pages located in the DBcon directory or any of its subdirectories */ 

setcookie ("deptName", "Information Technology Department", time () +60*60*24*60, "/dbcon/");


?>
<html> <head> <title>Setting Cookie</title> </head>
<body>
<h3>Hello world</h3>
<?php
	if (isset($_COOKIE ["t"])) {
		echo $_COOKIE["t"] . "<br />"; } 
		else{ echo "cookie not set <br />"; }

	if (isset($_COOKIE ["s"])) {
		echo $_COOKIE ["s"] . "<br />"; }
		else { echo "cookie not set <br />"; }

if (isset($_COOKIE ["f"])) {
	echo $_COOKIE ["f"]."<br />"; }
	else { echo "cookie not set";}
echo "___________";	
	?>
</body>
</html>