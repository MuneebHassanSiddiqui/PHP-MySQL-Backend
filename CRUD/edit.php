<?php
include "config.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $crud_name = mysqli_real_escape_string($conn, $_POST['sname']);
    $crud_address = mysqli_real_escape_string($conn, $_POST['saddress']);
    $crud_class = mysqli_real_escape_string($conn, $_POST['sclass']);
    $crud_phone = mysqli_real_escape_string($conn, $_POST['sphone']);
    $crud_id = mysqli_real_escape_string($conn, $_POST['sid']);

    $update_data = "UPDATE student SET sname = '$crud_name', saddress = '$crud_address', sclass = '$crud_class', sphone = '$crud_phone' WHERE sid = '$crud_id'";

    if (mysqli_query($conn, $update_data)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $update_data . "<br>" . mysqli_error($conn);
    }
}
?>
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include "config.php";
    $id = $_GET['id'];
    $s_ql =  "SELECT * FROM student WHERE sid = '$id' ";
    $result = mysqli_query($conn, $s_ql) or die("failed!");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
            <form class="post-form" action="edit.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']   ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname']   ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']   ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    include "config.php";
                    $s_ql1 =  "SELECT * FROM studentclass";
                    $result1 = mysqli_query($conn, $s_ql1) or die("failed!");
                    if (mysqli_num_rows($result1) > 0) {
                        echo "<select name='sclass'>";
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                            if ($row['sclass'] == $row1['cid']) {
                                $selected = "selected";
                            } else {
                                $selected = "";
                            }
                            echo "<option {$selected} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo "</select>";
                    } ?>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']   ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
    <?php }
    } ?>
</div>
</div>
</body>

</html>