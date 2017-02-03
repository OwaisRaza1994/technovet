<?php
	$conn = new mysqli("localhost", "root", "root", "sessional2");
    $id =intval($_GET['q']);
    $sql = "DELETE  FROM final WHERE id='$id'";
	$result = $conn->query($sql);
	$conn->close();
	header('Location: Read.php');
?>