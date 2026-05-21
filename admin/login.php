<?php
session_start();

$conn = new mysqli("localhost","root","","exam_portal");

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

/* BOX */
.login-box{
    width:320px;
    margin:100px auto;
    background:white;
    padding:25px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

/* INPUT */
input{
    width:90%;
    padding:10px;
    margin:10px 0;
    border-radius:5px;
    border:1px solid #ccc;
}

/* BUTTONS */
button{
    width:100%;
    padding:10px;
    margin-top:10px;
    background:#1f2937;
    color:white;
    border:none;
    border-radius:5px;
}

button:hover{
    background:#374151;
}

/* STUDENT BUTTON */
.student-btn{
    display:block;
    margin-top:15px;
    padding:10px;
    background:#16a34a;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.student-btn:hover{
    background:#15803d;
}

/* TITLE */
.title{
    font-size:22px;
    margin-bottom:10px;
}

</style>
</head>

<body>

<div class="login-box">

<div class="title">🔐 Admin Login</div>

<?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

<form method="post">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>

<button name="login">Login as Admin</button>
</form>

<!-- STUDENT OPTION -->
<a href="../index.php" class="student-btn">Continue as Student 👨‍🎓</a>

</div>

</body>
</html>