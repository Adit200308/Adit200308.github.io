<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - [Your Name/Company Name]</title>
    <link rel="stylesheet" href="Aboutus.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">
                <ion-icon name="Library"></ion-icon>
                </a>  <!-- Logo now links to the homepage -->
            </div>
            <ul>
                <li><a href="aboutus.php" class="animate-on-scroll">Portfolio</a></li>  <!--  Keep these as # for now. -->
                <li><a href="#">Contact</a></li>  <!--  Keep these as # for now. -->
            </ul>
        </nav>
    </header>

    <main>
          <section class="hero">
            <div class="hero-content">
                <h1>About Us</h1>
                <p class="animate-on-scroll">
                    A passionate developers dedicated to crafting beautiful and functional web experiences.
                </p>
                <a href="#about"  class="button animate-on-scroll" >Learn More</a>
            </div>
            
        </section>

        <section id="about" class="about-section">
            <article class="about-card animate-on-scroll">
                <h2>Our Story</h2>
                <p>
                The website was launched, and as the team members watched it go live, they realized that this was just the beginning of their journey. The web world was vast and full of new challenges, and they were ready for whatever came next.

Now, every user who visited their site would experience a piece of the adventure, from the interactive elements to the smooth layout—each page telling the story of how a team came together, faced challenges, and emerged victorious in the world of web development.
                </p>
            </article>

            <article class="about-card animate-on-scroll">
                <h2>Our Skills</h2>
                <ul class="skills-list">
                    <li class="skill-item"><span>HTML5</span><div class="skill-bar" data-percent="80"></div></li>
                    <li class="skill-item"><span>PHP</span><div class="skill-bar" data-percent="80"></div></li>
                    <li class="skill-item"><span>CSS</span><div class="skill-bar" data-percent="85"></div></li>
                    <li class="skill-item"><span>JavaScript</span><div class="skill-bar" data-percent="75"></div></li>
                    <li class="skill-item"><span>React</span><div class="skill-bar" data-percent="70"></div></li>
                    <!-- Add more skills as needed -->
                </ul>
            </article>

            <article class="about-card animate-on-scroll">
                <h2>Our Team</h2>
                 <div class="team-member">
                     <img src="d4ecfb19-7d8a-4908-a2d9-bb0658fe6817.JPG" alt="Team Member 1">
                     <h3>Jyot</h3>
                     <p>Devloper/Co-leader</p>
                 </div>
                 <div class="team-member">
                    <img src="PHOTO-2025-01-30-09-20-04.jpg" alt="Team Member 2">
                    <h3>Adit</h3>
                    <p>Devloper/Leader</p>
                </div>
            </article>
        </section>

        <section id="contact" class="contact-section">
            <h2>Contact Us</h2>
            <p class="animate-on-scroll">Get in touch!  We'd love to hear from you.</p>
            <form class="contact-form animate-on-scroll">
                <!-- Form fields here -->
                 <input type="text" name="name" placeholder="Your Name">
                 <input type="email" name="email" placeholder="Your Email">
                 <textarea name="message" placeholder="Your Message"></textarea>
                 <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 [Your Name/Company Name]. All rights reserved.</p>
    </footer>
    <script src="script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 

</body>
</html>