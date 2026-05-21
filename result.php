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

$score = 0;
$total = $result->num_rows;

while($row = $result->fetch_assoc()){

    $qid = "q".$row['id'];

    if(isset($_POST[$qid])){
        $answer = $_POST[$qid];

        if($answer == $row['correct_answer']){
            $score++;
        }
    }
}

$percentage = ($total > 0) ? round(($score/$total)*100) : 0;

// Feedback message
if($percentage >= 80){
    $message = "🔥 Excellent! Keep it up!";
} elseif($percentage >= 50){
    $message = "👍 Good job! You can improve more.";
} else {
    $message = "📘 Keep practicing. You’ll get better!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz Result</title>

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

/* RESULT BOX */
.container{
    width:60%;
    margin:60px auto;
}

.result-box{
    background:white;
    padding:30px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

.score{
    font-size:28px;
    margin-bottom:10px;
}

.percentage{
    font-size:22px;
    color:#16a34a;
    margin-bottom:15px;
}

.message{
    font-size:18px;
    color:#555;
    margin-bottom:20px;
}

/* BUTTON */
.btn{
    padding:10px 20px;
    background:#1f2937;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.btn:hover{
    background:#374151;
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

<!-- RESULT -->
<div class="container">

<div class="result-box">

<h2>📊 Quiz Result</h2>

<p class="score">
Your Score: <b><?php echo $score; ?> / <?php echo $total; ?></b>
</p>

<p class="percentage">
Percentage: <?php echo $percentage; ?>%
</p>

<p class="message">
<?php echo $message; ?>
</p>

<a class="btn" href="quiz.php">Try Again</a>

</div>

</div>

</body>
</html>