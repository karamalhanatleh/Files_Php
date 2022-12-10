

<?php

if(isset($_POST["A"]))
	echo add($_POST["n1"] , $_POST["n2"]);
elseif(isset($POST["S"]))
	echo Subtract($_POST["n1"],$_POST["n2"]);

function add($a , $b) {return $a+$b ; }

function Subtract($a , $b) {return $a-$b ; }

/*
function mul($a , $b) {return $a*$b ; }

function div($a , $b) {return $a/$b ; }
*/
echo add(2,1);

?>

<html>
<head> </head>
<body>
<hr>
<from method="post" action="html_from.php">
<input type="text" name="n1" />
<input type="text" name="n2" />
<input type="submit" name="A" value="Add" />
<input type="submit" name="S" value="Subtract" />

</from> 
</body>
</html>

