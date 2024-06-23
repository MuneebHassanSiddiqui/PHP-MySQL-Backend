<?php include 'header.php'; ?>
<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $crud_name = mysqli_real_escape_string($conn, $_POST['sname']);
    $crud_adress = mysqli_real_escape_string($conn, $_POST['saddress']);
    $crud_class = mysqli_real_escape_string($conn, $_POST['class']);
    $crud_phone = mysqli_real_escape_string($conn, $_POST['sphone']);

    $Insert_data =  "INSERT INTO student (sname ,saddress ,sclass,sphone) VALUES('$crud_name' , '$crud_adress' ,$crud_class,$crud_phone)";
    $result = mysqli_query($conn, $Insert_data) or die("failed!");

    header("location: index.php");
}
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="add.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                include "config.php";
                $s_ql =  "SELECT * FROM studentclass";
                $result = mysqli_query($conn, $s_ql) or die("failed!");
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <option value="<?php echo $row['cid'] ?>  "><?php echo $row['cname'] ?> </option>
                <?php } ?>
            </select>

        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save">
    </form>
</div>
</div>
</body>

</html>