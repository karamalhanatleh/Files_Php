<?php
$conn = mysqli_connect("Localhost" , "root" , "" , "db0201517") 
	or die ("error connection");
echo "successfuly <br>";
$q="select * from emp";
$res = mysqli_query($conn , $q);



echo "<table border='1'>";

echo "<tr>";
echo "<th>EmpNo</th><th>Name</th>";
echo "<th>Address</th><th>Salary</th><th>DeptNo</th>";
echo "</tr>";



while($row=mysqli_fetch_assoc($res)){
	
echo "<tr>";
echo "<td>".$row['empno']."</td><td>".$row['ename']."</td>";

echo "<td>".$row['address']."</td><td>".
$row['salary']."</td><td>".$row['deptno']."</td>";
echo "</tr>";
 }
 
 echo "</table>";
?>