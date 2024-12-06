<?php

$student_id = $_POST['sid'];
$student_name = $_POST['sname'];
$student_address = $_POST['saddress'];
$student_class = $_POST['sclass'];
$student_phone = $_POST['sphone'];

$connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
$sql = "UPDATE  student SET student_name = '{$student_name}', student_address = '{$student_address}', student_class = {$student_class}, student_phone = '{$student_phone}' WHERE student_id = {$student_id}";  

$result = mysqli_query($connection, $sql) or die("Query Failed");

header("Location: http://localhost/crud/index.php");
mysqli_close($connection);



?>