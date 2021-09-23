<?php 

    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }
    if(!str_contains($email, '$taff')){
        if(count($errors)==0){
            $password = md5($password);
            $query = "SELECT * FROM customer WHERE c_email = '$email' AND c_password = '$password' ";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result)==1){
                $_SESSION['c_email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            } else{
                array_push($errors, "Wrong Email/password combination");
                $_SESSION['error'] = "Wrong Email/password try again!!";
                header('location: login.php');
            }
        }
    }else{
        if(count($errors)==0){
            $password = md5($password);
            $query = "SELECT * FROM staff WHERE s_email = '$email' AND s_password = '$password' ";
            $result = mysqli_query($conn,$query);

            if (mysqli_num_rows($result)==1){
                $_SESSION['c_email'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: movie.php');
            } else{
                array_push($errors, "Wrong username/password combination");
                $_SESSION['error'] = "Wrong username/password try again!!";
                header('location: login.php');
            }
        }
    }

?>