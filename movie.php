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
            border-radius: 0px 0px 25px 25px;
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
    <title>Movie</title>
</head>

<body>
    <div class="header">
        <h2>Movie</h2>
    </div>
    <br><br>
    <form action="movie_db.php" method="post" enctype="multipart/form-data">
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
        <h3><br>
            <div class="input-group">

                <input type="text" name="m_Name" placeholder="Movie Name" size=50px required>
            </div><br>
            <div class="input-group">

                <select id="m_Rate" name="m_Rate" required style="width: 400px; height: 48px; border-radius: 8px;">
                    <option value="G">G</option>
                    <option value="PG">PG</option>
                    <option value="PG-13">PG-13</option>
                    <option value="R">R</option>
                    <option value="NC-17">NC-17</option>
                </select><br>

            </div> <br>
            <div class="input-group">

                <select id="m_Type" name="m_Type" required style="width: 400px; height: 48px; border-radius: 8px;">
                    <option value="Action">Action</option>
                    <option value="Fantacy">Fantacy</option>
                    <option value="Sci-Fi">Sci-Fi</option>
                    <option value="Comedies">Comedies</option>
                    <option value="Dramas">Dramas</option>
                    <option value="Cartoon">Cartoon</option>
                    <option value="Horror">Horror</option>
                </select><br>

            </div> <br>
            <div class="input-group">

                <input type="text" name="m_Language" placeholder="Language" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_Time" placeholder="Time" size=50px required>
            </div> <br>
            <div class="input-group">

                <input type="text" name="m_System" placeholder="System" size=50px required>
                <br><br>Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload" required>
            </div>
            <div class="input-group">
                <br><br>
                <button type="submit" name="reg_movie" class="btn">Submit</button>

                <?php if (isset($_SESSION['c_email'])) : ?>
                    <a href="index.php?logout='1'"><input type="button" class="btn" value="Logout"></button></a></li>
                <?php else : ?>
                    <a href="login.php"><input type="button" class="btn" value="Login"></button></a></li>
                <?php endif ?>

                <a href="food_drink.php"><input type="button" class="btn" value="Food&Drink"></button></a>
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