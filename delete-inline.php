<?php 

$student_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM student  WHERE student_id = {$student_id}";

$result=mysqli_query($connection, $sql) or die("Query Failed");

header("Location: http://localhost/crud/index.php");

mysqli_close($connection);
?>