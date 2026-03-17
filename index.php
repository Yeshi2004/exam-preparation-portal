<?php
// index.php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exam Preparation Portal</title>

    <style>
        h2{
            text-align:center;
        }
        body{
            font-family: Arial, sans-serif;
            margin:0;
            background-color:#D0E8FF;
        }

        header{
            background:#7FFFD4;
            color:white;
            padding:15px;
            text-align:center;
        }

        nav{
            background:#34495e;
            padding:10px;
            text-align:center;
        }

        nav a{
            color:white;
            margin:15px;
            text-decoration:none;
            font-size:18px;
        }

        nav a:hover{
            color:#f1c40f;
        }

        .container{
            padding:40px;
            text-align:center;
        }


        .card a{
            text-decoration:none;
            font-size:18px;
            color:#2c3e50;
            font-weight:bold;
        }


        footer{
            background:#2c3e50;
            color:white;
            text-align:center;
            padding:10px;
            position:fixed;
            bottom:0;
            width:100%;
        }

        .card{
            background:lightblue;
            width:auto;
            margin:30px auto;
            padding:30px;
            border-radius:16px;
            box-shadow:0 4px 10px rgba(0,0,0,0.2);
            text-align:center;
        }
        
        .card{
            background:white;
            padding:25px;
            margin:20px;
            display:inline-block;
            width:auto;
            border-radius:10px;
            box-shadow:0 2px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

<header>
    <h1>Exam Preparation Portal</h1>
    <p>Study Smart • Practice More • Score Better</p>
</header>

<nav>
    <a href="index.php">Home</a>
    <a href="notes.php">Notes</a>
    <a href="pastpapers.php">Past Papers</a>
    <a href="modelpapers.php">Model Papers</a>
    <a href="quiz.php">Quiz</a>
</nav>

<div class="description">
<h2>About This Website</h2>

<p>
This Exam Preparation Portal is designed to help students prepare effectively for their exams.
Here you can access study notes, practice with past year question papers, and solve model papers
to strengthen your understanding of different subjects. After studying, you can take quizzes to
test your knowledge and evaluate how well you have learned the material.
</p>
<br><br>
</div>
<div class="card">
<p>
    <h3>Effective exam preparation combines structured planning, active learning, and self-care to maximize retention and performance.</h3>
    <h3>Plan and Organize Your Study Schedule</h3>
    Start by creating a realistic study timetable that accounts for classes, work, and other commitments. Break your study sessions into focused blocks of 25–50 minutes with 5–10 minute breaks to maintain concentration and avoid burnout. Prioritize subjects based on exam dates and difficulty, and focus on one topic at a time to improve retention and clarity. 
    <br>
    <h3>Active Learning Techniques</h3>
    Engage with the material actively rather than passively reading. Use mind maps, flashcards, and teaching concepts aloud to reinforce understanding. Preview study resources before lectures and review them regularly to consolidate knowledge and identify areas needing clarification. 
    <br>
    <h3>Note-Taking and Resource Management</h3>
    Develop a personalized note-taking system. Organize notes digitally or in folders by subject or topic to make revision efficient. Well-structured notes reduce last-minute stress and serve as a reliable reference during exam preparation. 
    <h3>Understand Exam Format</h3>
    Familiarize yourself with the exam structure and question types. Knowing the format helps you strategize your answers, manage time effectively, and avoid surprises on exam day. 

    <h3>Motivation and Mindset</h3>
    Identify your “why” for studying each subject to stay motivated. Track progress and set achievable daily goals to maintain momentum. Accept that some days may be less productive and plan alternative ways to achieve small wins. 

    <h3>Self-Care and Environment</h3>
    Maintain a healthy study environment with good lighting, comfortable seating, and minimal distractions. Incorporate regular exercise, balanced nutrition, and adequate sleep to support cognitive function and reduce stress. 

    <h3>Review and Practice</h3>
    Regularly test yourself with practice questions or past papers. Spaced repetition and active recall strengthen memory and improve exam performance. Focus on areas of weakness while reinforcing strong topics. 

    <h3>Summary</h3>
    By combining structured planning, active engagement with material, effective note-taking, understanding exam formats, motivation, and self-care, university students can optimize their exam preparation, reduce stress, and achieve better academic outcomes.
    </p>
</div>

<div class="card">
    <h3>Notes and Study Material</h3>
    Comprehensive notes and summaries are essential for grasping key concepts quickly. They often include topic-wise explanations, diagrams, and revision points for faster learning.

    <h3>Past Year Question Papers (PYQs)</h3>
    Access to previous year question papers helps familiarize with exam formats, question types, and frequently tested topics.
    This approach improves time management and identifies knowledge gaps by reviewing solutions and marking schemes.

    <h3>Model and Sample Papers</h3>
    Model/sample papers simulate actual exams, offering mock tests and chapter-wise practice. They help assess preparedness and highlight weaker sections before the final exam.

    <h3>Quizzes and Mock Tests</h3>
    Interactive quizzes and mock tests provide immediate feedback and track progress, making learning engaging and adaptive.
    This method strengthens weak areas and builds confidence in tackling different types of questions.

</div>
<div class="container">

    <div class="card">
        <a href="notes.php">📘 Notes</a>
        <p>Study materials for all subjects</p>
    </div>

    <div class="card">
        <a href="pastpapers.php">📄 Past Papers</a>
        <p>Previous year question papers</p>
    </div>

    <div class="card">
        <a href="modelpapers.php">📝 Model Papers</a>
        <p>Practice exam papers</p>
    </div>

    <div class="card">
        <a href="quiz.php">🧠 Quiz</a>
        <p>Test your knowledge</p>
    </div>

</div>

<footer>
    <p>© <?php echo date("Y"); ?> Exam Preparation Portal</p>
</footer>

</body>
</html>