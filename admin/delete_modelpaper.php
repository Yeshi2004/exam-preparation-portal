<?php
include("auth.php");
include("../db/connection.php");

if(!isset($_GET['id'])){
    die("Invalid Request");
}

$id = intval($_GET['id']);

/* Fetch file name */
$sql = "SELECT file FROM model_papers WHERE id = $id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

    $filepath = "../uploads/modelpapers/" . $row['file'];

    /* Delete file from folder */
    if(file_exists($filepath)){
        unlink($filepath);
    }

    /* Delete from database */
    mysqli_query($conn, "DELETE FROM model_papers WHERE id = $id");
}

/* Redirect back */
header("Location: ../modelpaper.php");
exit();
?>