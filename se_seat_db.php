<?php

session_start();
include('server.php');

$errors = array();



if (isset($_POST['buy_seat'])) {
    $user = mysqli_real_escape_string($conn, $_SESSION['c_email']);
    //print_r($_POST['buy_seat']); 
    //echo implode(',', $_POST['buy_seat']);

    $seat_count = count($_POST['buy_seat']);

    $se_name = '';
    $_SESSION['seat'] = '';

    for ($i = 0; $i < $seat_count; $i++) {
        if ($i == 0) {
            $seid = $_POST['buy_seat'][$i];
            $se_name .= '' . $_POST['buy_seat'][$i];
            $query = "UPDATE seat SET se_status = '0' WHERE se_ID = '$seid' ";
            $result = mysqli_query($conn, $query);
            $query = "UPDATE customer SET se_ID = '$se_name'  WHERE c_email = '$user' ";
            $result = mysqli_query($conn, $query);

            $query = "SELECT se_name FROM seat WHERE se_id = '$seid' ";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);

            $_SESSION['seat'] .= $row['se_name'];
        } else {
            $seid = $_POST['buy_seat'][$i];
            $se_name .= ',' . $_POST['buy_seat'][$i];
            $query = "UPDATE seat SET se_status = '0' WHERE se_ID = '$seid' ";
            $result = mysqli_query($conn, $query);
            $query = "UPDATE customer SET se_ID = '$se_name'  WHERE c_email = '$user' ";
            $result = mysqli_query($conn, $query);

            $query = "SELECT se_name FROM seat WHERE se_id = '$seid' ";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result);
            $_SESSION['seat'] .= "," . $row['se_name'];
        }
    }

    $_SESSION['price'] =  $seat_count * 150;


    // echo $_SESSION['price'];
    // echo $se_name;

    header('location: showinfo.php');
}
