<?php

$conn = mysqli_connect("localhost", "Nidza", "Nidza1986$", "EngineUsers");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>