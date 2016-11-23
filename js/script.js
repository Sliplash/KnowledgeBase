/**
 * Created by Jeff on 11/7/2016.
 */

function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    document.getElementById("jumbotron").style.marginLeft = "350px";
    $('#toggle-div').hide();
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("jumbotron").style.marginLeft = "100px";
    $('#toggle-div').show();
}