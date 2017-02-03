<?php

$conn = new mysqli("localhost","root","root","sessional2");
$fname=$_POST['fname'];

$lname=$_POST['lname'];
$sql= "INSERT INTO final(first_name,last_name) VALUES('$fname','$lname')";
$conn->query($sql);
$conn->close();
?>