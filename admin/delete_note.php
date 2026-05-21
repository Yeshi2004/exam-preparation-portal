<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","exam_portal");

$id = $_GET['id'];

$sql = "SELECT * FROM notes WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$file = "../uploads/notes/" . $row['file'];

if(file_exists($file)){
    unlink($file);
}

mysqli_query($conn, "DELETE FROM notes WHERE id='$id'");

header("Location: ../notes.php");
exit();
?>