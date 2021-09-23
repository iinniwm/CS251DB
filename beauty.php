<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Beauty and the Beast</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script type="text/javascript" src="effect.js"></script>

</head>

<body>
    <div class="container-header">
        <a href="index.php" class="header-btn-nc"><i class="fa fa-home"></i>Home</a>
        <a href="#" class="header-btn-nc">&#127871; Promotion</a>
        <?php if (isset($_SESSION['c_email'])) : ?>
            <a href="profile.php" class="header-btn"><i class="fa fa-user"></i>Account</a>
        <?php else : ?>
            <a href="login.php" class="header-btn"><i class="fa fa-user"></i>Login</a>
        <?php endif ?>
    </div>
    <div class="container movie-detail">
        <div class="row">
            <div class="col-md-6 left-box">
                <h1>Beauty and the Beast</h1>
                <p>Belle, a village girl, embarks on a journey to save her father from a creature that has locked him in his dungeon. Eventually, she learns that the creature is an enchanted prince who has been cursed.</p>
                <p>Cast :</p>
                <div class="casting">
                    <img src="image-movie/c-11.jpeg" title="Emma Watson">
                    <img src="image-movie/c-12.jpeg" title="Dan Stevens">
                    <img src="image-movie/c-13.jpeg" title="Luke Evans">
                    <img src="image-movie/c-14.jpeg" title="Josh Gad">
                    <img src="image-movie/c-15.jpeg" title="Emma Thompson">
                </div>
                <a  style="cursor: no-drop;"><i class="fa fa-ticket" style="cursor: no-drop;"></i>Coming soon</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="image-movie/m-9.png" class="movie-img">
                <div class="overlay">
                    <a href="https://www.youtube.com/watch?v=OvW_L8sTu5E" class="icon" title="Play">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="container series">
            <h3>
                Coming soon...
            </h3>
            <div class="popular-movies">
                <img src="image-movie/dis1.png">
                <img src="image-movie/dis2.png">
                <img src="image-movie/dis3.png">
                <img src="image-movie/dis4.png">
                <img src="image-movie/dis5.png">
                <img src="image-movie/dis6.png">
            </div>
        </div>

    </div>

</body>

</html>

<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(image-movie/background2.png);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>