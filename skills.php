<?php
// skills.php

// Skills array grouped by categories
$skills = [
    'Programming Languages' => ['Python', 'C', 'JavaScript'],
    'Web Development' => ['HTML', 'CSS', 'Node.js', 'PHP'],
    'Cybersecurity' => ['Penetration Testing', 'Kali Linux'],
];

// Page metadata
$title = "Skills";
$description = "Explore the technical skills and expertise I bring to software development, web development, and cybersecurity.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - My Portfolio</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.4;
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('img/bg-1.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
            margin: 0;
        }

        nav {
            background: none;
            border-radius: 20px;
            margin-bottom: 1rem;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: left;
            flex-wrap: wrap;
            /* text-decoration: underline; */
            padding: 0.5rem 0;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 0.5rem 1rem;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: rgb(14, 13, 13);
            border-radius: 5px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 0;
            text-align: center;
        }

        header {
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 2rem 0;
        }

        header h1 {
            font-size: 2.5rem;
        }

        #skills {
            margin: 2rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #skills h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #fff;
        }

        #skills p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #fff;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }

        .skills-category {
            flex: 1 1 calc(300px - 2rem);
            max-width: 350px;
            background: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .skills-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
        }

        .skills-category h3 {
            margin-bottom: 1rem;
            color: #fff;
            font-size: 1.5rem;
        }

        .skills-category ul {
            list-style-type: none;
            padding: 0;
        }

        .skills-category ul li {
            margin: 0.5rem 0;
            padding: 0.5rem;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            font-size: 1rem;
            color: #fff;
        }

        footer {
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            text-align: center;
            padding: 1rem;
            font-size: 0.9rem;
            margin-top: 2rem;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            #skills p {
                font-size: 1rem;
            }

            .skills-category {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="projects.php">PROJECTS</a></li>
            <li><a href="skills.php">SKILLS</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="index.html">HOME</a></li>
        </ul>
    </nav>

    <section id="skills" class="container">
        <h2>My Technical Skills</h2>
        <p>Below is a comprehensive list of my technical skills, categorized for your convenience.</p>
        <div class="skills-list">
            <?php foreach ($skills as $category => $skillset): ?>
                <div class="skills-category">
                    <h3><?= htmlspecialchars($category); ?></h3>
                    <ul>
                        <?php foreach ($skillset as $skill): ?>
                            <li><?= htmlspecialchars($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer>
        <p>© 2025 Happy Ngulinga. All rights reserved.</p>
    </footer>
</body>
</html>
