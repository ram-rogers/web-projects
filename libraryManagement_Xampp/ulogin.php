<?php
session_start();
include "database.php";
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
                <h3 class="heading-3">Welcome to the Library</h3>
            </center>

            <?php
            if (isset($_POST["submit"])) {
                $sql = "select * from student where name='{$_POST["uname"]}' and pass='{$_POST["upass"]}'";
                $res = $db->query($sql);

                if ($res->num_rows > 0) {
                    $row = $res->fetch_assoc();
                    $_SESSION["ID"] = $row["id"];
                    $_SESSION["NAME"] = $row["name"];

                    header("location:uhome.php");
                } else {
                    print("<p class='alert alert-danger m-5'>Error in Login...</p>");
                }
            }
            ?>


            <div class="form">
                <form action="ulogin.php" method="post">
                    <div class="mb-3 mt-3 w-75">
                        <label for="name">Username:</label>
                        <input type="name" class="form-control" placeholder="Enter name" name="uname" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="upass" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>

        <div class="navi">
            <?php
            include "sidebar.php";
            ?>
        </div>


    </div>
    <?php
    include "footer.php";
    ?>






</body>

</html>