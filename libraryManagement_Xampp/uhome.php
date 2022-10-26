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
                <h3 class="heading-3">Welcome <?= $_SESSION["NAME"] ?></h3>
            </center>
            <p class="m-5 fs-5">A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates. This system completely automates all your library's activities.</p>
            <p class="m-5 fs-5">Library management is important because, Libraries are the storehouses of knowledge and information. Libraries perform various tasks like collecting books, arranging them systematically, conservation and preservation of those books, dissemination of information sources, etc.</p>

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