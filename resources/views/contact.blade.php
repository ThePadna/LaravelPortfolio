<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Contact Me | Cory Franklin</title>
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

        @keyframes gradientHover {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
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

        .contact-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 6rem 2rem; /* Adjusted top padding to clear navbar */
            animation: fadeInUp 1s ease-out;
        }

        .contact-container {
            max-width: 700px;
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.6);
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            color: white;
            text-shadow: 2px 2px 12px rgba(0, 0, 0, 0.7);
            text-align: center;
            margin-bottom: 2rem;
        }

        h2 {
            font-size: 1.75rem;
            font-weight: 500;
            color: #e2e8f0;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 12px 16px;
            margin-bottom: 1.5rem;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #f1f5f9;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .contact-form textarea {
            resize: vertical;
            min-height: 150px;
        }

        .contact-form input:focus, .contact-form textarea:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 0 10px rgba(0, 202, 78, 0.3);
        }

        .submit-btn {
            background: #00ca4e;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 1rem;
        }

        .submit-btn:hover {
            background: #00b140;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 202, 78, 0.5);
        }

        .form-message {
            text-align: center;
            margin-top: 1rem;
            font-size: 1rem;
            display: none;
        }

        .form-message.success {
            color: #00ca4e;
        }

        .form-message.error {
            color: #f87171;
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

            .contact-section {
                padding: 5rem 1.5rem; /* Adjusted for mobile */
            }

            .contact-container {
                padding: 2rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 1.5rem;
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

    <!-- Navigation -->
    <nav class="nav-container" x-data="{ open: false }" @click.outside="open = false">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <div class="hamburger" @click="open = !open">
                <i class="fas fa-bars"></i>
            </div>
            <div class="nav-menu" :class="{ 'open': open }">
                <a href="/" class="nav-button" @click="open = false">
                    <i class="fas fa-user"></i> About
                </a>
                <a href="/projects" class="nav-button" @click="open = false">
                    <i class="fas fa-code"></i> Projects
                </a>
                <a href="/contact" class="nav-button active" @click="open = false">
                    <i class="fas fa-envelope"></i> Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <h1>Contact Me</h1>
            <div class="contact-form">
                <h2>Send Me a Message</h2>
                <form id="contactForm">
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>
                    <button type="submit" class="submit-btn">Send Message</button>
                    <div id="formMessage" class="form-message"></div>
                </form>
            </div>
        </div>
    </section>

    <script>
        const contactForm = document.getElementById('contactForm');
        const formMessage = document.getElementById('formMessage');

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const formData = new FormData(contactForm);

            try {
                const response = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                });

                if (response.ok) {
                    formMessage.textContent = 'Message sent successfully!';
                    formMessage.className = 'form-message success';
                    formMessage.style.display = 'block';
                    contactForm.reset();
                    setTimeout(() => formMessage.style.display = 'none', 3000);
                } else {
                    throw new Error('Failed to send message');
                }
            } catch (error) {
                formMessage.textContent = 'Error sending message. Please try again.';
                formMessage.className = 'form-message error';
                formMessage.style.display = 'block';
                setTimeout(() => formMessage.style.display = 'none', 3000);
            }
        });
    </script>
</body>
</html>