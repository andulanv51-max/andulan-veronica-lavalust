<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f6;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: 50px auto;
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

        input,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input:focus,
        textarea:focus {
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

        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #e83e8c;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Add Product</h1>

        <form method="POST">

            <div class="form-group">
                <label>Product Name:</label>
                <input type="text" name="product_name" required>
            </div>

            <div class="form-group">
                <label>Description:</label>
                <textarea name="description"></textarea>
            </div>

            <div class="form-group">
                <label>Price:</label>
                <input type="number" name="price" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" name="quantity" required>
            </div>

            <button type="submit">Add Product</button>

        </form>

        <a class="back" href="/LavaLust/LavaLust/products">
            ← Back to Products
        </a>

    </div>

</body>

</html>