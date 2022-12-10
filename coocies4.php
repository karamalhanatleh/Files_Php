<?php
setcookie ("f", "", time () -3600);
# Temporary cookies automatically delted when browser session ends 
# Persistent cookies are also automatically deleted when the time expires passes
/* To delete a persistent cookie before the time assigned to the expires argument passes, 
set the value to an empty string and assign a new expiration value to a time in the past*/
?>
<html>
<head> <title>Deleting Cookie</title> </head>
<body>
<h3>Hello world</h3>
<?php
	if (isset($_COOKIE["t"])) {
			echo $_COOKIE["t"] . "<br />"; } 
	else { echo "cookie not set <br />"; }
	
	if (isset($_COOKIE ["s"])) {
		echo $_COOKIE ["s"] . "<br />"; }
	else{ echo "cookie not set <br />"; }
	
	if (isset($_COOKIE["f"])) {
		echo $_COOKIE["f"] . "<br />"; }
	else{echo "cookie not set"; }

?>

</body>
</html>
