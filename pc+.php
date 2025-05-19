
<?php
$courseName = "Programming in C++";
$courseDescription = "CODE WITH HARRY";
$courseImage = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrARn5PmVwikPev4lqOpNtXecwiqwUxe0CTA&s";
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
            background: linear-gradient(rgba(151, 146, 146, 0.41), rgba(109, 103, 103, 0.39)), url('<?php echo $courseImage; ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            animation: fadeIn 1s, backgroundZoom 20s infinite alternate;
            min-height: 100vh;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes backgroundZoom {
            0% { background-size: 100% auto; }
            100% { background-size: 120% auto; }
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
            text-shadow: 2px 2px 4px rgb(255, 255, 255);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn {
            padding: 12px 25px;
            background-color: rgb(22, 178, 250);
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
            background-color: rgb(0, 4, 253);
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgb(253, 253, 253);
        }

        .back-btn {
            background-color:rgb(16, 245, 188);
        }

        .back-btn:hover {
            background-color:rgb(17, 244, 252);
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
            background: rgba(23, 233, 216, 0.2);
            color: #333;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            box-shadow: 0 8px 16px rgb(255, 255, 255);
            animation: slideUp 1s ease-out;
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
            
            <form method="POST" action="1.php">
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