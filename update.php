<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
        if(isset($_POST['showbtn'])){
        $connection = mysqli_connect("localhost", "root", "", "crud") or die("Connection Failed");
        $sql = "SELECT * FROM student  WHERE student_id = {$_POST['sid']}";
        $result=mysqli_query($connection, $sql) or die("Query Failed");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
         
    ?>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['student_id'] ?>" />
            <input type="text" name="sname" value="<?php echo $row['student_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['student_address'] ?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php 
          
            $sql1 = "SELECT * FROM studentClass";
            $result1=mysqli_query($connection, $sql1) or die("Query Failed");
            if(mysqli_num_rows($result1) > 0){
                echo" <select name='sclass'>";
                while($row1 = mysqli_fetch_assoc($result1)){
                    if($row['student_class'] == $row1['class_id']){
                        $selected = "selected";  
                    }
                    else{
                        $selected = "";
                    }
                    echo "<option {$selected} value='{$row1['class_id']}'>{$row1['class_name']}</option>";
                }
                echo '</select>';
            }
        ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['student_phone'] ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php 
            }    
        }
    }
    ?>
</div>
</div>
</body>
</html>
