<?php
session_start();

$conn = mysqli_connect("localhost","root","","exam_portal");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$search = "";

if(isset($_GET['search'])){
    $search = mysqli_real_escape_string($conn, $_GET['search']);

    $sql = "SELECT * FROM model_papers
            WHERE title LIKE '%$search%'
            OR subject LIKE '%$search%'";
}else{
    $sql = "SELECT * FROM model_papers";
}

$result = mysqli_query($conn,$sql);

if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Model Papers</title>

<style>

/* BODY */
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

/* CONTAINER */
.container{
    width:80%;
    margin:auto;
    margin-top:40px;
}

/* QUOTE */
.quote{
    font-style: italic;
    color:#555;
    margin-bottom:25px;
}

/* CARD */
.paper-card{
    background:white;
    padding:15px;
    margin-bottom:15px;
    border-radius:10px;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

/* BUTTON */
.download-btn{
    padding:8px 15px;
    background:#2c3e50;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.download-btn:hover{
    background:#1a252f;
}


.delete-btn{
    padding:6px 12px;
    background:#dc2626;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin-left:5px;
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
<div class="container">

<h2>📝 Model Papers</h2>

<p class="quote">
Practice with model papers to improve your exam preparation and test your understanding before the real exam.
</p>
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
?>

<div class="paper-card">

<div>
<h3><?php echo htmlspecialchars($row['subject']); ?></h3>
<p>Paper: <?php echo htmlspecialchars($row['title']); ?></p>
</div>

<div>
<a class="download-btn" href="uploads/modelpapers/<?php echo htmlspecialchars($row['file']); ?>" download>
Download
</a>

<?php if(isset($_SESSION['admin'])): ?>

<a class="delete-btn"
href="admin/delete_modelpaper.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this model paper?');">
Delete
</a>

<?php endif; ?>
</div>

</div>

<?php
}

}else{
    echo "<p style='text-align:center;color:gray;'>No model papers available.</p>";
}
?>

</div>

</body>
</html>