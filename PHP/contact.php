<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Assets/icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Contact Us - Rizki Pratama</title>
</head>

<body>
    <header>
        <a href="#" class="logo">Rizki</a>
        <nav>
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="skills.php">Skills</a>
            <a href="education.php">Education</a>
            <a href="experience.php">Experience</a>
            <a href="portofolio.php">Portofolio</a>
            <a href="activities.php">Activities</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>
        <!--Real Time Clock-->
        <div id="clock" class="clock"></div>
    </header>

    <section class="contact">
        <h2>Contact Us</h2>
        <p>Feel free to reach out by filling in the form below:</p>

        <div class="contact-container">
            <form action="#" method="post" class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" placeholder="Enter your message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>
</body>

</html>
