<?php
session_start();
include "database.php";


if (!isset($_SESSION["ID"])) {
    header("location:ulogin.php");
}
$sql = "select * from book where btitle LIKE '%{$_POST["name"]}%' or keywords LIKE '%{$_POST["name"]}%' ";
$result = mysqli_query($db, $sql);
$i=0;
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
        $i++;
		echo "<tr>";
        echo "<td>{$i}</td>";
        echo "<td>{$row["btitle"]}</td>";
        echo "<td>{$row["keywords"]}</td>";
        echo "<td><a href='{$row["file"]}' target='_blank'>View</a></td>";
        echo "</tr>";
	}
}
else{
	echo "<p class='alert alert-danger form mt-5'>No Books Records Found</p>";
}

?>
