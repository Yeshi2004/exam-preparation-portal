<?php
include("auth.php");
include("../db/connection.php");

$message = "";

if(isset($_POST['upload'])){

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);

    $file = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];

    $folder = "../uploads/notes/" . $file;

    // File type check (PDF only)
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if($ext != "pdf"){
        $message = "❌ Only PDF files allowed!";
    } else {

        if(move_uploaded_file($tmp, $folder)){

            $sql = "INSERT INTO notes (title, subject, file)
                    VALUES ('$title','$subject','$file')";

            if(mysqli_query($conn,$sql)){
                $message = "✅ Uploaded successfully!";
            } else {
                $message = "❌ Database error!";
            }

        } else {
            $message = "❌ Upload failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Notes</title>

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

/* HEADER */
.header{
    background: linear-gradient(135deg, #1f2937, #4b5563);
    color:white;
    padding:20px;
    text-align:center;
}

/* CONTAINER */
.container{
    width:400px;
    margin:50px auto;
}

/* FORM BOX */
.form-box{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

/* INPUT */
input{
    width:100%;
    padding:10px;
    margin:10px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

/* BUTTON */
button{
    width:100%;
    padding:10px;
    background:#1f2937;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
}

button:hover{
    background:#374151;
}

/* MESSAGE */
.message{
    text-align:center;
    margin-bottom:10px;
    font-weight:bold;
}
.admin-nav{
    background:#111827;
    padding:15px;
    text-align:center;
}

.admin-nav a{
    color:white;
    text-decoration:none;
    margin:0 15px;
    font-weight:bold;
    transition:0.3s;
}

.admin-nav a:hover{
    color:#facc15;
}

</style>

</head>

<body>
    <nav class="admin-nav">

        <a href="dashboard.php">Dashboard</a>

        <a href="upload_notes.php">Upload Notes</a>

        <a href="upload_pastpapers.php">Upload Past Papers</a>

        <a href="upload_modelpapers.php">Upload Model Papers</a>

        <a href="add_quiz.php">Add Quiz</a>

        <a href="logout.php">Logout</a>

    </nav>
<div class="header">
    <h2>📘 Upload Notes</h2>
</div>

<div class="container">

<div class="form-box">

<?php if($message): ?>
    <p class="message"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Enter Title" required>

<input type="text" name="subject" placeholder="Enter Subject" required>

<input type="file" name="file" required>

<button name="upload">Upload</button>

</form>

</div>

</div>

</body>
</html>