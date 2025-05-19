<?php
$courseName = "Artificial Intelligence Tutorial For Beginners";
$courseDescription = "edureka!";
$courseImage = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA_CAum04KbXoGyVlIbqXqpmCQAXTblo9Q-g&s";
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
            background: linear-gradient(rgba(119, 101, 101, 0.18), rgba(99, 73, 73, 0.19)), url('<?php echo $courseImage; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: fadeIn 1s, backgroundScan 15s linear infinite;
            min-height: 100vh;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes backgroundScan {
            0% { background-position: 0% 0%; }
            100% { background-position: 100% 100%; }
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
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, transparent, #00ffaa, transparent);
            animation: linePulse 2s infinite;
        }

        @keyframes linePulse {
            0% { width: 100px; }
            50% { width: 200px; }
            100% { width: 100px; }
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            background-color: #00ffaa;
            color: #111;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            margin: 10px;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% { left: -50%; }
            100% { left: 150%; }
        }

        .btn:hover {
            background-color: #00cc88;
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 255, 170, 0.5);
        }

        .btn:hover::before {
            animation: none;
        }

        .back-btn {
            background-color: #6c757d;
        }

        .back-btn::before {
            display: none;
        }

        .back-btn:hover {
            background-color: #5a6268;
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
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            animation: slideUp 1s ease-out;
            border: 1px solid #00ffaa;
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
            
            <form method="POST" action="5.php">
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