<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/generalStyling.css">
    <link rel="stylesheet" href="../CSS/loginPageStyling.css">
    <link rel="stylesheet" href="../CSS/navigationBarStyling.css">
    <script src="../Javascript/loginPage.js" defer></script>
    <script type="module"> import { loadNavbar } from "../Javascript/navigationBar.js"
        loadNavbar("Home")
    </script>
</head>

<body>
    <header id="header">
        <div id="name-section">
            <img src="../Images/Rasha Fonudation Logo.png" alt="Image of the logo" id="nav-logo">
            <div id="name-logo">Sudan Visions</div>
        </div>
        <nav id="nav-bar">
            <div id="burger-menu">
                <img src="../Images/burger-bar.png" alt="Burger menu icon" id="burger-icon">
            </div>
        </nav>
    </header>

    <main>
        <h1>Sudan Visions</h1>

        <div id="login-selection">
            <button class="buttons toggled" id="sign-in-button"><span>Sign in</span></button>
            <button class="buttons" id="sign-up-button"><span>Sign up</span></button>
        </div>

        <form action="../Login/login.php" method="POST" id="login-form">
            <label for="email">Enter your email</label>
            <input type="text" name="email">
            <label for="password">Enter your password</label>
            <input type="text" name="password">
            <button class="buttons" id="login-submit-button"><span>Login</span></button>
        </form>

        <form action="../Login/login.php" method="POST" id="sign-up-form">
            <label for="sign-up-email">Enter your email</label>
            <input type="text" name="sign-up-email">
            <label for="sign-up-username">Enter your username</label>
            <input type="text" name="username">
            <label for="sign-up-password">Enter your password</label>
            <input type="text" name="sign-up-password">
            <label for="sign-up-password-repeat">Re-enter your password</label>
            <input type="text" name="sign-up-password-repeat">
            <button class="buttons" id="sign-up-submit-button"><span>Sign up</span></button>
        </form>
        
    </main>

</body>

</html>