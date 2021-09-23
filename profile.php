<?php
session_start();

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['c_email']);
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/c.css">
    <link rel="stylesheet" href="lightslider.css">
    <script src="js/JQuery3.3.1.js"></script>
    <script src="js/lightslider.js"></script>
    <title>Home</title>
</head>

<body>
    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <h1 class="logo">
            <img src="https://cdn.discordapp.com/attachments/821334010046840832/843141776117071922/LogoMakr-935qQ9.png" height="50px" width="50px" style="background-color: gray;"> MaF Cineplex
            <h1>
                <!--menu--btn----------------->
                <input type="checkbox" class="menu-btn" id="menu-btn" />
                <label class="menu-icon" for="menu-btn">
                    <span class="nav-icon"></span>
                </label>
                <!--menu-------------->
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="index.php">Movie</a></li>
                    <li><a href="#">Promotion</a></li>
                    <?php if (isset($_SESSION['c_email'])) : ?>
                        <li><a href="profile.php"><img src="images/14102375_1141082999295433_3813039507700897638_n.jpg" alt="avatar" class="avatar"></a></li>
                        <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                    <?php else : ?>
                        <li><a href="login.php">Login</a></li>
                    <?php endif ?>
                </ul>
    </nav>

    <div class="showcase-heading" style="margin-top: 130px; margin-left: 40px;">
        <h2>Welcome</h2>
    </div>
    <section id="movies-list">
        <div class="movies-box2" style="width:  1500px; height: 500px;">
            <div class="movies-proimg">
                <img src="images/14102375_1141082999295433_3813039507700897638_n.jpg" style="width:  250px; height: 350px; box-shadow: 5px 15px 30px rgba(253, 212, 99, 0.76); border-radius: 10px;" />
            </div>
            <div class="profile_info">
                <?php if (isset($_SESSION['c_email'])) : ?>

                    <p>Welcome <strong><?php echo $_SESSION['c_email']; ?></strong></p>
                    <?php
                    include('server.php');

                    $email = mysqli_real_escape_string($conn, $_SESSION['c_email']);

                    $query = "SELECT c_id, c_fname, c_lname, c_phone FROM customer WHERE c_email = '$email'";
                    $result = mysqli_query($conn, $query);

                    $row = mysqli_fetch_array($result)
                    
                    ?>
                    <?php echo "Member ID :" .$row["c_id"] ?> <br>
                    <?php echo "First Name :" .$row["c_fname"] ?><br>
                    <?php echo "Last Name :" .$row["c_lname"] ?> <br>
                    <?php echo "Phone :" . $row["c_phone"] ?><br>
                    <?php

                    mysqli_close($conn);
                    ?>

                <?php else : ?>
                    <p><a href="login.php">Login</a></p>
                <?php endif ?>
            </div>



        </div>
        </div>
    </section>

    <!-- notification message-->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>



</body>

</html>

</div>

</body>

</html>