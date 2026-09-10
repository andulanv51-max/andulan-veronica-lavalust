<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0f6;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 90%;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            color: #e83e8c;
            margin-bottom: 25px;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .add-btn,
        .logout-btn {
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 6px;
            color: white;
            font-weight: bold;
        }

        .add-btn {
            background-color: #e83e8c;
        }

        .logout-btn {
            background-color: #e83e8c;
        }

        .add-btn:hover,
        .logout-btn:hover {
            opacity: 0.85;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #e83e8c;
            color: white;
            padding: 13px;
            text-align: left;
        }

        th:first-child {
            border-top-left-radius: 8px;
        }

        th:last-child {
            border-top-right-radius: 8px;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #f3d1df;
        }

        tbody tr:nth-child(even) {
            background-color: #fff7fa;
        }

        tbody tr:hover {
            background-color: #ffe8f1;
        }

        .id {
            color: #e83e8c;
            font-weight: bold;
        }

        .edit-btn,
        .delete-btn {
            text-decoration: none;
            padding: 6px 10px;
            border-radius: 5px;
            color: white;
            font-size: 13px;
            font-weight: bold;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #e83e8c;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Product List</h1>

        <div class="top-bar">

            <a class="add-btn" href="<?= site_url('products/create'); ?>">
                + Add Product
            </a>

            <a class="logout-btn" href="<?= site_url('logout'); ?>">
                Logout
            </a>

        </div>

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($products as $product): ?>

                    <tr>

                        <td class="id">
                            <?= $product['id']; ?>
                        </td>

                        <td>
                            <?= $product['product_name']; ?>
                        </td>

                        <td>
                            <?= $product['description']; ?>
                        </td>

                        <td>
                            <?= $product['price']; ?>
                        </td>

                        <td>
                            <?= $product['quantity']; ?>
                        </td>

                        <td>
                            <?= $product['created_at']; ?>
                        </td>

                        <td>
                            <a class="edit-btn"
                               href="<?= site_url('products/edit/' . $product['id']); ?>">
                                Edit
                            </a>

                            <a class="delete-btn"
                               href="<?= site_url('products/delete/' . $product['id']); ?>">
                                Delete
                            </a>
                        </td>

                    </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</body>

</html>