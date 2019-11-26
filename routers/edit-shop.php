<?php
include '../includes/connect.php';
$name = $_POST['name'];

$sql = "UPDATE users SET name='$name';";
$con->query($sql);

header("location: ../admin-page.php");
?>