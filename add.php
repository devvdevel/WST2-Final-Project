<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $conn->query("INSERT INTO members (name) VALUES ('$name')");
    header("Location: members.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Member - MoneyGear</title>
    <style>
        body {
            background-color: #f6f7f0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        form {
            background-color: #ffffff;
            padding: 2rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            text-align: center;
            border: 1px solid #ddd;
        }
        h2 {
            margin-bottom: 1rem;
            color: #21294a;
        }
        input[type="text"] {
            padding: 0.7rem;
            width: 100%;
            max-width: 280px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }
        button {
            background-color: #e48124;
            color: #fff;
            padding: 0.6rem 1.5rem;
            border: none;
            border-radius: 5px;
            font-weight: 500;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #c96d1d;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2>Add New Member</h2>
    <input type="text" name="name" placeholder="Enter member name" required><br>
    <button type="submit">Add</button>
</form>

</body>
</html>
