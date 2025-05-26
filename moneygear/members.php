<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MoneyGear Members</title>
    <link rel="icon" href="gear.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
        }

        body > nav,
        body > main {
            flex-shrink: 0;
        }

        main.container {
            flex: 1 0 auto;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto; 
            padding: 1rem 2rem; 
            box-sizing: border-box;
        }

        .logo-link {
            color: inherit;
            text-decoration: none;
            cursor: pointer;
            font-weight: bold;
        }

        footer {
            background-color: #21294a;
            color: #f6f7f0;
            text-align: center;
            padding: 2rem;
            font-size: 0.9rem;
            flex-shrink: 0;
            width: 100%;
            box-sizing: border-box;
        }

        footer a {
            color: #e48124;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <h1><a href="index.php" class="logo-link">
            <img src="gearnav.jpg" alt="Logo" style="height: 30px; vertical-align: middle; margin-right: 8px;">
            MoneyGear
        </a></h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="#">Members</a></li>
            <li><a href="aboutus.php">About Us</a></li>
        </ul>
    </nav>

    <main class="container">
        <h2>Group Members</h2>
        <form method="GET" class="search-form">
            <input type="text" name="search" placeholder="Search member name...">
        </form>
        <a href="add.php" class="btn add">+ Add New Member</a>

        <?php
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $sql = "SELECT * FROM members WHERE name LIKE '%$search%'";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()):
        ?>
            <div class="member-card">
                <span><?= htmlspecialchars($row['name']) ?></span>
                <div class="actions">
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn delete" onclick="return confirm('Delete this member?')">Delete</a>
                </div>
            </div>
        <?php endwhile; ?>
    </main>

    <footer>
        &copy; <?= date('Y') ?> MoneyGear. All rights reserved. | <a href="aboutus.php">About Us</a>
    </footer>
</body>
</html>
