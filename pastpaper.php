<?php

$conn = mysqli_connect("localhost","root","","exam_portal");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM past_papers";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>Past Question Papers</title>

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

.paper-card{
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

<h2>📄 Past Question Papers</h2>

<p class="quote">
Practice with past exam papers to understand the exam pattern and improve your preparation.
</p>

<?php

if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){

?>

<div class="paper-card">

<div>
<h3><?php echo $row['subject']; ?></h3>
<p>Year: <?php echo $row['year']; ?></p>
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

echo "<p>No past papers available.</p>";

}

?>

</div>

</body>
</html>