<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body, html {
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }

        /* Video Background */
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Centered Content */
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.1); /* Glass effect */
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
        }

        /* Profile Picture */
        .profile-pic {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
            margin-bottom: 15px;
            transition: all 0.3s ease-in-out;
        }

        .profile-pic:hover {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
            transform: scale(1.05);
        }

        /* Text Styling */
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
        }

        p {
            font-size: 1.3rem;
            color: white;
            font-weight: 500;
            opacity: 0.9;
            margin-bottom: 20px;
        }

        /* Sidebar Navigation */
        .button-container {
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .button {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.4rem;
            color: white;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            padding: 12px 18px;
            border-radius: 8px;
            transition: all 0.3s ease-in-out;
        }

        .button i {
            font-size: 1.6rem;
        }

        .button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        /* Social Media Icons */
        .social-icons {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a {
            font-size: 1.8rem;
            color: white;
            transition: all 0.3s ease-in-out;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            color: #f1c40f;
        }

    </style>
</head>
<body>

    <!-- Video Background -->
    <div class="video-container">
        <video autoplay loop muted poster="path/to/placeholder-image.jpg" preload="auto">
            <source src="/videos/bgvid.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Sidebar Buttons -->
    <div class="button-container">
        <a href="#about" class="button"><i class="fas fa-user"></i>About</a>
        <a href="#projects" class="button"><i class="fas fa-code"></i>Projects</a>
        <a href="contact" class="button"><i class="fas fa-envelope"></i>Contact</a>
        <a href="#resume" class="button"><i class="fas fa-file-alt"></i>Resume</a>
    </div>

    <!-- Content Section -->
    <div class="content">
        <img src="/images/pfp.png" alt="Profile Picture" class="profile-pic">
        <h1>Cory Franklin</h1>
        <p>Full-Stack Developer | Laravel & React</p>

        <!-- Social Media Links -->
        <div class="social-icons">
            <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

</body>
</html>
