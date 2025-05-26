<?php
include 'db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$result = $conn->query("SELECT * FROM members WHERE id=$id");
$member = $result->fetch_assoc();

if (!$member) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    if ($name !== '') {
        $stmt = $conn->prepare("UPDATE members SET name=? WHERE id=?");
        $stmt->bind_param('si', $name, $id);
        $stmt->execute();
        header("Location: members.php");
        exit;
    } else {
        $error = "Name cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Member - MoneyGear</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f6f7f0;
            margin: 0;
            padding: 3rem 1rem;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .form-container {
            background: white;
            padding: 2.5rem 3rem;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
            width: 360px;
        }
        h1 {
            color: #21294a;
            margin-bottom: 1.5rem;
            font-weight: 700;
            font-size: 1.8rem;
            text-align: center;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.75rem 1rem;
            font-size: 1.1rem;
            border: 1.8px solid #ccc;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #e48124;
            outline: none;
        }
        button {
            background-color: #21294a;
            color: white;
            border: none;
            padding: 0.75rem 1.2rem;
            font-size: 1.1rem;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            font-weight: 600;
            letter-spacing: 0.05em;
        }
        button:hover {
            background-color: #1a2038;
        }
        .error {
            color: #e48124;
            margin-bottom: 1rem;
            font-weight: 600;
            text-align: center;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #21294a;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .back-link:hover {
            color: #e48124;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Edit Member</h1>
    <?php if (!empty($error)) : ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="POST" action="">
        <input type="text" name="name" value="<?= htmlspecialchars($member['name']) ?>" required autofocus>
        <button type="submit">Update Member</button>
    </form>
    <a href="members.php" class="back-link">&larr; Back to Members List</a>
</div>

</body>
</html>
