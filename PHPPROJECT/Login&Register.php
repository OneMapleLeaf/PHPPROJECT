<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Purple.png">
    <link rel="stylesheet" href="style.css" type="text/css">

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
                <h2 id="HeadLogTitle">Login/Register</h2>
                <h2 id="HeadLogText">Home > Login/Register</h2>
            </div>

            <div class="LogRegForm">
                <div id="GForm">
                    <div id="FixedDiv">
                        <h2 id="shifterText">No Account yet?</h2>
                        <button id="shifter">Create a Account Now</button>
                    </div>

                    <form id="DivRegistration" action="" method="">
                        <div id="ConRegistration">
                            <h2 id="ConRegHeader">Create an Account</h2>

                            <label for="fname"><b>First Name:</b></label>
                            <input type="text" id="fname" placeholder="Enter First Name" minlength="6" maxlength="12" required>
                            <br>
                            <br>

                            <label for="lname"><b>Last Name:</b></label>
                            <input type="text" id="lname" placeholder="Enter Last Name" minlength="6" maxlength="12" required>
                            <br>
                            <br>

                            <label for="username"><b>Username:</b></label>
                            <input type="text" id="username" placeholder="Enter Username" minlength="6" maxlength="12" required>
                            <br>
                            <br>

                            <label for="email"><b>Email:</b></label>
                            <input type="email" id="email" placeholder="Enter Email" required>
                            <br>
                            <br>

                            <label for="password"><b>Password:</b></label>
                            <input type="password" id="password" placeholder="Enter Password" minlength="6" required>
                            <br>
                            <br>

                            <label for="usertype"><b>User Type:</b></label>
                            <br>

                            <select id="usertype">
                                <option value="Regular">Regular</option>
                                <option value="Admin">Admin</option>
                            </select>
                            <br>
                            <br>
                            <br>

                            <button type="submit" id="SubMe">REGISTER</button>
                            <br>
                        </div>
                    </form>

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