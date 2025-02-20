<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<body>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Please fill out the form below and we'll get back to you as soon as possible.</p>
        <form action="process_form.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Write your message here" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
