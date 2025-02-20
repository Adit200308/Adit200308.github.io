<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="" class="logo">
            <ion-icon name="Library"></ion-icon><td> </td>Wise Galaxy</a>
        <nav class="nav">
            <a href="aboutus.php">About Us</a>
        </nav>
    </header>

    <section class="home">
        <div class="content">
            <h2>Let's Dive Into The Ocean Of Kowledge</h2>
            <p>Welcome to WiseGalaxy , the ultimate online library where knowledge meets convenience! Dive into our extensive collection of eBooks and audiobooks. Whether you love reading for leisure or need resources for research, we’ve got you covered. Explore, read online, or purchase your favorite books with ease.Join us today and embark on a journey through the endless ocean of stories, knowledge, and inspiration!</p>
            <a href="#">Get Started</a>
        </div>

        <div class="login">
            <h2>Member Login</h2>
            <form method= "post" action="registrationdb.php">
                <div class="input-box">
                <span class="icon"><ion-icon name="mail-outline"></ion-icon>
                </span>
                    <input type="email" required>
                    <label>Enter your Email</label>
                </div>  
                <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                    <input type="password" id= "password" required>
                    <label>Enter your Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">
                    Remember Me!</label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" value= "SignUP" name="signup">Login</button>
                <div class="register-link">
                    <p>Not A Member?<a href="registration.php">Sign Up Now</a></p>
                </div>
            </form>
        </div>
    </section>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 
</body>
</html>