<?php

session_start();
include('server.php');

$errors = array();

if (isset($_POST['buy_ticket'])) {
    $mov = mysqli_real_escape_string($conn, $_POST['m_ID']);
    $user = mysqli_real_escape_string($conn,$_SESSION['c_email']);
}
if (count($errors) == 0) {
    $query = "UPDATE customer SET m_ID = '$mov'  WHERE c_email = '$user' ";
    $result = mysqli_query($conn, $query);

    header('location: se_seat.php');

    // if (mysqli_num_rows($result) == 1) {
    //     $_SESSION['c_email'] = $email;
    //     $_SESSION['success'] = "You are now logged in";
    //     header('location: index.php');
    // } else {
    //     array_push($errors, "Wrong Email/password combination");
    //     $_SESSION['error'] = "Wrong Email/password try again!!";
    //     header('location: login.php');
    // }
}
?>