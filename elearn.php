<?php
$courseName = "eLearning Development";
$courseDescription = "The eLearning Designer's Academy by Tim Slade";
$courseImage = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHzt1pI_hVxrtwvY-TNtJrJbbzEadosHA_yA&s";
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
            background: linear-gradient(rgba(105, 98, 98, 0.56), rgba(121, 121, 121, 0.44)), url('<?php echo $courseImage; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: fadeIn 1s, backgroundPulse 10s infinite alternate;
            min-height: 100vh;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes backgroundPulse {
            0% { opacity: 0.9; }
            100% { opacity: 1; }
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

        .course-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            background-color:rgb(12, 125, 255);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            animation: infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .btn:hover {
            background-color:rgb(0, 4, 255);
            animation: pulse 1.5s infinite;
        }

        .back-btn {
            background-color:rgb(7, 132, 248);
            animation: pulse 1s infinite;
        }

        .back-btn:hover {
            background-color:rgb(6, 10, 238);
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
            background: rgba(5, 160, 250, 0.17);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 8px 16px rgb(255, 255, 255);
            animation: slideUp 1s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
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
            
            <form method="POST" action="3.php">
                <input type="hidden" name="course_name" value="<?php echo $courseName; ?>">
                <button type="submit" class="btn">watch Now</button>
            </form>
            
            <a href="process_login.php" class="btn back-btn">Back to All Courses</a>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 E LEARNING PLATFORM. All Rights Reserved.</p>
    </footer>
</body>
</html>