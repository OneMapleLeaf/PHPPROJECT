<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Purple.png">
    <link rel="stylesheet" href="styleReg.css" type="text/css">

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
                <h2 id="HeadLogTitle">Register</h2>
                <h2 id="HeadLogText">Home > Register</h2>
            </div>

            <div class="LogRegForm">
                <div id="GForm">
                    <div id="FixedDiv">
                        <h2 id="shifterText">Why create an Account</h2>
                        <button id="shifter">LEARN MORE</button>
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

                    <div id="DivLogin">
                        <div id="ConLog">
                            <h2 id="ConLogHeader2">Why create an Account</h2>
                            <br>

                            <pre style="font-size: 16px;">
 1. Create an account to enjoy quick
    and easy checkouts every time you
    shop with us!

 2. Track all your orders in one place
    and stay updated on your delivery.

 3. Unlock personalized shopping
    recommendations tailored to your
    preferences.

 4. Receive exclusive access to special
    offers, flash sales, and early
    product releases.

 5. Save your favorite items in your
    account for a smoother shopping
    experience whenever you return!
                            </pre>
                            <p><b>Already have an Account?</b></p>
                            <a href="Login.php">
                            <button type="button" id="SubMe">LOGIN NOW</button>
                            </a>
                        </div>
                    </div>

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
