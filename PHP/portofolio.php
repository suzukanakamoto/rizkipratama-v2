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
    <title>Portfolio - Rizki Pratama</title>
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
            <a href="portfolio.php" class="active">Portfolio</a>
            <a href="activities.php">Activities</a>
            <a href="contact.php">Contact</a>
        </nav>
        <!--Real Time Clock-->
        <div id="clock" class="clock"></div>
    </header>

    <section class="portfolio">
        <h2>My Portfolio</h2>
        <p>A showcase of my projects and achievements.</p>

        <div class="portfolio-grid">
            <div class="portfolio-item">
                <a href="https://journal.binus.ac.id/index.php/EMACS/article/view/8787" target="blank">
                <img src="Assets/portofolio1.png" alt="Project 1"></a>
                <p>International Journal</p>
                <ul>Designing IoT-Based Smarthome System With Chatbot</ul>
            </div>
            <div class="portfolio-item">
                <a href="https://www.tinkercad.com/users/3IjxA2GWrng-maromaro1010" target="blank">
                <img src="Assets/portofolio2.png" alt="Project 2"></a>
                <p>3D Design</p>
                <ul>Created several 3d media elements in the tinkercad platform</ul>
            </div>
            <div class="portfolio-item">
                <a href="https://github.com/suzukanakamoto" target="blank">
                <img src="Assets/portofolio3.png" alt="Project 3"></a>
                <p>GitHub</p>
                <ul>Some of my work and research portfolios are posted on the GitHub platform</ul>
            </div>
            <div class="portfolio-item">
                <a href="https://github.com/suzukanakamoto/UI-UX" target="blank">
                <img src="Assets/portofolio4.png" alt="Project 4"></a>
                <p>Axure Project</p>
                <ul>Create an overview of the user interface of the Fozza Hut application</ul>
            </div>
            <div class="portfolio-item">
                <a href="https://prasetya-construction.vercel.app" target="blank">
                <img src="Assets/portofolio5.png" alt="Project 4"></a>
                <p>Company Profile Project</p>
                <ul>Create a company profile website with the Laravel framework</ul>
            </div>
        </div>
    </section>
</body>

</html>
