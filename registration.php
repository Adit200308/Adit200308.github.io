<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styleregistration.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="Library"></ion-icon>
        </a>
        <nav class="nav">
            <a href="#">Reviews</a>
            <a href="#">Contact Us</a>
        </nav>
    </header>

    <section class="home">
        <div class="registration">
            <h2>Register Here</h2>
            <form method= "post" action="registrationdb.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="fname" required>
                    <label>Enter Your Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id="email" name= "email" required>
                    <label>Enter Your Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id = "password" name="password" required>
                    <label>Enter Your Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id = "password" name="password" required>
                    <label>Confirm Your Password</label>
                </div>
                <button type="submit" value="SignIn" name="signin" class="btn">Register</button>
                <div class="login-link">
                    <p>Already a Member? <a href="index.php">Login Now</a></p>
                </div>
            </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styleregistration.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo">
            <ion-icon name="Library"></ion-icon>
        </a>
        <nav class="nav">
            <a href="aboutus.php">Contact Us</a>
        </nav>
    </header>

    <section class="home">
        <div class="registration">
            <h2>Register Here</h2>
            <form method="post" action="registrationdb.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" id="fname" name="fname" required>
                    <label for="fname">Enter Your Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" id="email" name="email" required>
                    <label for="email">Enter Your Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id="password" name="password" required>
                    <label for="password">Enter Your Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <label for="confirm_password">Confirm Your Password</label>
                </div>
                <button type="submit" value="SignIn" name="signup" class="btn">Register</button>
                <div class="login-link">
                    <p>Already a Member? <a href="index.php">Login Now</a></p>
                </div>
            </form>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        const form = document.querySelector('form');
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('confirm_password');

        form.addEventListener('submit', (e) => {
            if (password.value !== confirmPassword.value) {
                e.preventDefault();
                alert('Passwords do not match!');
            }
        });
    </script>
</body>
</html>

