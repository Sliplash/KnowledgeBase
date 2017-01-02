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
<script>
    function newUser(str) {
        if(str="") {
            //document.getElementById("headNote").innerHTML="";
            return;
        }
        if(window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        } else { //code for IE6
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
            if(this.readyState==4 && this.status==200) {

            }
        }
        xmlhttp.open("GET", "newuser.php?q="+str, true);
    }
</script>
<!-- ## start PHP ## -->
<?php

function sendData() {
    if(isset($_POST['nameF'])) {
        $name = $_POST["nameF"];
    }

    if(isset($_POST['hiddenName'])) {
        $hName = $_POST['hiddenName'];
    }

    if(isset($name)) {
        echo $name;
    }

    if(isset($hName)) {
        echo $hName;
    }
}

?>


<!-- Create the container div -->
<div class="container-fluid">
    <!-- First row within container div -->
    <div class="row col-lg-12">
        <div onclick="openNav()" class="toggler col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2" id="toggle-div">
            <div class="icon" id="top-bar"></div>
            <div class="icon" id="mid-bar"></div>
            <div class="icon" id="bot-bar"></div>
        </div>
        <div class="jumbotron jumbotron-fluid col-lg-8" id="jumbotron">Infinite Corporation Knowledge Center</div>

        <a href="javascript:void(0)" onclick="openLogin()"><div class="col-lg-1 login-signup">Login</div></a>
        <a href="javascript:void(0)" onclick="openSignUp()"><div class="col-lg-1 login-signup">Register</div></a>
        <img class="jumbotron-image col-lg-8"src="images/infinite-logo.png" />
    </div>

    <!-- ## START Second row ## -->
    <div class="row row-2 col-lg-12">
        <form action="php/testphp.php" method="POST">
            <input type="text" placeholder="first name" value="testFirst" name="nameF">
            <input type="text" placeholder="hidden name" value="lastName" name="nameL">
            <input type="submit" value="Submit">
        </form>
    </div>
    <!-- ## END second row ## -->
    <!--
       - Code below this point is for elements that can be shown
       - or hidden by interacting with the page
       - and the footer
       -->

    <!-- ## BEGIN the sidebar nav ## -->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php"><div class="mini-link">Home</div></a>
        <a href="installs.html"><div class="mini-link">Installation Guides</div></a>
        <a href="#"><div class="mini-link">Database Guides</div></a>
        <a href="#"><div class="mini-link">Common Errors</div></a>
        <a href="php/phptest.php"><div class="mini-link">Downloads</div></a>
        <a href="request.html"><div class="mini-link">Request Content</div></a>
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
            <input class="register-button" id="reg-button" type="submit">
        </form>
        <div>

        </div>
    </div>
    <!-- ## END the sign-up form ## -->

    <!-- ## BEGIN the registration success header ## -->
    <div class="row overlay-3 embed-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="header" onclick="closeHeader()"></div>
    <div class="header headerDiv col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" onclick="closeHeader()">Please check your email for the final steps to configuring your account.</div>

    <!-- ## END the registration success header ## -->
</div>
<footer class="footer">&copy;Infinite Corporation 2016</footer>
</body>
</html>