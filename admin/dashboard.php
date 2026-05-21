<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

/* BODY */
body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#eef2f7;
}

/* HEADER */
.header{
    background: linear-gradient(135deg, #111827, #374151);
    color:white;
    padding:30px 20px;
    text-align:center;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

.header h1{
    margin:0;
    font-size:34px;
}

.header p{
    margin-top:8px;
    font-size:15px;
    opacity:0.9;
}

/* CONTAINER */
.container{
    width:90%;
    max-width:1200px;
    margin:40px auto;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap:25px;
}

/* CARD */
.card{
    background:white;
    padding:30px 20px;
    border-radius:18px;
    text-align:center;
    box-shadow:0 6px 15px rgba(0,0,0,0.08);
    transition:0.3s ease;
    position:relative;
    overflow:hidden;
}

/* TOP BAR EFFECT */
.card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:linear-gradient(to right, #2563eb, #06b6d4);
}

/* HOVER */
.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* ICON */
.icon{
    font-size:50px;
    margin-bottom:15px;
}

/* TITLE */
.card h3{
    margin:10px 0;
    color:#1f2937;
}

/* DESCRIPTION */
.card p{
    color:#6b7280;
    font-size:14px;
    margin-bottom:20px;
}

/* BUTTON */
.card a{
    display:inline-block;
    padding:10px 18px;
    background:#1f2937;
    color:white;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
}

.card a:hover{
    background:#374151;
}

/* BOTTOM BUTTONS */
.bottom-buttons{
    text-align:center;
    margin-top:40px;
}

/* USER DASHBOARD BUTTON */
.user-btn{
    padding:12px 22px;
    background:#2563eb;
    color:white;
    text-decoration:none;
    border-radius:8px;
    margin-right:12px;
    font-size:15px;
    transition:0.3s;
}

.user-btn:hover{
    background:#1d4ed8;
}

/* LOGOUT BUTTON */
.logout-btn{
    padding:12px 22px;
    background:#dc2626;
    color:white;
    text-decoration:none;
    border-radius:8px;
    font-size:15px;
    transition:0.3s;
}

.logout-btn:hover{
    background:#b91c1c;
}

/* FOOTER */
.footer{
    text-align:center;
    margin-top:50px;
    color:#6b7280;
    font-size:14px;
    padding-bottom:20px;
}

</style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    <h1>👨‍💼 Admin Dashboard</h1>
    <p>Manage notes, papers, quizzes, and portal resources efficiently</p>
</div>

<!-- MAIN CONTENT -->
<div class="container">

<div class="grid">

    <!-- NOTES -->
    <div class="card">
        <div class="icon">📘</div>
        <h3>Upload Notes</h3>
        <p>Add and manage study notes for students.</p>
        <a href="upload_notes.php">Add</a>
    </div>

    <!-- PAST PAPERS -->
    <div class="card">
        <div class="icon">📄</div>
        <h3>Past Papers</h3>
        <p>Upload previous year question papers.</p>
        <a href="upload_pastpapers.php">Add</a>
    </div>

    <!-- MODEL PAPERS -->
    <div class="card">
        <div class="icon">📝</div>
        <h3>Model Papers</h3>
        <p>Provide model papers for exam practice.</p>
        <a href="upload_modelpapers.php">Add</a>
    </div>

    <!-- QUIZ -->
    <div class="card">
        <div class="icon">🧠</div>
        <h3>Quiz Questions</h3>
        <p>Create quizzes to test student knowledge.</p>
        <a href="add_quiz.php">Add</a>
    </div>

</div>

<!-- BOTTOM BUTTONS -->
<div class="bottom-buttons">

    <a class="user-btn" href="../index.php">
        Manage/Update
    </a>

    <a class="logout-btn" href="logout.php">
        Logout
    </a>

</div>

<!-- FOOTER -->
<div class="footer">
    © 2026 Thamje Exam Portal | Admin Panel
</div>

</div>

</body>
</html>