<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Register Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, rgb(121, 233, 248), rgb(49, 0, 185));
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(13, 245, 187, 0.36);
            color: #fff;
            text-align: left;
            padding: 10px 20px;
            display: flex;
            align-items: center;
        }

        header img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        header h1 {
            font-size: 1.8rem;
            margin: 0;
        }

        footer {
            background-color: rgba(70, 108, 126, 0.58);
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .container {
            background: rgba(16, 13, 212, 0.1);
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
            width: 100%;
            max-width: 400px;
            margin: 80px auto 60px auto; /* Adjusted for header and footer spacing */
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, select, button {
            margin-bottom: 15px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        input, select {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        button {
            background: #2575fc;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: rgb(145, 59, 238);
        }

        .google-signin button {
            background: rgb(3, 49, 255);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .google-signin button:hover {
            background: rgb(9, 253, 62);
        }

        .google-signin button i {
            margin-right: 10px;
        }

        p {
            text-align: center;
        }

        a {
            color: rgb(252, 15, 15);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: rgb(10, 248, 49);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
<header>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7mt6YDROE9OKzKl2TvbgzpCF84V2dfO-xeg&s" alt="Logo">
    <h1>E LEARNING PLATFORM</h1>
</header>

<div class="container">
    <h2>Register</h2>
    <form action="login.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="username" placeholder="Username" required>
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit">Register</button>
    </form>
    
    
</div>

<footer>
    <p>&copy; 2025 E LEARNING PLATFORM. All Rights Reserved.</p>
</footer>
</body>
</html>
