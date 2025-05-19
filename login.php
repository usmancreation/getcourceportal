<?php include 'host.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            echo "Login successful! Welcome, " . htmlspecialchars($user['username']);
        } else {
            echo "Invalid password.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: show;
        }
        header {
            background-color: rgba(13, 245, 187, 0.36);
            color: #fff;
            text-align: left;
            padding: 3px 3px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
        .footer {
            background-color: rgba(70, 108, 126, 0.58);
            color: #fff;
            text-align: center;
            padding: 3px 0;
        }
        header h4, footer p {
            margin: 5px;
        }

        .login-main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        .login-container {
            background: linear-gradient(135deg,rgb(30, 220, 253),rgb(8, 123, 255));
            background-size: cover;
            padding: 70px 30px;
            width: 400px;
            text-align: left;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgb(255, 255, 255);
            position: relative;
            animation: float 3s infinite ease-in-out;
        }
        .login-container h2 {
            margin-bottom:20px;
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: 24px;
            font-weight: extra bold;
            text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.96);
        }
        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 16px;
            border: 3px solid #ccc;
            border-radius: 8px;
        }
        .login-container button {
            width: 100%;
            padding: 15px;
            background:rgb(12, 235, 112);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .login-container button:hover {
            background:rgb(7, 23, 252);
        }
        .header img {
            width: 50px;
            height: 50px;
            vertical-align: middle;
            margin-right: 10px;
            display: inline-block;
        }
        .header h1 {
            display: inline-block;
            font-size: 1.8rem;
            margin: 0;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>
<header>
    <div class="header">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7mt6YDROE9OKzKl2TvbgzpCF84V2dfO-xeg&s" alt="Logo">
        <h1>E LEARNING PLATFORM</h1>
    </div>
    </header>

    <main class="login-main">
        <div class="login-container">
            <h2>Login</h2>
            <form action="process_login.php" method="POST">
                <form method="post" action="">
                    Username: <input type="text" name="username" required><br><br>
                    Password: <input type="password" name="password" required><br><br>
                    <button type="submit">Login</button>
                    <linebreak>             </linebreak>
                    <p>Don't have an account? <a href="register.php">Register here</a></p>
                    
                </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 E LEARNING PLATFORM. All Rights Reserved.</p>
    </footer>
</body>
</body>
</html>