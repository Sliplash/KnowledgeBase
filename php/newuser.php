<?php
$stmt = null;
$email = $fName = $lName = "";

/*
//This code is used to determine contents and type of data
var_dump($_POST['emailData']);
var_dump($_POST['fNameData']);
var_dump($_POST['lNameData']);
*/

if(isset($_POST['emailData'])) {
    $email = $_POST['emailData'];
}

if(isset($_POST['fNameData'])) {
    $fName = $_POST['fNameData'];
}

if(isset($_POST['lNameData'])) {
    $lName = $_POST['lNameData'];
}





/*
 * requires IP:Port, login, password, database name
 */
$conn = mysqli_connect("192.168.1.136:3306", "jeff", "Develop*123", "KnowledgeBase" );

//mysqli_select_db($conn, "KnowledgeBase") or die ("no database");

if(mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
    exit();
}

$stmt = $conn->stmt_init();

$stmt->prepare("INSERT INTO users (email, fName, lName) VALUES (?, ? , ?)");
$stmt->bind_param("sss", $email, $fName, $lName);
$stmt->execute();

mysqli_close($conn);


echo "<script> parent.window.document.getElementById('signUpDataID').style.display = 'none'; parent.window.document.getElementById('new-mem').style.display = 'block';  </script>";

// parent.window.location.reload(); alert('Please check your email!');


/*$sql =  "INSERT INTO users (email, fName, lName) VALUES (?, ?, ?)";

$retval = mysqli_query($conn, $sql);

if(!$retval) {
    die('Could not enter data: ' . mysqli_error($conn));
}
else {
    echo 'User added Successfully';
}*/

