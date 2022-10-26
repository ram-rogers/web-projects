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
            if (isset($_POST["signup"])) {

                $sql = "insert into student (name, pass, mail, dep) VALUES ('{$_POST["uname"]}','{$_POST["upass"]}','{$_POST["uemail"]}','{$_POST["dept"]}')";
                $db->query($sql);
                echo "<p class='alert alert-success m-5'>User Registration Sucess </p>";
            }

            ?>

            <div class="form">
                <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                    <div class="mb-3 mt-3 w-75">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="uname" required>
                    </div>
                    <label>Department</label>
                    <select name="dept" class="form-select" aria-label="Default select example">
                        <option selected>Select</option>
                        <option value="IT">IT</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ECE">ECE</option>
                        <option value="MECH">MECH</option>
                        <option value="FT">FT</option>
                        <option value="MCT">MCT</option>
                    </select>
                    <div class="mb-3 mt-3 w-75">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter email" name="uemail" required>
                    </div>
                    <div class="mb-3 w-75">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Enter Password" name="upass" required>
                    </div>


                    <button type="submit" name="signup" class="btn btn-primary">Sign Up </button>
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