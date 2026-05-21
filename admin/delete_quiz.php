<?php
include("auth.php");
include("../db/connection.php");

if(!isset($_GET['id'])){
    die("Invalid Request");
}

$id = intval($_GET['id']);

mysqli_query($conn, "DELETE FROM quiz_questions WHERE id = $id");

header("Location: ../quiz.php");
exit();
?>