<?php include 'host.php'; ?>
<?php
// Database simulation
$courses = [
    "Programming in C++" => ["description" => "CODE WITH HARRY", "redirect" => "pc+.php"],
    "E-Commerce| Free Course" => ["description" => "DUCKY BHAI", "redirect" => "ecom.php"],
    "Web Development" => ["description" => "APNA COLLEGE", "redirect" => "web.php"],
    "eLearning Development" => ["description" => "The eLearning Designer's Academy by Tim Slade", "redirect" => "elearn.php"],
    "Artificial Intelligence Tutorial For Beginners" => ["description" => "edureka!", "redirect" => "ai.php"]
];

// Handle enrollment
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['course_name'])) {
    $courseName = $_POST['course_name'];
    if (array_key_exists($courseName, $courses)) {
        $redirectPage = $courses[$courseName]['redirect'];
        header("Location: $redirectPage");
        exit();
    } else {
        echo "<script>alert('Course not found!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Show</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 20px;
            background: linear-gradient(135deg,rgb(72, 23, 252),rgb(17, 164, 233),rgb(177, 0, 127),rgb(76, 19, 209));
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            color: #333;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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

        h1, h2 {
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(11, 190, 245, 0.95);
        }

        .course {
            font-size: 18px;
            margin: 10px 0;
            padding: 10px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 4px 6px rgb(3, 248, 154);
            animation: randomAnimation 1.5s ease-in-out;
        }

        @keyframes randomAnimation {
            0% { transform: scale(0.8) rotate(-10deg); opacity: 0; }
            50% { transform: scale(1.1) rotate(5deg); opacity: 0.5; }
            100% { transform: scale(1) rotate(0deg); opacity: 1; }
        }

        .enroll-form {
            margin-top: 20px;
            text-align: center;
        }

        .btn {
            padding: 10px 15px;
            background-color:rgb(72, 12, 238);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: transform 0.2s, background-color 0.3s;
        }

        .btn:hover {
            background-color:rgb(94, 97, 240);
            transform: scale(1.1);
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
        input[type="text"] {
            padding: 10px;
            border: 2px solidrgb(91, 48, 247);
            border-radius: 5px;
            width: 80%;
            max-width: 300px;
            margin-bottom: 10px;
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

    <h1>Available Courses</h1>
    <div id="course-list">
        <?php foreach ($courses as $courseName => $details): ?>
            <div class="course">
                <strong><?php echo $courseName; ?></strong>: <?php echo $details['description']; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="enroll-form">
        <h2>Enroll in a Course</h2>
        <form method="POST">
            <h3><label for="course_name">Course Name:</label><br></h3>
            <input type="text" id="course_name" name="course_name" placeholder="Enter course name" required><br>
            <button type="submit" class="btn">Enroll</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2025 E LEARNING PLATFORM. All Rights Reserved.</p>
    </footer>
</body>
</html>
<!-- Replace the form section with this: -->
