<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .clearfix {
            clear: both;
        }

        .container {
            color: white;
            width: 1080px;
            height: 500px;
            margin: 0 auto;
        }

        header {
            color: white;
            text-align: left;
            width: 1080;
            height: 50px;
            background: #ffc600;
            margin: 0 auto;
        }

        section {
            margin-top: 20px;
            text-align: center;
            width: 1080px;
            height: 500px;
            background: #363636;
        }

        body {
            background: #464646;
        }

        .button2:hover {
            box-shadow: 0 12px 16px 0 rgb(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        .button {
            background-color: #ffc600;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            transition-duration: 0.4s;
            border-radius: 12px;
        }

        .info {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .imgPos {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <header>
    </header>

    <?php
    session_start();
    include('server.php');

    if (isset($_SESSION['c_email'])) : ?>

        <?php
        include('server.php');

        $email = mysqli_real_escape_string($conn, $_SESSION['c_email']);

        $query = "SELECT * FROM customer WHERE c_email = '$email'";
        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result);
        $movid = mysqli_real_escape_string($conn, $row['m_ID']);
        $seid = mysqli_real_escape_string($conn, $row['se_ID']);

        $query2 = "SELECT * FROM movie WHERE m_ID = '$movid' ";
        $result2 = mysqli_query($conn, $query2);

        $row2 = mysqli_fetch_array($result2);

        $query3 = "SELECT * FROM seat WHERE se_ID = '$seid' ";
        $result3 = mysqli_query($conn, $query3);

        $row3 = mysqli_fetch_array($result3);
        ?>
        
        <?php
        mysqli_close($conn);
        ?>

    <?php endif ?>


    <div class="container">
        <section>
            <div class="result">
                <div class="imgPos">
                    <br><br><br><br>
                    <img src="https://cdn.discordapp.com/attachments/686248509543809217/843809931462967346/qr.png">
                </div>
                <div class="info">
                    <h1 style="color:white"> Movie Name : <?php echo $row2['m_Name'] ?></h1>
                    <h2 style="color:white"> Seat No. : <?php echo $_SESSION['seat'] ?> </h2>
                    <h3 style="color:white"> Price : <?php echo $_SESSION['price'] ?> Bath</h3>
                </div>
            </div>
            <a href="index.php"><input type="submit" button class="button button2" name="" value="Done"></a>
        </section>
    </div>
</body>

</html>