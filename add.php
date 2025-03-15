<?php
include('connection.php');

if (isset($_GET['Submit'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];

    $insert = "INSERT INTO info VALUES(NULL, '$name', $age, '$address')";
    $sqlInsert = mysqli_query($connect, $insert);

    echo "<script>alert('New Data Added');</script>";
    echo "<script>window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
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
            background-color: #ff69b4;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-submit:hover {
            background-color: #d64b8a;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Add New Data</h2>
    <form action="add.php" method="get">
        <label>Enter Your Name:</label>
        <input type="text" name="name" required><br>
        
        <label>Enter Your Age:</label>
        <input type="number" name="age" required><br>
        
        <label>Enter Your Address:</label>
        <input type="text" name="address" required><br>

        <input type="submit" name="Submit" value="Submit" class="btn-submit">
    </form>
</div>

</body>
</html>