<?php
    setcookie("array1[0]" , "osama");
    setcookie("array1[1]" , "Rababah");



?>
<html>
<head> <title>  setting cocckis </title> </head><body> <h3> hello world </h3> 
<?php
echo 'Cookies available to current Web page automatically assigned to $_COOKIE autoglobal array:<br/>';
// echo "$_COOKIE ['array1'][0]]";  # error you cannot access cookie until you reload the Web page
// echo "$_COOKIE ['array2']['firstName']"; # error you cannot access cookie until you reload the web page
if(isset($_COOKIE['firstname'])) {
	echo $_COOKIE ['firstname']." " ;}
	else{ echo "cookie not set "; }
if (isset($_COOKIE['lastname'])) {
	echo $_COOKIE['lastname']; }
	else{ echo "cookie not set "; }
echo "<br />";
if (isset($_COOKIE['array']))
	echo "{$_COOKIE['array']['fName']}
		{$_COOKIE['array']['lName']} ";
?>
</body> </html>