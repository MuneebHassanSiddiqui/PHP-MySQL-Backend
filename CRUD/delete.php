 <?php include 'header.php'; ?>
 <?php
    include "config.php";
    if (isset($_POST['deletebtn'])) {
        include "config.php";
        $st_id = $_POST['sid'];
        $deleteData = "DELETE FROM student WHERE sid = '$st_id'";
        $result = mysqli_query($conn, $deleteData) or die("QUERY FAILD");
        header('location: index.php');
    }
    ?>
 <div id="main-content">
     <h2>Delete Record</h2>
     <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
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