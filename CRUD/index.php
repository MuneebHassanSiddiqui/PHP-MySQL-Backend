<?php
include 'header.php';
?>
<style>
    .table-container {
        max-height: 400px;
        overflow-y: auto;
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
        font-size: 16px;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    thead th {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        background-color: #fff;
        z-index: 1;
    }
</style>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    include "config.php";

    $s_ql =  "SELECT * FROM student s JOIN studentclass sc ON s.sclass = sc.cid";
    $result = mysqli_query($conn, $s_ql) or die("failed!");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="table-container">
            <table cellpadding="7px">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Phone</th>
                    <th>Action</th>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['sid']   ?> </td>
                            <td> <?php echo $row['sname']   ?> </td>
                            <td> <?php echo $row['saddress']   ?> </td>
                            <td> <?php echo $row['cname']   ?> </td>
                            <td> <?php echo $row['sphone']   ?> </td>
                            <td>
                                <a href='edit.php?id=<?php echo $row['sid'] ?>'><i class="ri-edit-box-fill"></i></a>
                                <a href='delete-inline.php?id=<?php echo $row['sid'] ?>'><i class="ri-delete-bin-fill"></i></a>
                            </td>
                        </tr>
                    <?php    } ?>
                    </tbody>
            </table>
        </div>
    <?php    } else {
        echo "No Record Found";
    } ?>
</div>
</div>
</body>

</html>