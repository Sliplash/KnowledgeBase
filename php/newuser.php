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
}

$stmt = $conn->stmt_init();

$stmt->prepare("INSERT INTO users (email, fName, lName) VALUES (?, ? , ?)");
$stmt->bind_param("sss", $email, $fName, $lName);
$stmt->execute();

mysqli_close($conn);

$message = "Welcome to the Infinite Knowledge Base, $fName! You are now able to browse, edit, and request new pages be created.";
$message = wordwrap($message, 70, "\r\n");

mail($email, 'Infinite Knowledge Base Registration', $message);


echo "<script>
        parent.window.document.getElementById('signUpDataID').style.display = 'none'; 
        parent.window.document.getElementById('new-mem').style.display = 'block';
        parent.window.document.getElementById('signUpForm').style.height = '6vw';
      </script>";
