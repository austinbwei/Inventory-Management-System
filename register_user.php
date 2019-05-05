<?php

include('dbconnection.php');

// Errors Array
//$errors = array();
// REGISTER USER
if (isset($_POST['signup1'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middleName']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
    $companyname = mysqli_real_escape_string($conn, $_POST['companyName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $re_pass = mysqli_real_escape_string($conn, $_POST['re_pass']);
    // FORM VALIDATION: ensure that the form is correctly filled and passwords match
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($firstname)) {
        array_push($errors, "First Name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }
    //   if ($pass != $re_pass) {
    //       array_push($errors, "The two passwords do not match");
    //   }
    // CHECK DATABASE FOR EXISTING USER
    $user_check_query = "SELECT * FROM Account WHERE userName='$username' OR email='$email' LIMIT 1";
    // $result = mysqli_query($conn, $user_check_query);
    $result = $conn->query($user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {
        if ($user['userName'] === $username) { // IF USERNAME EXISTS
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) { // IF EMAIL EXISTS
            array_push($errors, "Email already exists");
        }
    }
    // REGISTER USER IF NO ERRORS
    if (count($errors) == 0) {
        $pass = md5($re_pass); // encrypt the password before saving in the database
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstName']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middleName']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastName']);
        $companyname = mysqli_real_escape_string($conn, $_POST['companyName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        $re_pass = mysqli_real_escape_string($conn, $_POST['re_pass']);
        $sql = "INSERT INTO Account (userName, email, First, Middle, Last, companyName, password)
  			  VALUES('$username', '$email', '$firstname', '$middlename', '$lastname', '$companyname', '$pass')";
        $result = $conn->query($sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: login.php');
    }
}



?>