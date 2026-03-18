<?php
$conn = new mysqli("localhost", "root", "", "exam_portal");

$sql = "SELECT * FROM quiz_questions";
$result = $conn->query($sql);

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

echo "<h1>Your Score: $score / $total</h1>";
?>