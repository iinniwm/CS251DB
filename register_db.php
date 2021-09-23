<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
        $birth = mysqli_real_escape_string($conn, $_POST['birth']);
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        if ($password_1 != $password_2){
            array_push($errors, "The two passwords do not match");
        }

        $user_check_query = "SELECT * FROM customer WHERE c_email = '$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){ // if user exists
            if ($result['c_email'] === $email){
                array_push($errors, "Email already exists");
            }

        }

        if (count($errors)==0){
            $password = md5($password_1);

            $sql = "INSERT INTO customer (c_email, c_password , c_fname , c_lname, c_birthday, c_sex, c_address, c_phone) VALUES ('$email', '$password', '$fname', '$lname', '$birth', '$sex' , '$address', '$phone')";
            mysqli_query($conn,$sql);

            $_SESSION['c_email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Username or Email already exists");
            $_SESSION['error'] = "Username or Email already exists";
            header("location: register.php");
        }

    }

?>