<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bodymain">
    <header>
        <nav class="top-menu">
            <a href="index.php"><img src="img/BolasLogo.png" alt="Your Logo" class="logo"></a>
            <ul>
                <li><a href="/ice-creams">Ice Creams</a></li>
                <li><a href="/bakery">Bakery</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/promotions">Promotions</a></li>
                <li><a href="/about">About us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/order-online">Order Online</a></li>
                <li><a href="javascript:void(0);" id="loginBtn">Login</a></li>
                <a href="javascript:void(0);" id="registerBtn" class="register-button">Register</a>
            </ul>
        </nav>
    </header>
    <div id="loginPopup" class="popup">
        <div class="popup-content">
            <span class="close" id="closeLogin">&times;</span>
            <h2>Login</h2>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <div id="registerPopup" class="popup">
        <div class="popup-content">
            <span class="close" id="closeRegister">&times;</span>
            <h2>Register</h2>
            <form>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Your Ice Cream Shop. All rights reserved.</p>
    </footer>

</body>

</html>
