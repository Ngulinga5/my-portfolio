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
            background-image: url('img/bg-1.jpg'); /* Use relative path */
            background-size: cover;  /* Ensures the image covers the entire screen */
            background-position: center;  /* Centers the image */
            background-attachment: fixed; /* Makes the background image fixed while scrolling */
            color: white;
            margin: 0;
            position: relative;
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

        .container {
            width: 90%;
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            text-align: center;
            border: 2px solid #000; /* Solid black border */
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
        }

        /* Navigation Menu */
        nav {
            background: none;
            border-radius: 20px;
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

        /* Header Section */
        header {
            width: 100%;
            background: none; /* Transparent background */
            color: white;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); /* Slight shadow for separation */
        }

        header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            letter-spacing: 2px;
        }

        header p {
            font-size: 1.1rem;
        }

        /* Section Styling */
        section {
            margin-bottom: 3rem;
            text-align: center;
        }

        section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-bottom: 2px solid #fff; /* White underline */
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        section p {
            font-size: 1.2rem;
            color: white;
            margin-bottom: 1.5rem;
        }

        /* Footer Styling */
        footer {
            background: #000; /* Black background */
            color: white; /* White text */
            text-align: center;
            padding: 1.5rem 0;
            width: 100%;
            font-size: 0.9rem;
            margin-top: 2rem;
            border-radius: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 2rem;
            }

            nav ul {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin: 0.5rem 0;
            }

            section p {
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

    <section id="about" class="container">
        <h2>Who Am I?</h2>
        <p>
            Hello! I'm a passionate developer with experience in building robust software and websites. I specialize in creating dynamic and user-friendly applications that solve real-world problems.
        </p>
        <p>
            My expertise extends to penetration testing, where I identify vulnerabilities and enhance security for applications and networks. I'm committed to staying ahead of the curve in the ever-evolving tech landscape.
        </p>
    </section>

    <section id="skills" class="container">
        <h2>What I Do</h2>
        <ul>
            <li><strong>Software Development:</strong> Crafting efficient and scalable solutions in languages like Java, Python, and C++.</li>
            <li><strong>Web Development:</strong> Building responsive and accessible websites using modern tools like HTML, CSS, JavaScript, and frameworks like React and Node.js.</li>
            <li><strong>Penetration Testing:</strong> Ensuring cybersecurity through vulnerability analysis using tools like Kali Linux and Metasploit.</li>
        </ul>
    </section>

    <section id="testimonials" class="container">
        <h2>Testimonials</h2>
        <p>Here’s what others say about my work:</p>
        <blockquote>
            "A highly skilled developer with a keen eye for detail. Their dedication to security is commendable!" – Client A
        </blockquote>
        <blockquote>
            "Transformed our website into a secure and user-friendly platform. Highly recommend!" – Client B
        </blockquote>
    </section>

    <footer>
        <p>© 2025 Happy Ngulinga. All rights reserved.</p>
    </footer>
</body>
</html>
