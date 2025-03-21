<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cory Franklin | Web Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>
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
            color: #f1f5f9;
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.15;
            z-index: -1;
            loading: lazy;
        }

        .fallback-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: #00ca4e; }
        }

        @keyframes gradientHover {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 6rem 2rem 2rem; /* Added top padding to clear navbar */
            position: relative;
            z-index: 10;
        }

        .hero-content {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 2.5rem; /* Reduced padding to keep card compact */
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.6);
            max-width: 850px;
            animation: fadeInUp 1s ease-out;
        }

        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid #00ca4e;
            box-shadow: 0 0 25px rgba(0, 202, 78, 0.4);
            margin-bottom: 1.5rem; /* Reduced margin */
            transition: box-shadow 0.4s ease;
            loading: lazy;
        }

        .profile-pic:hover {
            box-shadow: 0 0 35px rgba(0, 202, 78, 0.7);
        }

        h1 {
            font-size: 3.75rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.7);
            margin-bottom: 0.75rem;
        }

        .tagline {
            font-size: 1.9rem;
            font-weight: 500;
            color: #e2e8f0;
            margin-bottom: 1rem; /* Reduced margin */
        }

        .typewriter {
            font-size: 1.6rem;
            color: white;
            font-weight: 500;
            margin: 1rem 0;
            overflow: hidden;
            border-right: .15em solid #00ca4e;
            white-space: nowrap;
            animation: typing 3.5s steps(40, end) forwards, blink-caret .75s step-end infinite;
        }

        .bio {
            font-size: 1.15rem;
            color: #cbd5e1;
            max-width: 650px;
            margin-bottom: 1.5rem; /* Reduced margin */
            line-height: 1.7;
        }

        .highlight {
            color: #00ca4e;
            font-weight: 600;
        }

        .social-icons a {
            font-size: 2.2rem;
            color: #e2e8f0;
            margin: 0 1.2rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: #00ca4e;
            transform: translateY(-4px);
        }

        .nav-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            padding: 1.25rem 2.5rem;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
        }

        .nav-button {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #e2e8f0;
            text-transform: uppercase;
            font-weight: 500;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.1), rgba(0, 202, 78, 0.2), rgba(255, 255, 255, 0.1));
            background-size: 200% 100%;
        }

        .nav-button:hover {
            color: white;
            background-position: 100% 50%;
            animation: gradientHover 1.5s ease infinite;
        }

        .nav-button.active {
            background: #00ca4e;
            color: white;
        }

        .hire-button {
            display: inline-block;
            background: #00ca4e;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .hire-button:hover {
            background: #00b140;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 202, 78, 0.5);
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
                backdrop-filter: blur(12px);
                padding: 1.5rem;
            }

            .hamburger {
                display: block;
                font-size: 1.75rem;
                color: #e2e8f0;
                cursor: pointer;
            }

            .hero {
                padding-top: 5rem; /* Adjusted for mobile */
            }

            .hero-content {
                padding: 2rem; /* Slightly reduced for mobile */
            }

            h1 {
                font-size: 2.75rem;
            }

            .tagline {
                font-size: 1.5rem;
            }

            .typewriter {
                font-size: 1.3rem;
            }

            .bio {
                font-size: 1rem;
            }

            .profile-pic {
                width: 160px;
                height: 160px;
            }

            .social-icons a {
                font-size: 1.9rem;
                margin: 0 1rem;
            }
        }

        @media (min-width: 769px) {
            .hamburger {
                display: none;
            }

            .nav-menu {
                display: flex;
                gap: 1.5rem;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <!-- Video Background -->
    <video autoplay loop muted class="video-bg" aria-label="Background video showcasing abstract visuals">
        <source src="{{ asset('videos/bgvid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Fallback Animation -->
    <div class="fallback-bg"></div>

    <!-- Top Navigation -->
    <nav class="nav-container" x-data="{ open: false }" @click.outside="open = false">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <div class="hamburger" @click="open = !open">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu" :class="{ 'open': open }">
                <a href="/" class="nav-button active" @click="open = false">
                    <i class="fas fa-user"></i> About
                </a>
                <a href="/projects" class="nav-button" @click="open = false">
                    <i class="fas fa-code"></i> Projects
                </a>
                <a href="/contact" class="nav-button" @click="open = false">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <img src="{{ asset('images/pfp.png') }}" alt="Cory Franklin, Web Developer" class="profile-pic" data-tilt>
            <h1>Cory Franklin</h1>
            <p class="typewriter">Creating custom websites that stand out.</p>
            <p class="bio">Unlike standard CMS-built websites, my custom solutions are designed from the ground up to meet your specific needs, ensuring a unique and effective online presence. Let’s build your next project together.</p>
            <a href="/hireme" class="hire-button">Hire Me</a>
            <div class="social-icons mt-4">
                <a href="https://github.com" target="_blank" aria-label="GitHub Profile"><i class="fab fa-github"></i></a>
                <a href="https://twitter.com" target="_blank" aria-label="Twitter Profile"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn Profile"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </section>

    <script>
        VanillaTilt.init(document.querySelector(".profile-pic"), {
            max: 10,
            speed: 400,
            glare: false
        });
    </script>
</body>
</html>