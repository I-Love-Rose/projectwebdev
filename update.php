<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM info WHERE id=$id";
    $result = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    $update = "UPDATE info SET name='$name', age=$age, address='$address' WHERE id=$id";
    mysqli_query($connect, $update);

    echo "<script>alert('Record Updated');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
        }
        .form-container {
            width: 40%;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 50px;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-submit {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #217dbb;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Update Data</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <label>Enter Your Name:</label>
        <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
        
        <label>Enter Your Age:</label>
        <input type="number" name="age" value="<?= $row['age'] ?>" required><br>
        
        <label>Enter Your Address:</label>
        <input type="text" name="address" value="<?= $row['address'] ?>" required><br>

        <input type="submit" name="update" value="Update" class="btn-submit">
    </form>
</div>

</body>
</html>