<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veron's Student Hub</title>

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

        .hero {
            text-align: center;
            padding: 70px 20px 40px;
        }

        .hero h1 {
            color: #b84f76;
            font-size: 42px;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 17px;
            color: #71717a;
        }

        .card {
            width: 85%;
            max-width: 850px;
            margin: 20px auto 60px;
            background: white;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(217, 108, 145, 0.12);
        }

        .card h2 {
            color: #b84f76;
            margin-bottom: 25px;
            text-align: center;
        }

        .info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .info-box {
            background: #fff0f4;
            padding: 18px;
            border-radius: 12px;
        }

        .info-box span {
            display: block;
            font-size: 13px;
            color: #a85574;
            margin-bottom: 6px;
        }

        .info-box strong {
            font-size: 16px;
        }

        .button {
            display: block;
            width: fit-content;
            margin: 30px auto 0;
            padding: 13px 25px;
            background: #d96c91;
            color: white;
            text-decoration: none;
            border-radius: 25px;
        }

        .button:hover {
            background: #b84f76;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #9f6b7c;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .info {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 32px;
            }

            nav {
                padding: 18px 5%;
            }
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Veron's Student Hub</div>

        <div>
            <a href="/LavaLust/LavaLust/student">Home</a>
            <a href="/LavaLust/LavaLust/student/profile">Profile</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Welcome, Veronica! ♡</h1>
        <p>Your personal student information hub</p>
    </section>

    <div class="card">
        <h2>Student Information</h2>

        <div class="info">

            <div class="info-box">
                <span>Student ID</span>
                <strong>MCC2024-00097</strong>
            </div>

            <div class="info-box">
                <span>Name</span>
                <strong>Veronica</strong>
            </div>

            <div class="info-box">
                <span>Course</span>
                <strong>BS Information Technology</strong>
            </div>

            <div class="info-box">
                <span>Year Level</span>
                <strong>3rd Year</strong>
            </div>

            <div class="info-box">
                <span>Section</span>
                <strong>F2</strong>
            </div>

            <div class="info-box">
                <span>Email</span>
                <strong>andulanv51@gmail.com</strong>
            </div>

        </div>

    </div>

    <footer>
        © 2026 Veron's Student Hub
    </footer>

</body>
</html>