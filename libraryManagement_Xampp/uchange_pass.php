<?php
session_start();
include "database.php";


if (!isset($_SESSION["ID"])) {
    header("location:ulogin.php");
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
                <h3 class="heading-3">Welcome to the Library</h3>
            </center>

            <?php
            if (isset($_POST["submit"])) {
                $sql = "select * from student where pass='{$_POST["opass"]}' and id='{$_SESSION["ID"]}'";
                $res = $db->query($sql);

                if ($res->num_rows > 0) {
                    $s = "update student set pass='{$_POST["npass"]}' where id=" . $_SESSION["ID"];
                    $db->query($s);
                    echo "<p class='alert alert-success'>Password Changed</p>";
                } else {
                    echo "<p class='alert alert-danger'>Invalid Password</p>";
                }
            }
            ?>


            <div class="form">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="mb-3 mt-3 w-75">
                        <label for="pwd">Current Password : </label>
                        <input type="password" class="form-control" placeholder="Current Password" name="opass" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label for="pwd">New Password:</label>
                        <input type="password" class="form-control" placeholder="New password" name="npass" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>

        <div class="navi">
            <?php
            include "usersidebar.php";
            ?>
        </div>


    </div>
    <?php
    include "footer.php";
    ?>


</body>

</html>