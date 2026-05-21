<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6

$conn = mysqli_connect("localhost","root","","exam_portal");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

<<<<<<< HEAD
$search = "";

if(isset($_GET['search'])){
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM past_papers
            WHERE title LIKE '%$search%'
            OR subject LIKE '%$search%'";
}else{
    $sql = "SELECT * FROM past_papers";
}

$result = mysqli_query($conn,$sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
=======
$sql = "SELECT * FROM past_papers";
$result = mysqli_query($conn,$sql);

>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
?>

<!DOCTYPE html>
<html>
<head>
<title>Past Question Papers</title>

<style>

body{
<<<<<<< HEAD
    margin:0;
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

<<<<<<< HEAD
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
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
.container{
    width:80%;
    margin:auto;
    margin-top:40px;
}

.quote{
    font-style: italic;
    color:#555;
    margin-bottom:25px;
}

<<<<<<< HEAD
/* CARD */
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
.paper-card{
    background:white;
    padding:15px;
    margin-bottom:15px;
<<<<<<< HEAD
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    display:flex;
    justify-content:space-between;
    align-items:center;
    transition:0.3s;
}

.paper-card:hover{
    transform:translateY(-3px);
}

/* BUTTONS */
.view-btn{
    padding:8px 15px;
    background:#16a34a;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-right:8px;
}

.view-btn:hover{
    background:#15803d;
=======
    border-radius:8px;
    box-shadow:0 2px 5px rgba(0,0,0,0.2);
    display:flex;
    justify-content:space-between;
    align-items:center;
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
}

.download-btn{
    padding:8px 15px;
    background:#2c3e50;
    color:white;
    text-decoration:none;
    border-radius:5px;
<<<<<<< HEAD
    margin-right:8px;
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
}

.download-btn:hover{
    background:#1a252f;
}

<<<<<<< HEAD
.edit-btn{
    padding:6px 12px;
    background:#f59e0b;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-right:5px;
}

.delete-btn{
    padding:6px 12px;
    background:#dc2626;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
</style>

</head>

<body>

<<<<<<< HEAD
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
=======
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
<div class="container">

<h2>📄 Past Question Papers</h2>

<p class="quote">
Practice with past exam papers to understand the exam pattern and improve your preparation.
</p>
<<<<<<< HEAD
<!-- SEARCH BAR -->
<form method="GET" style="margin-bottom:20px;">

    <input type="text"
           name="search"
           placeholder="Search by title or subject..."
           value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>"
           style="
                width:70%;
                padding:10px;
                border:1px solid #ccc;
                border-radius:5px;
           ">

    <button type="submit"
            style="
                padding:10px 20px;
                background:#1f2937;
                color:white;
                border:none;
                border-radius:5px;
            ">
        Search
    </button>

</form>
<?php
if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
=======

<?php

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
?>

<div class="paper-card">

<div>
<<<<<<< HEAD
<h3><?php echo htmlspecialchars($row['subject']); ?></h3>
<p>Year: <?php echo htmlspecialchars($row['year']); ?></p>
</div>

<div>

<a class="view-btn" href="uploads/pastpapers/<?php echo htmlspecialchars($row['file']); ?>" target="_blank">
View
</a>

<a class="download-btn" href="uploads/pastpapers/<?php echo htmlspecialchars($row['file']); ?>" download>
Download
</a>

<?php if(isset($_SESSION['admin'])): ?>

<a class="delete-btn"
href="admin/delete_pastyear.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this model paper?');">
Delete
</a>

<?php endif; ?>

=======
<h3><?php echo $row['subject']; ?></h3>
<p>Year: <?php echo $row['year']; ?></p>
</div>

<div>
<a class="download-btn" href="uploads/<?php echo $row['file']; ?>" download>
Download
</a>
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
</div>

</div>

<?php
}

}else{
<<<<<<< HEAD
    echo "<p style='text-align:center;color:gray;'>📭 No past papers available.</p>";
}
=======

echo "<p>No past papers available.</p>";

}

>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
?>

</div>

</body>
</html>