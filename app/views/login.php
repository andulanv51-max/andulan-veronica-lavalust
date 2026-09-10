<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f6;
            margin: 0;
            padding: 40px;
        }

        .login-container {
            width: 400px;
            margin: 80px auto;
            background-color: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #e83e8c;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #e83e8c;
        }

        button {
            width: 100%;
            padding: 11px;
            background-color: #e83e8c;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.85;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h1>Login</h1>

        <form method="POST">

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit">Login</button>

        </form>

    </div>

</body>

</html>