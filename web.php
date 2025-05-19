<?php
$courseName = "Web Development";
$courseDescription = "APNA COLLEGE";
$courseImage = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvR-_E8NnfyIBV7oZp-DjXRb7lbDzQ3u3eWw&s";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $courseName; ?></title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 0;
            color: #fff;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo $courseImage; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: fadeIn 1s, backgroundRotate 20s infinite alternate;
            min-height: 100vh;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes backgroundRotate {
            0% { transform: rotate(0deg) scale(1); }
            100% { transform: rotate(0deg) scale(1); }
        }

        header {
            background-color: rgba(13, 245, 187, 0.16);
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

        .course-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px 50px;
            text-align: center;
        }

        h5 {
            font-size: 2.5rem;
            margin-bottom: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: textGlow 2s infinite alternate;
        }

        @keyframes textGlow {
            from { text-shadow: 0 0 5px #fff, 0 0 10px #fff; }
            to { text-shadow: 0 0 10px #fff, 0 0 20px #0073e6; }
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            background-color: #0073e6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
        }

        .btn:hover {
            background-color:rgb(24, 39, 255);
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .back-btn {
            background-color:rgb(86, 16, 252);
        }

        .back-btn:hover {
            background-color:rgb(15, 141, 238);
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
        .content-box {
            background: rgba(109, 206, 198, 0.2);
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            animation: slideUp 1s ease-out;
            border: 2px solid #0073e6;
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 1; }
            to { transform: translateY(0); opacity: 1; }
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

    <div class="course-container">
        <div class="content-box">
            <h1><?php echo $courseName; ?></h1>
            <p><?php echo $courseDescription; ?></p>
            
            <form method="POST" action="2.php">
                <input type="hidden" name="course_name" value="<?php echo $courseName; ?>">
                <button type="submit" class="btn">Watch now</button>
            </form>
            
            <a href="process_login.php" class="btn back-btn">Back to All Courses</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 E LEARNING PLATFORM. All Rights Reserved.</p>
    </footer>
</body>
</html>