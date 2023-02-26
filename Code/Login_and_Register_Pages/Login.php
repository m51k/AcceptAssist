<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcceptAssist - Login</title>
    <link rel="stylesheet" href="./Style/Login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body style="background-image: url(./Resources/university-westminster_web.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <div id="navBar" style="position: fixed; width: 100vw; margin-top: -9.3%;">
        <div id="navBarLi">
            <header id="navHeader">
                <!-- <div id="navLogoArea">
                    <img class="webLogo" src="./westminster-img.png" alt="Web page logo">
                </div> -->
                <nav id="naviNav">
                    <ul class="navLinks">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Explore</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div id="navLogoArea">
            <a href="#"><img class="webLogo" src="./Resources/westminster-img.png" alt="Web page logo"></a>
        </div>
    </div>

    <div id="logingPage">       <!-- Backgroung Picture in this div-->
        <div id="loginBox">     <!-- Login box area -->
            <div class="container">
                <div class="top_header">
                    <span>Have an account ? Let's login...</span>
                    <header>Login</header>
                </div>

                <form action="/Code/Register Page/Register.html">       <!-- Add action here -->
                    <div class="input_field">
                        <input type="text" name="username" class="input" placeholder="Username" required>
                        <i class="material-symbols-outlined">person</i>
                    </div>

                    <div class="input_field">
                        <input type="password" name="password" class="input" placeholder="Password" autocomplete="off" required>
                        <i class="material-symbols-outlined">key</i>

                    </div>
                    
                    <div class="TnC">
                        <input type="checkbox" name="check" id="check" required>
                        <label for="check"> I have read and agree with <a href="">terms & coditions</a></label>  <!-- Add terms and conditions -->
                    </div>

                    <div class="input_field">
                            <input type="submit" value="Login" class="submit">
                    </div>
                </form>

                <div class="bottom">
                    <div class="register">
                        <label> Don't have an account? <a href="/Code/Register Page/Register.html">Sign Up</a></label>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
</html>