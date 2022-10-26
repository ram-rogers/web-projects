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


            <div class="form">
                <div class="mb-3 w-75">
                    <label>Enter Book Name or Keywords</label>
                    <input type="text" class="form-control" id="search">
                </div>
            </div>

            <div class="form">
                <table class="table table-bordered table-striped table-hover table-responsive text-center w-75">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Book Name</th>
                            <th>Title</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody id="output">

                    </tbody>
                </table>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keypress(function() {
                $.ajax({
                    type: 'POST',
                    url: 'livesearch.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });
    </script>

</body>

</html>