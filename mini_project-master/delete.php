<?php

include "connection.php"; // Using database connection file here

$id = $_GET['id'];


//"DELETE FROM `users` WHERE `users`.`id` = .$id";
$query="DELELTE FROM users where id=".$id;
$data=mysqli_query($connect,$query);


$del = mysqli_query($data); // delete query

if($del)
{
    echo "record deleted successfully";
    mysqli_close($connect); // Close connection
    header("location:drivers.php"); // redirects to all records page
    exit;
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>