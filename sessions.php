<?php
session_start();

if(isset($_POST["s"])){
	$_SESSION["username"] = $_POST["u"];
	$_SESSION["pass"] = $_POST["p"];
	
echo "username is $_SESSION[username] add password is $_SESSION[pass]";
	
}


?>

<html><head> </head>
<body> <form method="post" action="sessions.php">
<input type="text" name="u" />
<input type="password" name="p" />
<input type="submit" name="s" />
</form>
</body>
</html>
