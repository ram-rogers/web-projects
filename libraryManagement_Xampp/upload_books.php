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
                <h3 class="heading-3">Upload New Books...</h3>
            </center>
            <?php
            if (isset($_POST["submit"])) {
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["efile"]["name"]);
                if (move_uploaded_file($_FILES["efile"]["tmp_name"], $target_file)) {
                    $sql = "insert into book(btitle,keywords,file) values ('{$_POST["btitle"]}','{$_POST["keys"]}','{$target_file}')";
                    $db->query($sql);
                    echo "<p class='alert alert-success m-5'>Upload Successfully.</p>";
                } else {
                    echo "<p class='alert alert-danger m-5'>Error in Upload</p>";
                }
            }
            ?>

            <div class="form">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3 mt-3 w-75">
                        <label>Book Title</label>
                        <input type="text" class="form-control" placeholder="Enter Book Title" name="btitle" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label>Keywords</label>
                        <input type="text" class="form-control" placeholder="Enter Keyword" name="keys" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label>Upload File</label><br><br>
                        <input type="file" class="form-control-file border" name="efile" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                </form>
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