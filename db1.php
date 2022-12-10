<?php
$conn = mysqli_connect("Localhost" , "root" , "" , "db0201517") 
	or die ("error connection");
echo "successfuly <br>";


//$q = "insert into emp (empno ,ename , address ,salary , deptno) values('6' , 'Karam', 'jerash' , 1800 , 20)";
//$q = "insert into dept (deptno ,dname ) values(30 ,'it')";
//$q = "insert into emp (empno ,ename , address ,salary , deptno)values('8' , 'Karam', 'NewYork' , 3200 , 30)";
//$q = "update emp  set salary=4000 where ename='Karam'";
$q = "delete from emp where address='NewYork'";

$res = mysqli_query($conn , $q);
var_dump($res);
#echo $res;
/*
$query="select * from emp";
$result=mysqli_query($conn,$query) or die("Query faild:" . mysqli_error());

$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);
echo "<br/>";
$row=mysqli_fetch_assoc($result);
print_r($row);

*/







mysqli_close($conn);



?>