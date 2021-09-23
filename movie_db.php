<?php 
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_movie'])) {
        $m_Name = mysqli_real_escape_string($conn, $_POST['m_Name']);
        $m_Rate = mysqli_real_escape_string($conn, $_POST['m_Rate']);
        $m_Type = mysqli_real_escape_string($conn, $_POST['m_Type']);
        $m_Language = mysqli_real_escape_string($conn, $_POST['m_Language']);
        $m_Time = mysqli_real_escape_string($conn, $_POST['m_Time']);
        $m_System = mysqli_real_escape_string($conn, $_POST['m_System']);
        $image = $_FILES['fileToUpload']['name'];

        $target = "images/" . basename($image);

        $sql = "INSERT INTO movie (m_Name, m_Rate, m_Type, m_Language, m_Time, m_System, m_img) VALUES ('$m_Name', '$m_Rate', '$m_Type', '$m_Language', '$m_Time', '$m_System', '$image')";
        mysqli_query($conn,$sql);

        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

        header('location: movie.php');
        
    }else if(isset($_POST['reset_seat'])){

        $query = "UPDATE seat SET se_status = '1' WHERE 1";
        $result = mysqli_query($conn, $query);
    
        header('location: movie.php');
    }
?>