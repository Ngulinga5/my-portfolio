<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - My Portfolio</title>
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
            background-image: url('img/bg-1.jpg'); /* Use relative path */
            background-size: cover;  /* Ensures the image covers the entire screen */
            background-position: center;  /* Centers the image */
            background-attachment: fixed; /* Makes the background image fixed while scrolling */
            color: white; /* White text color */
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }

        body::after {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Adds fade effect */
            z-index: -1;
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
            align-items: center;
        }

        /* Header Section */
        header {
            background: #000; /* Black background */
            color: white; /* White text */
            text-align: center;
            padding: 2rem 0;
        }

        header h1 {
            font-size: 2.5rem;
        }

        /* Projects Section */
        #projects {
            margin: 2rem 0;
            text-align: center;
            align-content: center;
            justify-content: center; /* Center align items */
        }

        #projects h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: white; /* White text */
        }

        #projects p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        /* Centered Projects */
        .projects-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center align items */
            gap: 2rem; /* Even spacing between cards */
        }

        /* Project Card */
        .project-card {
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent black background */
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #fff; /* White border */
            width: 280px; /* Set a consistent width */
            border-radius: 27px;
            justify-content: center; /* Center align items */
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .project-card h3 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: white; /* White text */
        }

        .project-card p {
            margin-bottom: 0.5rem;
        }

        .project-card a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background: white; /* White button */
            color: black; /* Black text */
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .project-card a:hover {
            background: #ccc; /* Slightly lighter white for hover */
        }

        /* Footer Section */
        footer {
            background: #000; /* Black background */
            color: white; /* White text */
            text-align: center;
            padding: 1rem;
            margin-top: 12rem;
            font-size: 0.9rem;
            border-radius: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .project-card {
                width: 90%; /* Full width for smaller screens */
            }

            header h1 {
                font-size: 2rem;
            }

            #projects p {
                font-size: 1rem;
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

    <section id="projects" class="container">
        <h2>My Projects</h2>
        <p>Below are some of the projects I've worked on. Click the links to learn more:</p>
        <div class="projects-list">
            <div class="project-card">
                <h3>Portfolio Website</h3>
                <p>Designed a responsive portfolio to showcase my skills and projects.</p>
                <p><strong>Technologies:</strong> HTML, CSS, JavaScript</p>
            </div>
           
            <div class="project-card">
                <h3>Penetration Testing Report</h3>
                <p>Conducted a security audit for a small business website to identify vulnerabilities.</p>
                <p><strong>Technologies:</strong> Kali Linux, OWASP Tools, Metasploit</p>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 Happy Ngulinga. All rights reserved.</p>
    </footer>
</body>
</html>
