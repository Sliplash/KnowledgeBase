/**
 * Created by Jeff on 11/7/2016.
 */



function openNav() {
    document.getElementById("mySidenav").style.width = "10vw";
    document.getElementById("main").style.marginLeft = "200px";
    document.getElementById("jumbotron").style.marginLeft = "250px";
    $('#toggle-div').hide();
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("jumbotron").style.marginLeft = "100px";
    $('#toggle-div').show();
}

function openLogin() {
    $('.overlay, .login-form').show();
}

function closeLogin() {
    $('.overlay, .login-form').hide();
    document.getElementById("loginEmail").value = "";
    document.getElementById("loginPass").value = "";
}

function openSignUp() {
    $('.overlay-2, .signup-form').show();
    $('.overlay, .login-form').hide();
    document.getElementById("loginEmail").value = "";
    document.getElementById("loginPass").value = "";
    document.getElementById("reg-button").disabled = true;
}

function closeSignUp() {
    $('.overlay-2, .signup-form').hide();
    document.getElementById("email1").value = "";
    document.getElementById("email2").value = "";
    document.getElementById("fName").value = "";
    document.getElementById("lName").value = "";
    document.getElementById("validEmailTag").innerHTML = "";
    document.getElementById("validTag1").style.background = "none";
    document.getElementById("validTag2").style.background = "none";
}

function submitLogin() {
    var userName, password;
    userName = document.getElementById("loginEmail").value;
    password = document.getElementById("loginPass").value;

    alert(userName + " " + password);
}

function validateEmail() {
    var email1 = document.getElementById("email1");
    var email2 = document.getElementById("email2");
    var email1Str = email1.value;
    var email2Str = email2.value;

    if(email1Str.indexOf("@infinitecorporation.com") > 0) {
        document.getElementById("validTag1").style.background = "url(images/valid.png) no-repeat right";

    }
    if(email2Str.indexOf("@infinitecorporation.com") > 0) {
        document.getElementById("validTag2").style.background = "url(images/valid.png) no-repeat right";
    }

    if(email1Str == email2Str && email1Str.indexOf("@infinitecorporation.com") > 0) {
        document.getElementById("validEmailTag").innerHTML = "Email is valid!";
    }
    else {
        document.getElementById("validEmailTag").innerHTML = "Invalid email.";
    }

}

function validate() {
    var email1 = document.getElementById("email1").value;
    var email2 = document.getElementById("email2").value;
    var email1Len = document.getElementById("email1").value.length;
    var email2Len = document.getElementById("email2").value.length;
    var fNameLen = document.getElementById("fName").value.length;
    var lNameLen = document.getElementById("lName").value.length;


    if(email1Len === email2Len && email1 == email2 && fNameLen > 1 && lNameLen > 1) {
        // Below line is used for debugging, so you can see values easily as they come through on keyup
        //alert("email1Len = " + email1Len + "\nemail2Len = " + email2Len + "\nemail1 = " + email1 + "\nemail2 = " + email2 + "\nfNameLen = " + fNameLen + "\nlNameLen = " + lNameLen);
        document.getElementById("reg-button").disabled = false;
    }
    else {
        document.getElementById("reg-button").disabled = true;
    }

}

var loginApp = angular.module('loginApp', []);
loginApp.controller('loginCtrl', function ($scope) {
    $scope.user = {
        email: "",
        verifyEmail: "",
        firstName: "",
        lastName: "",

        fullName: function() {
            var nameObj = $scope.user;

            return nameObj.firstName;
        }
    }
});

var signUpApp = angular.module('signUpApp', []);
signUpApp.controller('signUpCtrl', function ($scope) {
    $scope.signupUser = {
        email: "",
        verifyEmail: "",
        firstName: "",
        lastName: "",

        userName: function() {
            var nameObj = $scope.signupUser;

            return nameObj.firstName;
        }
    }
});






