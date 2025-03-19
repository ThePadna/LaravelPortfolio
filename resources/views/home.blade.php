<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cory Franklin | AI Web Innovator</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Video Background - Matching Projects Page */
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.1;
            z-index: -1;
        }

        /* Fallback Animation if Video Fails */
        .fallback-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            overflow: hidden;
        }

        .fallback-bg::before {
            content: '';
            position: absolute;
            width: 150%;
            height: 150%;
            top: -25%;
            left: -25%;
            background: radial-gradient(circle, rgba(0, 202, 78, 0.2) 10%, transparent 50%);
            animation: pulse 10s infinite ease-in-out;
            opacity: 0.5;
        }

        @keyframes pulse {
            0% { transform: scale(0.9) translate(5%, 5%); opacity: 0; }
            50% { transform: scale(1.1) translate(0, 0); opacity: 0.5; }
            100% { transform: scale(0.9) translate(5%, 5%); opacity: 0; }
        }

        /* Hero Section */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            padding: 2rem;
            position: relative;
            z-index: 10;
        }

        .hero-content {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            max-width: 700px;
        }

        .profile-pic {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #00ca4e;
            box-shadow: 0 0 30px rgba(0, 202, 78, 0.5);
            margin-bottom: 1.5rem;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .profile-pic:hover {
            transform: scale(1.1);
            box-shadow: 0 0 40px rgba(0, 202, 78, 0.8);
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.6);
            margin-bottom: 0.5rem;
        }

        .tagline {
            font-size: 1.8rem;
            color: #e2e8f0;
            font-weight: 500;
            margin-bottom: 2rem;
        }

        .highlight {
            color: #00ca4e;
            font-weight: 600;
            text-shadow: 0 0 10px rgba(0, 202, 78, 0.3);
        }

        .social-icons a {
            font-size: 2.2rem;
            color: white;
            margin: 0 1rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            transform: translateY(-5px);
            color: #f1c40f;
        }

        /* Navbar Styles - Matching Projects Page */
        .nav-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
        }

        .nav-button {
            display: flex;
            align-items: center;
            gap: 8px;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .nav-button.active {
            background: rgba(255, 255, 255, 0.2);
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .nav-menu.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                padding: 1rem;
            }

            .hamburger {
                display: block;
                font-size: 1.5rem;
                color: white;
                cursor: pointer;
            }

            .hero-content {
                padding: 2rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            .tagline {
                font-size: 1.4rem;
            }

            .profile-pic {
                width: 140px;
                height: 140px;
            }

            .social-icons a {
                font-size: 1.8rem;
                margin: 0 0.75rem;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }

            .nav-menu {
                display: flex;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Video Background - Matching Projects Page -->
    <video autoplay loop muted class="video-bg">
        <source src="/videos/bgvid.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Fallback Animation -->
    <div class="fallback-bg"></div>

    <!-- Top Navigation - Matching Projects Page -->
    <nav class="nav-container" x-data="{ open: false }">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <div class="hamburger" @click="open = !open">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu" :class="{ 'open': open }">
                <a href="about" class="nav-button active" @click="open = false">
                    <i class="fas fa-user"></i> About
                </a>
                <a href="projects" class="nav-button" @click="open = false">
                    <i class="fas fa-code"></i> Projects
                </a>
                <a href="contact" class="nav-button" @click="open = false">
                    <i class="fas fa-envelope"></i> Contact
                </a>
                <a href="resume" class="nav-button" @click="open = false">
                    <i class="fas fa-file-alt"></i> Resume
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <img src="/images/pfp.png" alt="Cory Franklin" class="profile-pic">
            <h1>Cory Franklin</h1>
            <p class="tagline">Building <span class="highlight">AI-Powered Web Solutions</span></p>
            <div class="social-icons">
                <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </section>
</body>
</html>