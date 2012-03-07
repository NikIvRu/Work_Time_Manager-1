<?php

$e_id=$_POST["ID"];
$e_password=$_POST["Password"];
$e_fname=$_POST["First Name"];
$e_lname=$_POST["Last name"];
$e_position=$_POST["Positiion"];
$last_activity=$_POST["Last Activity"];

if($e_id!="" && $e_password!="" && $e_fname!="" && $e_lname!="" && $position!=""
	&& $last_activity!=""){
	
	$xml = SimpleXML_Load_File("employee.xml");
	
	$sxe = new SimpleXMLElement($xml->asXML());
	$employee = $sxe->addChild("EMPLOYEE");
	
	$EMPLOYEE->addChild("id",$e_id);
	$EMPLOYEE->addChild("password" , $e_password);
	
	}

?>