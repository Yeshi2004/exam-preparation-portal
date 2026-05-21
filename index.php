<?php
<<<<<<< HEAD
session_start();
=======
// index.php
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
    <title>Thamje Exam - Exam Preparation Portal</title>

    <style>
        :root {
            --primary: #4F46E5;
            --secondary: #22C55E;
            --background: #F9FAFB;
            --text: #1F2933;
            --card: #FFFFFF;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: var(--background);
            color: var(--text);
        }

        header {
            background: linear-gradient(135deg, #672f0da2);
            color: white;
            padding: 25px 10px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 32px;
        }

        header p {
            margin-top: 5px;
            font-size: 14px;
            opacity: 0.9;
        }

        nav {
            background: #1F2937;
            padding: 12px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: var(--secondary);
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            background: var(--card);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            animation: fadeIn 0.8s ease-in;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: var(--primary);
        }

        h3 {
            margin-top: 20px;
            color: #374151;
        }

        p {
            line-height: 1.7;
            font-size: 15px;
        }

        .card {
            background: #F3F4F6;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .card a {
            display: inline-block;
            margin: 5px 10px 10px 0;
            padding: 8px 14px;
            background: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .card a:hover {
            background: var(--secondary);
        }
        #home h3 {
            color: #1722bfaf;   /* Change to any color you want */
        }

        footer {
            background: #1F2937;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .container {
                margin: 20px;
                padding: 20px;
            }

            nav a {
                display: block;
                margin: 8px 0;
            }
=======
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
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
        }
    </style>
</head>

<body>

<header>
<<<<<<< HEAD
    <h1>Thamje Exam</h1>
=======
    <h1>Exam Preparation Portal</h1>
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
    <p>Study Smart • Practice More • Score Better</p>
</header>

<nav>
<<<<<<< HEAD

<?php if(isset($_SESSION['admin'])): ?>

    <!-- ADMIN NAVBAR -->
    <a href="admin/dashboard.php">Dashboard</a>
=======
    <a href="index.php">Home</a>
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
    <a href="notes.php">Notes</a>
    <a href="pastpaper.php">Past Papers</a>
    <a href="modelpaper.php">Model Papers</a>
    <a href="quiz.php">Quiz</a>
<<<<<<< HEAD
    <a href="admin/logout.php">Logout</a>

<?php else: ?>

    <!-- STUDENT NAVBAR -->
    <a href="#home">Home</a>
    <a href="notes.php">Notes</a>
    <a href="pastpaper.php">Past Papers</a>
    <a href="modelpaper.php">Model Papers</a>
    <a href="quiz.php">Quiz</a>
    <a href="#about">About Us</a>
    <a href="#contact">Contact Us</a>
    <a href="admin/login.php">Admin Login</a>

<?php endif; ?>

</nav>

<!-- HOME SECTION -->
<div id="home" class="container">
    <h2>Welcome to Thamje Exam</h2>
    <p>
        This Exam Preparation Portal is designed to help students prepare effectively for their exams.
        Access study notes, past papers, model papers, and quizzes — all in one place.
    </p>
    
    <p>
=======
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
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
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

<<<<<<< HEAD
<!-- ABOUT SECTION -->
<div id="about" class="container">
    <h2>About Us</h2>
    <p>
        Thamje Exam is a student-focused exam preparation platform designed to provide
        structured learning resources, practice materials, and self-evaluation tools.
    </p>
    <p>
        This Exam Preparation Portal is designed to help students prepare effectively for their exams.
Here you can access study notes, practice with past year question papers, and solve model papers
to strengthen your understanding of different subjects. After studying, you can take quizzes to
test your knowledge and evaluate how well you have learned the material.
    </p>

    <h3>Our Mission</h3>
    <p>
        To help students study smarter through organized content, regular practice,
        and performance tracking.
    </p>

    <h3>What We Offer</h3>
    <ul>
        <li>Comprehensive Notes</li>
        <li>Past Year Question Papers</li>
        <li>Model & Sample Papers</li>
        <li>Interactive Quizzes</li>
    </ul>
</div>

<!-- FEATURES SECTION -->
<div class="container">
    <h2>Our Features</h2>

    <div class="card">
        <h3>📘 Notes</h3>
        <p>Well-structured notes for quick revision and concept clarity.</p>
        <a href="notes.php">View Notes</a>
    </div>

    <div class="card">
        <h3>📄 Past Papers</h3>
        <p>Practice with previous year question papers.</p>
        <a href="pastpaper.php">View Past Papers</a>
    </div>

    <div class="card">
        <h3>📝 Model Papers</h3>
        <p>Simulated exam papers for better preparation.</p>
        <a href="modelpaper.php">View Model Papers</a>
    </div>

    <div class="card">
        <h3>🧠 Quiz</h3>
        <p>Test your knowledge with interactive quizzes.</p>
        <a href="quiz.php">Start Quiz</a>
    </div>
</div>

<!-- CONTACT SECTION -->
<div id="contact" class="container">
    <h2>Contact Us</h2>
    <p>If you have any questions or suggestions, feel free to contact us.</p>
    <p><strong>Email:</strong> thamjeExam@gmail.com</p>
    <p><strong>Phone:</strong> +91 95628 93012</p>
    <p><strong>Location:</strong> India</p>
</div>

<footer>
    <p>© <?php echo date("Y"); ?> Thamje Exam | All Rights Reserved</p>
=======
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
        <a href="pastpaper.php">Past Papers</a>
        <a href="modelpaper.php">Model Papers</a>  
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
>>>>>>> 43fe13fd0a37717b1cf585403ae00e7f899c6ef6
</footer>

</body>
</html>