<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Purple.png">
    <link rel="stylesheet" href="styleLog.css" type="text/css">

    <title>Login Page</title>
</head>
<body>
        <main>

            <div class="NavBar">
                <div class="NavBarContent">
                    <img src="Purple.png" alt="icon" style="height: 40px; width: 40px;">
                    <h2 style="margin-left: 2%;">PREDAWATCH</h2>
                    <a href="" id="NavList">HOME</a>
                    <a href="" id="NavList">SHOP</a>
                    <a href="" id="NavList">ABOUT US</a>
                    <a href="" id="NavList">CONTACT</a>
                </div>
            </div>

            <div id="HeadLog">
                <h2 id="HeadLogTitle">Login</h2>
                <h2 id="HeadLogText">Home > Login</h2>
            </div>

            <div class="LogRegForm">
                <div id="GForm">
                    <div id="FixedDiv2">
                        <h2 id="shifterText">No Account yet?</h2>
                        <a href="Register.php">
                            <button id="shifter2">Create a Account Now</button>
                        </a>
                    </div>

                    <div id="DivRegistration">
                        <div id="ConRegistration">
                            <h2 id="ConRegHeader">Create an Account</h2>
                            
                            
                        </div>
                    </div>

                    <form id="DivLogin">
                        <div id="ConLog">
                            <h2 id="ConLogHeader">Log in Account</h2>
                            <br>

                            <input type="text" id="username" placeholder="Enter Username" minlength="6" maxlength="12" required>
                            <br>
                            <br>

                            <input type="password" id="password" placeholder="Enter Password" minlength="6" maxlength="12" required>
                            <br>
                            <br>

                            <input type="checkbox" id="rememberme"><label for="rememberme">Remember Me</label><br>
                            <br>
                            <br>

                            <button type="submit" id="SubMe">LOGIN</button>
                            <br>
                            <br>

                            <a id="Forgot" href="">Forgot Password?</a>
                        </div>
                    </form>

                </div>
            </div>

            <div id="FootLog">
                
            </div>
        </main>

    <footer>

    </footer>

    <script src="script.js"></script>
</body>
</html>