<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veronica's Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fff5f8;
            color: #3f3f46;
        }

        nav {
            background: #d96c91;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .profile-container {
            width: 85%;
            max-width: 850px;
            margin: 60px auto;
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(217, 108, 145, 0.12);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 35px;
        }

        .profile-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 15px;
            background: #f8c4d5;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 38px;
        }

        .profile-header h1 {
            color: #b84f76;
            margin-bottom: 8px;
        }

        .profile-header p {
            color: #71717a;
        }

        .information {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .info-box {
            background: #fff0f4;
            padding: 20px;
            border-radius: 12px;
        }

        .info-box span {
            display: block;
            color: #a85574;
            font-size: 13px;
            margin-bottom: 7px;
        }

        .info-box strong {
            font-size: 16px;
        }

        .about {
            margin-top: 25px;
            padding: 22px;
            background: #fff7fa;
            border-left: 4px solid #d96c91;
            border-radius: 10px;
        }

        .about h2 {
            color: #b84f76;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .about p {
            line-height: 1.6;
            color: #52525b;
        }

        .back-button {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 13px 25px;
            background: #d96c91;
            color: white;
            text-decoration: none;
            border-radius: 25px;
        }

        .back-button:hover {
            background: #b84f76;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #9f6b7c;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .information {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Veron's Student Hub</div>

        <div>
            <a href="/student">Home</a>
            <a href="/student/profile">Profile</a>
        </div>
    </nav>

    <div class="profile-container">

        <div class="profile-header">
            <div class="profile-icon">♡</div>

            <h1><?= $name ?>'s Profile</h1>
            <p>Student Information and Personal Profile</p>
        </div>

        <div class="information">

            <div class="info-box">
                <span>Student ID</span>
                <strong><?= $student_id ?></strong>
            </div>

            <div class="info-box">
                <span>Name</span>
                <strong><?= $name ?></strong>
            </div>

            <div class="info-box">
                <span>Course</span>
                <strong><?= $course ?></strong>
            </div>

            <div class="info-box">
                <span>Year Level</span>
                <strong><?= $year ?></strong>
            </div>

            <div class="info-box">
                <span>Section</span>
                <strong><?= $section ?></strong>
            </div>

            <div class="info-box">
                <span>Email</span>
                <strong><?= $email ?></strong>
            </div>

        </div>

        <div class="about">
            <h2>About Me</h2>
            <p>
                I am a BS Information Technology student who's
                learning about web development, programming, and technology.
            </p>
        </div>

        <a class="back-button" href="/student">
            Back to Home
        </a>

    </div>

    <footer>
        © 2026 Veron's Student Hub
    </footer>

</body>
</html>