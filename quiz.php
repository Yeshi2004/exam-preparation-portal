<?php
$conn = new mysqli("localhost", "root", "", "exam_prep");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
    <style>
        body{
            font-family: Arial;
            margin: 40px;
            background:#f4f4f4;
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
        }
    </style>
</head>
<body>

<h1>Quiz Test</h1>

<form action="result.php" method="post">

<?php
$number = 1;

while($row = $result->fetch_assoc()){
?>

<div class="question-box">

<p><b><?php echo $number . ". " . $row['question']; ?></b></p>

<input type="radio" name="q<?php echo $row['id']; ?>" value="A"> 
<?php echo $row['option1']; ?><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="B"> 
<?php echo $row['option2']; ?><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="C"> 
<?php echo $row['option3']; ?><br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="D"> 
<?php echo $row['option4']; ?><br>

</div>

<?php
$number++;
}
?>

<button type="submit">Submit Quiz</button>

</form>

</body>
</html>