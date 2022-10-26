<?php
session_start();
include "database.php";


if (!isset($_SESSION["AID"])) {
    header("location:alogin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<?php
include "header.php";
?>

<body>
    <div class="full-bar">

        <div class="content">
            <center>
                <h1 class="heading">Library Management System</h1>
            </center>
            <center>
                <h3 class="heading-3">View Comments</h3>
            </center>

            <?php
            $sql = "select book.btitle,student.name,comment.comm,comment.logs from comment inner join book on book.bid=comment.bid inner join student on comment.sid=student.id";
            $res = $db->query($sql);
            if ($res->num_rows > 0) {
                echo "<table class='table table-bordered table-striped table-hover m-5 w-75'>
                            <tr>
                                <th>S.No</th>
                                <th>Book Name</th>
                                <th>Name</th>
                                <th>Comment</th>
                                <th>Logs</th>
                            </tr>";
                $i = 0;
                while ($row = $res->fetch_assoc()) {
                    $i++;
                    echo "<tr>";
                    echo "<td>{$i}</td>";
                    echo "<td>{$row["btitle"]}</td>";
                    echo "<td>{$row["name"]}</td>";
                    echo "<td>{$row["comm"]}</td>";
                    echo "<td>{$row["logs"]}</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "<p class='alert alert-danger m-5'>No Comments Found</p>";
            }
            ?>


        </div>

        <div class="navi">
            <?php
            include "adminsidebar.php";
            ?>
        </div>
    </div>

    <?php
    include "footer.php";
    ?>

</body>

</html>