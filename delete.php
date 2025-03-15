<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM info WHERE id=$id";
    mysqli_query($connect, $delete);
    
    echo "<script>alert('Record Deleted');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>