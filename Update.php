<?php

	$conn = new mysqli("localhost","root", "root", "sessional2");
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $id =$_POST['id'];
    $sql = "UPDATE final SET first_name = '$fname', last_name = '$lname' WHERE id = '$id'" ;
	$result = $conn->query($sql);
	$conn->close();
	header('Location: AJAX.php');  

?>