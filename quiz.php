<?php
session_start();

$conn = new mysqli("localhost", "root", "", "exam_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);

if(!$result){
    die("Query Failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<style>

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

/* HEADER */
.main-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background: linear-gradient(135deg, #672f0da2);
    padding:15px 40px;
    color:white;
    position: sticky;
    top:0;
    z-index:1000;
}

.logo{
    font-size:22px;
    font-weight:bold;
}

.tagline{
    font-size:12px;
    opacity:0.8;
}

.nav-bar a{
    color:white;
    margin-left:20px;
    text-decoration:none;
    position:relative;
}

.nav-bar a::after{
    content:'';
    position:absolute;
    width:0%;
    height:2px;
    background:#facc15;
    left:0;
    bottom:-5px;
    transition:0.3s;
}

.nav-bar a:hover::after{
    width:100%;
}

.nav-bar a:hover{
    color:#facc15;
}

/* CONTENT */
.container{
    width:80%;
    margin:auto;
    margin-top:40px;
}

.question-box{
    background:white;
    padding:20px;
    margin-bottom:20px;
    border-radius:10px;
}

button{
    padding:10px 20px;
    font-size:16px;
    background:#1f2937;
    color:white;
    border:none;
    border-radius:5px;
}

button:hover{
    background:#374151;
}

.delete-btn{
    display:inline-block;
    margin-top:15px;
    padding:8px 14px;
    background:#dc2626;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.delete-btn:hover{
    background:#b91c1c;
}

</style>

</head>

<body>

<!-- HEADER -->
<header class="main-header">

    <div class="logo">
        🎓 Thamje Exam
        <div class="tagline">Study Smart • Practice More • Score Better</div>
    </div>

    <nav class="nav-bar">
        <a href="index.php">Home</a>
        <a href="notes.php">Notes</a>
        <a href="pastpaper.php">Past Papers</a>
        <a href="modelpaper.php">Model Papers</a>
        <a href="quiz.php">Quiz</a>

        <?php if(isset($_SESSION['admin'])): ?>
            <a href="admin/dashboard.php">Dashboard</a>
            <a href="admin/login.php">Logout</a>
        <?php else: ?>
            <a href="admin/logout.php">Admin Login</a>
        <?php endif; ?>
    </nav>

</header>

<!-- CONTENT -->
<!-- CONTENT -->
<div class="container">

<h2>🧠 Quiz Test</h2>

<form action="result.php" method="post">

<?php
$number = 1;

while($row = $result->fetch_assoc()){
?>

<div class="question-box">

<p><b><?php echo $number . ". " . htmlspecialchars($row['question']); ?></b></p>

<input type="radio" name="q<?php echo $row['id']; ?>" value="A">
<?php echo htmlspecialchars($row['option1']); ?><br><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="B">
<?php echo htmlspecialchars($row['option2']); ?><br><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="C">
<?php echo htmlspecialchars($row['option3']); ?><br><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="D">
<?php echo htmlspecialchars($row['option4']); ?><br><br>

<?php if(isset($_SESSION['admin'])): ?>

<a class="delete-btn"
href="admin/delete_quiz.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this question?');">
Delete Question
</a>

<?php endif; ?>

</div>

<?php
$number++;
}
?>

<button type="submit">Submit Quiz</button>

</form>

</div>

</body>
</html>