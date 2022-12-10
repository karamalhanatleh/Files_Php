<from method="post" action="" >
<input type="submit" name="s" value="List Users" />
</form>

<?php

if(isset($_POST["S"])){
	listAllUsers();
}

function listAllUsersgh() {
$conn=mysqli_connect("localhost" , "root" , "" , "db0201517") 
or die("Error connecting to the DB!!!");

$q = "select ename,salary from emp";
$result = mysqli_query($conn ,$q);

while ($row = mysqli_fetch_array($result)){
	echo $row[0] . "--" . $row['salary'] . "<br/>";
	
}
mysqli_close($conn);
}