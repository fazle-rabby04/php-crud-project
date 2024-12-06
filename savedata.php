<?php

$student_name = $_POST['sname'];
$student_address = $_POST['saddress'];
$student_class = $_POST['class'];
$student_phone = $_POST['sphone'];

$connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
$sql = "INSERT INTO student(student_name, student_address, student_class, student_phone) VALUES ('{$student_name}', '{$student_address}', {$student_class}, '{$student_phone}');";  

$result = mysqli_query($connection, $sql) or die("Query Failed");

header("Location: http://localhost/crud/index.php");
mysqli_close($connection);
?>