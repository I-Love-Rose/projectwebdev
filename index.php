<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            color: white;
        }
        .btn-edit {
            background-color: #ff69b4; /* Pink */
        }
        .btn-edit:hover {
            background-color: #d64b8a;
        }
        .btn-delete {
            background-color: #3498db; /* Blue */
        }
        .btn-delete:hover {
            background-color: #217dbb;
        }
        .btn-add {
            background-color: #28a745; /* Green */
            padding: 12px 20px;
            font-size: 16px;
            margin-top: 20px;
            display: inline-block;
        }
        .btn-add:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>ADDRESS</th>
        <th>ACTION</th>
    </tr>
    <?php
    include('connection.php');
    $select = "SELECT * FROM info";
    $sqlSelect = mysqli_query($connect, $select);

    foreach ($sqlSelect as $value) { ?>
    <tr> 
        <td><?= $value['id'] ?></td>
        <td><?= $value['name'] ?></td>
        <td><?= $value['age'] ?></td>
        <td><?= $value['address'] ?></td>
        <td>
            <a href="update.php?id=<?= $value['id'] ?>" class="btn btn-edit">Edit</a>
            <a href="delete.php?id=<?= $value['id'] ?>" class="btn btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="add.php" class="btn btn-add">+ ADD</a>

</body>
</html>