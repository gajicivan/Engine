<?php 
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['tekst'];


$sql = "INSERT INTO mojikorisnici (name, email, tekst) 
VALUES ('$name', '$email', '$text')";
$result = mysqli_query($conn, $sql);

	

header("Location: index.php");  //Ovako se vracam na naslovnu stranu

?>