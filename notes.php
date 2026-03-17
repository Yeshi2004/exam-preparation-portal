<?php

$conn = mysqli_connect("localhost","root","","exam_portal");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM notes";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>Study Notes</title>

<style>

body{
    font-family: Arial, sans-serif;
    background:#f4f4f4;
}

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

.note-card{
    background:white;
    padding:15px;
    margin-bottom:15px;
    border-radius:8px;
    box-shadow:0 2px 5px rgba(0,0,0,0.2);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

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

</style>

</head>

<body>

<div class="container">

<h2>📘 Study Notes</h2>

<p class="quote">
Well-organized study notes help students understand important concepts
and revise key topics effectively for exams.
</p>

<?php

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

?>

<div class="note-card">

<div>
<h3><?php echo $row['title']; ?></h3>
<p>Subject: <?php echo $row['subject']; ?></p>
</div>

<div>
<a class="download-btn" href="uploads/<?php echo $row['file']; ?>" download>
Download
</a>
</div>

</div>

<?php
}

}else{

echo "<p>No notes available.</p>";

}

?>

</div>

</body>
</html>

