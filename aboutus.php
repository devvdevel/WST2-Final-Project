<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - MoneyGear</title>
    <link rel="icon" href="gear.png" type="image/png">
    <style>
        /* Reset and base */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f6f7f0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        nav {
            background: #21294a;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav h1 {
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            position: relative;
        }

        nav a.active::after,
        nav a:hover::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #e48124;
        }

        .container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.08);
            flex: 1 0 auto; /* Allow container to grow and push footer down */
        }

        .container h2 {
            color: #21294a;
            margin-bottom: 1rem;
        }

        .container p {
            line-height: 1.6;
            font-size: 1.05rem;
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
            flex-shrink: 0; /* Footer won't shrink */
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
    <h1><a href="index.html" class="logo-link">
        <img src="gearnav.jpg" alt="Logo" style="height: 30px; vertical-align: middle; margin-right: 8px;">
        MoneyGear
    </a></h1>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="members.php">Members</a></li>
        <li><a class="active" href="#">About Us</a></li>
    </ul>
</nav>

<div class="container">
    <h2>About <span style="color: #e48124;">MoneyGear</span></h2>
    <p>
        MoneyGear is a group project aimed at demonstrating basic CRUD operations in a user-friendly web interface. 
        Built using HTML, CSS, PHP, and MySQL, it showcases database interaction and front-end integration with a clean and modern design.
    </p>
    <p>
        This platform allows users to manage members, perform live search, and maintain a seamless experience across all pages.
        The goal is to build a practical and scalable base that can evolve into a more complex web system.
    </p>
    <p>
        Created by a dedicated team, MoneyGear represents collaboration, learning, and innovation in modern web development.
    </p>
</div>

<footer>
    &copy; <?= date('Y') ?> MoneyGear. All rights reserved. | <a href="aboutus.php">About Us</a>
</footer>
</body>
</html>
