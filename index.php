<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Thamje Exam - Exam Preparation Portal</title>

    <style>

        :root{
            --primary:#4F46E5;
            --secondary:#22C55E;
            --background:#F9FAFB;
            --text:#1F2933;
            --card:#FFFFFF;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Segoe UI', sans-serif;
            margin:0;
            background-color:var(--background);
            color:var(--text);
        }

        /* HEADER */
        header{
            background: linear-gradient(135deg, #672f0da2);
            color:white;
            padding:25px 10px;
            text-align:center;
        }

        header h1{
            margin:0;
            font-size:32px;
        }

        header p{
            margin-top:5px;
            font-size:14px;
            opacity:0.9;
        }

        /* NAVBAR */
        nav{
            background:#1F2937;
            padding:12px;
            text-align:center;
            position:sticky;
            top:0;
            z-index:1000;
        }

        nav a{
            color:white;
            margin:0 15px;
            text-decoration:none;
            font-weight:500;
            transition:0.3s;
        }

        nav a:hover{
            color:var(--secondary);
        }

        /* CONTAINER */
        .container{
            max-width:1000px;
            margin:40px auto;
            background:var(--card);
            padding:30px;
            border-radius:12px;
            box-shadow:0 4px 20px rgba(0,0,0,0.08);
            animation:fadeIn 0.8s ease-in;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:var(--primary);
        }

        h3{
            margin-top:20px;
            color:#374151;
        }

        p{
            line-height:1.7;
            font-size:15px;
        }

        /* CARDS */
        .card{
            background:#F3F4F6;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 4px 15px rgba(0,0,0,0.1);
        }

        .card a{
            display:inline-block;
            margin:5px 10px 10px 0;
            padding:8px 14px;
            background:var(--primary);
            color:white;
            text-decoration:none;
            border-radius:6px;
            font-size:14px;
        }

        .card a:hover{
            background:var(--secondary);
        }

        ul li{
            margin-bottom:10px;
        }

        /* FOOTER */
        footer{
            background:#1F2937;
            color:white;
            text-align:center;
            padding:15px;
            margin-top:40px;
        }

        /* ANIMATION */
        @keyframes fadeIn{
            from{
                opacity:0;
                transform:translateY(10px);
            }
            to{
                opacity:1;
                transform:translateY(0);
            }
        }

        /* RESPONSIVE */
        @media (max-width:768px){

            .container{
                margin:20px;
                padding:20px;
            }

            nav a{
                display:block;
                margin:8px 0;
            }
        }

    </style>
</head>

<body>

<!-- HEADER -->
<header>
    <h1>🎓 Thamje Exam</h1>
    <p>Study Smart • Practice More • Score Better</p>
</header>

<!-- NAVIGATION -->
<nav>

<?php if(isset($_SESSION['admin'])): ?>

    <!-- ADMIN NAVBAR -->
    <a href="admin/dashboard.php">Dashboard</a>
    <a href="notes.php">Notes</a>
    <a href="pastpaper.php">Past Papers</a>
    <a href="modelpaper.php">Model Papers</a>
    <a href="quiz.php">Quiz</a>
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

    <div class="card">

        <h3>📚 Plan and Organize Your Study Schedule</h3>
        <p>
            Create a realistic study timetable and divide study sessions into focused blocks.
            Prioritize subjects based on exam dates and difficulty levels.
        </p>

        <h3>🧠 Active Learning Techniques</h3>
        <p>
            Use mind maps, flashcards, and practice quizzes to improve understanding and retention.
        </p>

        <h3>📝 Note-Taking and Resource Management</h3>
        <p>
            Organize your study materials by subject and topic for easy revision.
        </p>

        <h3>🎯 Understand Exam Format</h3>
        <p>
            Practice with past papers and model papers to become familiar with exam patterns.
        </p>

        <h3>💪 Motivation and Self-Care</h3>
        <p>
            Maintain a healthy study environment, proper sleep, and regular breaks to stay productive.
        </p>

    </div>

</div>

<!-- ABOUT SECTION -->
<div id="about" class="container">

    <h2>About Us</h2>

    <p>
        Thamje Exam is a student-focused exam preparation platform designed to provide
        organized learning resources, practice materials, and self-evaluation tools.
    </p>

    <h3>🎯 Our Mission</h3>

    <p>
        To help students study smarter through structured learning resources,
        regular practice, and performance improvement.
    </p>

    <h3>📌 What We Offer</h3>

    <ul>
        <li>Comprehensive Study Notes</li>
        <li>Past Year Question Papers</li>
        <li>Model Papers</li>
        <li>Interactive Quizzes</li>
    </ul>

</div>

<!-- FEATURES -->
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
        <p>Practice with sample and model exam papers.</p>
        <a href="modelpaper.php">View Model Papers</a>
    </div>

    <div class="card">
        <h3>🧠 Quiz</h3>
        <p>Test your knowledge using interactive quizzes.</p>
        <a href="quiz.php">Start Quiz</a>
    </div>

</div>

<!-- CONTACT -->
<div id="contact" class="container">

    <h2>Contact Us</h2>

    <p>If you have any questions or suggestions, feel free to contact us.</p>

    <p><strong>Email:</strong> thamjeexam@gmail.com</p>
    <p><strong>Phone:</strong> +91 9562893012</p>
    <p><strong>Location:</strong> India</p>

</div>

<!-- FOOTER -->
<footer>
    <p>© <?php echo date("Y"); ?> Thamje Exam | All Rights Reserved</p>
</footer>

</body>
</html>

