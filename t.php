<?php
require_once("lib/nusoap.php");
$wsdl="http://localhost/WebServices/ex1/soap-server.php?wsdl";
$client=new nusoap_client($wsdl,'wsdl');
$result=$client->call('Add', array("n1" => 25, "n2" => 15));
var_dump($result);
$result=$client->call('Subtract', array("n1" => 25, "n2" =>
15));
var_dump($result);
?>
