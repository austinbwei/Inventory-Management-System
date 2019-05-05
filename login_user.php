<?php

include('dbconnection.php');

// Errors Array
//$errors = array();


// LOGIN STUFF
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    // if (count($errors) == 0) {
    // $password = md5($password);
    $sql = "SELECT * FROM Account WHERE userName='$username' AND password='$password'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: Dashboard.php');
    } else {
        array_push($errors, "Wrong username/password combination");
    }
}
$_SESSION['userName'] = $username;




?>