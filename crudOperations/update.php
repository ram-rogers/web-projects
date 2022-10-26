<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result = mysqli_query($con, $sql);

    if ($result) { 
        // echo "Updated Successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter Name" name="name" autocomplete="off" value=<?php echo $name  ;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" autocomplete="off" value=<?php echo $email  ;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile" autocomplete="off" value=<?php echo $mobile  ;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" autocomplete="off" value=<?php echo $password  ;?>>
            </div>

            <button class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>

</html>