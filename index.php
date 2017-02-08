<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infinite Knowledge Center</title>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body class="embed-responsive" id="main">

<!-- Create the container div -->
<div class="container-fluid">
    <!-- First row within container div -->
    <div class="row col-lg-12">

        <div onclick="openNav()" class="toggler col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="toggle-div">
            <div class="icon" id="top-bar"></div>
            <div class="icon" id="mid-bar"></div>
            <div class="icon" id="bot-bar"></div>
        </div>
        <img class="col-lg-8" src="images/ICKC.png" id="header-img"/>
        <!-- <div class="jumbotron jumbotron-fluid col-lg-8" id="jumbotron">Infinite Corporation Knowledge Center</div> -->

        <a href="javascript:void(0)" onclick="openLogin()"><div class="col-lg-1 login-signup">Login</div></a>
        <a href="javascript:void(0)" onclick="openSignUp()"><div class="col-lg-1 login-signup">Register</div></a>
    </div>

    <!-- Second row within container div -->
    <div class="row row-2 col-lg-12">
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 left-col">
            <h2 class="h2">About the Knowledge Base</h2>
            <p>This is the internal knowledge base for Infinite Corporation. Each member will be given permissions to modify and create new pages in certain topics based on their own position. This is intended to help new team members in acclimating to the environment and understanding what exactly Infinite does. In addition this internal site should be used as a resource for experienced team members to quickly retrieve answers to questions they may have.</p>
        </div>
        <!-- ## Begin spacer ## -->
        <div class="guide-spacer col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        </div>
        <!-- ## End spacer ## -->
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 right-col">
            <h2 class="h2">What's New</h2>
            <p>This is the home page for the Infinite Corporation Knowledge Center. Within you will be able to find training documents as well as technical walkthroughs of different areas of Infinite i.</p>
        </div>
    </div>

    <!-- Third row within container div -->
    <div class="row row-3 col-lg-12">
        <div class="left-col col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <h3 class="h3">Install Guides</h3>
            <a href="installs/win2k12-r2.html"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infinite-install-win">Installing Infinite i on Windows 2012 R2 with Update</div></a>
            <a href="#"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infinite-install-win">Installing Infinite i on Windows Server 2016</div></a>
        </div>
        <!-- ## Begin spacer ## -->
        <div class="guide-spacer col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        </div>
        <!-- ## End spacer ## -->
        <div class="right-col col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <h3 class="h3">Database Configuration Guides</h3>
            <a href="#"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infinite-install-win">Configuring Infinite i with SQL Server</div></a>
            <a href="#"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 infinite-install-win">Configuring Infinite i with Oracle 11g</div></a>
        </div>
    </div>

    <!-- Fourth row within container div -->
    <div class="row row-4 col-lg-12">
        <div class="left-col col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <h3 class="h3">Known Workarounds</h3>

        </div>
        <!-- ## Begin spacer ## -->
        <div class="guide-spacer col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        </div>
        <!-- ## End spacer ## -->
        <div class="right-col col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <h3 class="h3">Training Materials</h3>

        </div>
    </div>

<!--
   - Code below this point is for elements that can be shown
   - or hidden by interacting with the page
   - and the footer
   -->

    <!-- ## BEGIN the sidebar nav ## -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php"><div class="mini-link">Home</div></a>
        <a href="#"><div class="mini-link">Training Materials</div></a>
        <a href="installs.html"><div class="mini-link">Installation Guides</div></a>
        <a href="#"><div class="mini-link">Database Guides</div></a>
        <a href="#"><div class="mini-link">Known Workarounds</div></a>
        <a href="#"><div class="mini-link">Downloads</div></a>
        <a href="request.html"><div class="mini-link">Request Content</div></a>
        <img src="images/ICKC_Logo.png" class="nav-logo-image" />
    </div>
    <!-- ## END the sidebar nav ## -->

    <!-- ## BEGIN the login form and shading overlay ## -->
    <div class="overlay embed-responsive col-lg-12" onclick="closeLogin()"></div>
    <div id="loginForm" class="col-lg-12 login-form">
        <a href="javascript:void(0)" class="closebtn closelog" onclick="closeLogin()">&times;</a>
        <div class="loginData">
            <h6 class="loginHead">Login or <a href="javascript:void(0)" onclick="openSignUp()" class="signup">Sign Up</a></h6>
            <p id="validUser">Email: <input class="login-input" id="loginEmail" type="email" placeholder="Username" required></p>
            <p id="validPass">Password: <input class="login-input"  id="loginPass" type="password" placeholder="Password" required></p>
        </div>
        <div>
            <button class="login-button" id="login-button" type="submit" onclick="submitLogin()">Log In</button>
            <button class="signup-button" id="signup-button" type="button" onclick="openSignUp()">Register</button>
        </div>
    </div>
    <!-- ## END the login form ## -->

    <!-- ## BEGIN the registration form and shading overlay ## -->
    <div class="overlay-2 embed-responsive col-lg-12" onclick="closeSignUp()"></div>
    <div id="signUpForm" class="col-lg-12 signup-form">
    <a href="javascript:void(0)" class="closebtn closelog" onclick="closeSignUp()">&times;</a>
    <form class="signUpData" id="signUpDataID" method="POST" action="php/newuser.php">
        <h6 class="signUpHead">Register</h6>
        <p id="validTag1">Email: <input class="signup-input" type="email" id="email1" name="emailData" placeholder="Enter email" onkeyup="validate()" required></p>
        <p id="validTag2">Verify Email: <input class="signup-input"  type="email" id="email2" placeholder="Validate email" onkeyup="validateEmail();validate()" required></p>
        <p id="validEmailTag"></p>
        <p id="validFName">First Name: <input class="signup-input fName" type="text" id="fName" name="fNameData" placeholder="First" onfocus="clearValidTag()" onkeyup="validate()" required></p>
        <p id="validLName">Last Name: <input class="signup-input lName" type="text" id="lName" name="lNameData" placeholder="Last" onfocus="clearValidTag()" onkeyup="validate()" required></p>
        <input class="register-button" id="reg-button" type="submit" value="Submit" formtarget="phpTarget">
    </form>
        <div id="new-mem">
            <p>Please check your email to verify you have registered successfully.</p>
        </div>
    </div>
    <!-- ## END the sign-up form ## -->

    <!-- ## BEGIN the registration success header ## -->
    <div class="row overlay-3 embed-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" onclick="closeHeader()"></div>
    <div class="header headerDiv col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" onclick="closeHeader()" id="headNote"></div>
    <!-- ## END the registration success header ## -->

    <!-- ## START hidden iFrame for the PHP processing, ultimately this needs to be replaced with Javascript functions, but this is a workaround ## -->
    <iframe style="display:none;" name="phpTarget"></iframe>
    <!-- ## END hidden iFrame ## -->
</div>
<footer class="footer">&copy;Infinite Corporation 2017</footer>
</body>
</html>