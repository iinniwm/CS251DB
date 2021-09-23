<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['food'])){
        $fd_name = mysqli_real_escape_string($conn, $_POST['fd_name']);
        $fd_type = mysqli_real_escape_string($conn, $_POST['fd_type']);
        $fd_size = mysqli_real_escape_string($conn, $_POST['fd_size']);
        $fd_price = mysqli_real_escape_string($conn, $_POST['fd_price']);

        $sql = "INSERT INTO food_drink (fd_name, fd_type, fd_size, fd_price) VALUES ('$fd_name', '$fd_type', '$fd_size', '$fd_price')";
            mysqli_query($conn, $sql);

        header('location: food_drink.php');
    }
?>