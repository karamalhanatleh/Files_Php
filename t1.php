<form method="post" action ="" >
Username: <input type="text" name="user" /> <br/>
Password: <input type="text" name="pass" /> <br/>
Age: <input type="text" name="a" /> <br/>
Gender: <input type="text" name="g" /> <br/>
<input type="submit" name="i" value="Insert User" />
<input type="submit" name="s" value="List Users" />
</form>

 

<?php

$f = fopen('log.log',"a+");
$t = time();

 

if(isset($_POST["s"])){
    listAllUsers();
}elseif(isset($_POST['i'])){
    InsertUser();
}

 

function InsertUser(){
global $t, $f;

 

$conn = mysqli_connect("localhost","root","","test16112022") or die("Error connecting to the DB!!!!!");
$t = time();
fwrite($f,"$t: InsertUser function connected to DB successfully\n");

 

$q = "insert into testtable values('$_POST[user]','$_POST[pass]',$_POST[a], $_POST[g])";
$result=mysqli_query($conn, $q);

 

$t=time();
fwrite($f, "$t: user ran the following query to the DB: $q\n");

 

if(($x=mysqli_affected_rows($conn)) > 0){
    echo "$x rows were affected";
    $t = time();
    fwrite($f,"$t: $x rows were affected");
}else{echo "No rows were affected";}

 

mysqli_close($conn);
listAllUsers();
}

 

function listAllUsers(){
$conn = mysqli_connect("localhost","root","","test16112022") or die("Error connecting to the DB!!!!!");

 

$q = "select * from testtable";
$result=mysqli_query($conn, $q);

 

echo "<table border=1>";
echo "<tr><th>Username</th><th>Age</th></tr>";
while( $row = mysqli_fetch_assoc($result) ){
    echo "<tr><td>" . $row['username'] . "</td><td>" . $row['Age'] . "</td></tr>"; 
}
echo "</table>";

 

mysqli_close($conn);
}

 

fclose($f);

?>