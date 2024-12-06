<?php include 'header.php'; ?>

<?php
if(isset($_POST['deletebtn'])){
    $student_id = $_POST['sid'];
    $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
    $sql = "DELETE FROM student  WHERE student_id = {$student_id}";
    $result=mysqli_query($connection, $sql) or die("Query Failed");
    header("Location: http://localhost/crud/index.php");
    mysqli_close($connection);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo$_SERVER['PHP_SELF'] ;?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
