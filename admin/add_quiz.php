<?php
include("auth.php");
include("../db/connection.php");

$message = "";

if(isset($_POST['add'])){

    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $o1 = mysqli_real_escape_string($conn, $_POST['option1']);
    $o2 = mysqli_real_escape_string($conn, $_POST['option2']);
    $o3 = mysqli_real_escape_string($conn, $_POST['option3']);
    $o4 = mysqli_real_escape_string($conn, $_POST['option4']);
    $answer = $_POST['answer'];

    $sql = "INSERT INTO quiz_questions 
    (question, option1, option2, option3, option4, correct_answer)
    VALUES ('$question','$o1','$o2','$o3','$o4','$answer')";

    if(mysqli_query($conn,$sql)){
        $message = "✅ Question added successfully!";
    } else {
        $message = "❌ Error adding question!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Quiz Question</title>

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
    width:500px;
    margin:40px auto;
}

/* FORM */
.form-box{
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

textarea, input, select{
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
    <h2>🧠 Add Quiz Question</h2>
</div>

<div class="container">

<div class="form-box">

<?php if($message): ?>
    <p class="message"><?php echo $message; ?></p>
<?php endif; ?>

<form method="POST">

<textarea name="question" placeholder="Enter Question" required></textarea>

<input type="text" name="option1" placeholder="Option A" required>
<input type="text" name="option2" placeholder="Option B" required>
<input type="text" name="option3" placeholder="Option C" required>
<input type="text" name="option4" placeholder="Option D" required>

<select name="answer" required>
    <option value="">Select Correct Answer</option>
    <option value="A">Option A</option>
    <option value="B">Option B</option>
    <option value="C">Option C</option>
    <option value="D">Option D</option>
</select>

<button name="add">Add Question</button>

</form>

</div>

</div>

</body>
</html>