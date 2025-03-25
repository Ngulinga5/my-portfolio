<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hire Me</title>
  <!-- Add Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      line-height: 1.4;
      background-image: url('img/bg-1.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      margin: 0;
      color: white;
    }

    body::after {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: -1;
    }

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

    .container {
      text-align: center;
      color: white;
      max-width: 90%;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      background: rgba(0, 0, 0, 0.6);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .profile-picture {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    p {
      margin: 10px 0;
    }

    .social-links {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 10px;
      margin: 15px 0;
    }

    .social-links a {
      text-decoration: none;
      color: white;
      padding: 10px;
      border-radius: 50%;
      font-size: 1.5rem;
      transition: background 0.3s, transform 0.3s;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 45px;
      height: 45px;
    }

    .social-links a:hover {
      transform: scale(1.1);
      background: rgba(255, 255, 255, 0.2);
    }

    .email-button {
      display: inline-block;
      text-decoration: none;
      background: rgba(224, 29, 11, 0.9);
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      margin-top: 15px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .email-button:hover {
      background: rgba(22, 20, 20, 0.8);
    }

    @media (min-width: 768px) {
      .container {
        max-width: 600px;
      }

      .profile-picture {
        width: 150px;
        height: 150px;
      }

      h1 {
        font-size: 2.8rem;
      }
    }

    @media (max-width: 480px) {
      h1 {
        font-size: 2rem;
      }

      .email-button {
        padding: 8px 15px;
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

  <div class="container">
    <img src="img/bg-1.jpg" alt="Your Profile Picture" class="profile-picture">
    <h1>Happy Ngulinga NB</h1>
    <p>Software Developer | Web Enthusiast | Open to Opportunities</p>
    <p>📍 Location: Lilongwe, Malawi.</p>
    <p>📞 Phone Number: +2658 8042 6798 / +2659 9762 4961</p>
    
    <div class="social-links">
      <a href="https://linkedin.com/in/HappyNgulinga" target="_blank" style="background: #0073b1;">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/ngulinga1" target="_blank" style="background: gray;">
        <i class="fab fa-github"></i>
      </a>
      <a href="https://instagram.com/ngulinga56" target="_blank" style="background: #e4405f;">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    
    <a href="mailto:happyngulinga56@gmail.com" class="email-button">Email Me</a>
  </div>
</body>
</html>
