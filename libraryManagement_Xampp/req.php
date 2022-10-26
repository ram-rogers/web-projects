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
                <h3 class="heading-3">Add our Requests </h3>
            </center>

            <?php
            if (isset($_POST["submit"])) {
                $sql = "insert into request(id,mes,logs) values({$_SESSION['ID']},'{$_POST["mess"]}',now())";
                $res = $db->query($sql);

                echo "<p class='alert alert-success'>Request Sent</p>";
            }
            ?>


            <div class="form">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="mb-3 w-75">
                        <label>Message</label>
                        <input type="text" class="form-control" placeholder="Enter Book Name" name="mess" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
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