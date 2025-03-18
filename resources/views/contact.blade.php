<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <a href="index.html" class="home-btn">Home</a>
    <h1>Contact Me</h1>

    <div class="contact-container">
        <!-- Chat Room -->
        <div class="chat-container">
            <h2>Live Chat</h2>
            <div class="chat-box" id="chat-box"></div>
            <input type="text" id="chat-input" class="chat-input" placeholder="Type a message...">
            <button class="send-btn" onclick="sendMessage()">Send</button>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Send Me a Message</h2>
            <form id="contactForm">
                <input type="text" id="name" placeholder="Your Name" required>
                <input type="email" id="email" placeholder="Your Email" required>
                <textarea id="message" placeholder="Your Message" rows="4" required></textarea>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>

    <script src="contact.js"></script>
</body>
</html>
