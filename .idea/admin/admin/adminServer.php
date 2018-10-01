<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER


if (isset($_POST['login_admin'])) {
    $adminName = mysqli_real_escape_string($db, $_POST['adminName']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($adminName)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM adminLogin WHERE adminName='$adminName' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['adminName'] = $adminName;
            $_SESSION['success'] = "You are now logged in";
            header('location: dashboard.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>