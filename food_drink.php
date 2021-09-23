<?php
session_start();
include('server.php');

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['s_email']);
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        h2 {
            background-color: #ffc600;
            height: 100px;
            font-size: 100px;
            margin: auto;
            width: 50%;
            padding: 10px;
            border-radius: 25px;
            text-align: center;

        }

        .bott {
            background-color: red;
            height: 100px;
            margin: auto;
            width: 50%;
            padding: 10px;
            border-radius: 0px 0px 25px 25px ;
            text-align: center;

        }

        h3 {
            width: 50%;
            background-color: #ffc600;
            text-align: center;
            padding: 10px;
            margin: auto;
            height: 550px;
            border-radius: 25px 25px 0px 0px;
        }

        input[Type=text] {
            padding: 13px;
            border-radius: 12px;

        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add food and drink</title>
</head>

<body>
    <div class="header">
        <h2>Food&Drink</h2>
    </div>
    <br><br>
    <form action="food_drink_db.php" method="post">
        <!-- notification message-->
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <h3>
            <div class="input-group">
                <br>

                <input type="text" name="fd_name" placeholder="Food&Drink" size=50px required>
            </div><br>

            <div class="input-group">

                <input type="text" name="fd_type" placeholder="Food&Drink type" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="fd_size" placeholder="Food&Drink size" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="fd_price" placeholder="Food&Drink Price" size=50px required>
            </div>
            <br><br><br>
            <div class="input-group">
                <button type="submit" name="food" class="btn">Submit</button>
                <?php if (isset($_SESSION['c_email'])) : ?>
                    <a href="index.php?logout='1'"><input type="button" class="btn" value="Logout"></button></a></li>
                <?php else : ?>
                    <a href="login.php"><input type="button" class="btn" value="Login"></button></a></li>
                <?php endif ?>
                <a href="movie.php"><input type="button" class="btn" value="Movie"></button></a>
            </div>
        </h3>

    </form>
    <div class="bott">
        <form action="movie_db.php" method="post">
            <input type="checkbox" id="ve" name="status" value="1" required>&nbsp;Please agree to confirm to reset all seat.<label for="ve"><br>
                <input type="submit" class="btn" name="reset_seat" value="Reset Seat"></button>
        </form>
    </div>

    <body style='background-color:#464646'>

    </body>

</html>