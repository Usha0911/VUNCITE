<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Admin Credentials
    $admin_username = "admin";
    $admin_password = "admin123";

    if ($username == $admin_username && $password == $admin_password) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            width:350px;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 15px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        input{
            width:100%;
            padding:12px;
            margin:10px 0;
            border:1px solid #ccc;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:12px;
            background:#007bff;
            color:#fff;
            border:none;
            border-radius:5px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#0056b3;
        }

        .error{
            color:red;
            text-align:center;
            margin-bottom:10px;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if($error!=""){ ?>
        <div class="error"><?php echo $error; ?></div>
    <?php } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

</div>

</body>
</html>