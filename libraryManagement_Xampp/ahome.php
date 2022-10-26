<?php
session_start();
include "database.php";

function countRecord($sql, $db)
{
    $res = $db->query($sql);
    return $res->num_rows;
}


if (!isset($_SESSION["AID"])) {
    header("location:alogin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="full-bar">

        <div class="content">
            <center>
                <h1 class="heading">Library Management System</h1>
            </center>
            <center>
                <h3 class="heading-3">Welcome Admin</h3>
            </center>
            <div class="center mt-5">
                <ul class="record">
                    <li>Total Students : <?= countRecord("select * from student", $db); ?></li>
                    <li>Total Books : <?= countRecord("select * from book", $db); ?></li>
                    <li>Total Requests : <?= countRecord("select * from request", $db); ?></li>
                    <li>Total Comments : <?= countRecord("select * from comment", $db); ?></li>
                </ul>
            </div>

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