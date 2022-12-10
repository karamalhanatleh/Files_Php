<?php
setcookie("s", "second cookie", time()+1000);
setcookie ("f","first cookie", time()+60*60*24*30);
setcookie ("t", "third cookie"); # Cookies without an expires available for only the current browser session

# The expires argument determines how long a cookie can remain on a client system before it is deleted.
?>
<html>
<head> <title>Setting Cookie</title> </head>
 <body>
<h3>Hello world</h3>
	<?php
     echo $_COOKIE["s"]."<br>"; # Error: You cannot access cookie until you reload the Web page 
		if(isset($_COOKIE['array1'][0])) {
			echo $_COOKIE['array1'][0]." "; } 
			else { echo "cookie not set "; }

		if(isset($_COOKIE['array1'][1])) {
			echo $_COOKIE['array1'][1]; }
		 else {echo "cookie not set "; }
		 
	?>
</body>
</html>