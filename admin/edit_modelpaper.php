<?php
include("auth.php");
?>
<?php
include("auth.php");
include("../db/connection.php");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM model_papers WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $title = $_POST['title'];
    $subject = $_POST['subject'];

    // Check if new file uploaded
    if(!empty($_FILES['file']['name'])){

        $file = $_FILES['file']['name'];
        $tmp = $_FILES['file']['tmp_name'];

        move_uploaded_file($tmp,"../uploads/modelpapers/".$file);

        mysqli_query($conn,"UPDATE model_papers 
            SET title='$title', subject='$subject', file='$file' 
            WHERE id=$id");

    } else {

        mysqli_query($conn,"UPDATE model_papers 
            SET title='$title', subject='$subject' 
            WHERE id=$id");
    }

    header("Location: ../modelpapers.php");
}
?>

<form method="POST" enctype="multipart/form-data">
    <h2>Edit Model Paper</h2>

    <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>
    <input type="text" name="subject" value="<?php echo $row['subject']; ?>"><br><br>

    <input type="file" name="file"><br><br>

    <button name="update">Update</button>
</form>