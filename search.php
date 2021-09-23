<?php
session_start();
include('server.php');

$errors = array();

if (isset($_POST['search'])) {

    $keyword = "";
    $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

    $query = "SELECT * FROM movie WHERE m_Name LIKE '%" . $keyword . "%' OR m_Rate LIKE '%" . $keyword . "%' OR m_Type LIKE '%" . $keyword . "%' OR m_Language LIKE '%" . $keyword . "%' ";
    $result = mysqli_query($conn, $query);
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
    <title>Search</title>
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
            height: 1920px;
            margin: 0 auto;
            background: #464646;
        }

        header {
            text-align: left;
            width: 1080;
            height: 60px;
            background: #ffc600;
            margin: 0 auto;
        }

        body {
            background: #464646;
        }

        section {
            margin-top: 20px;
            text-align: center;
            background: #ffc600;
            color: white;
            text-shadow: 2px 2px 4px #000000;
            font-size: 18px;
        }

        footer {
            text-align: center;
            background: #ffc600;
            width: 1080px;
            height: 90px;
            margin: 10px auto;
        }

        .adsufa191 {
            margin-top: 20px;
        }

        .posIn {
            border: none;
            font-size: 17px;
            text-align: left;
            float: none;
            display: block;
            margin: 0;
            float: none;
            padding: 6px 30px;
            margin-right: 650px;
        }

        .button {
            background: url("images/searchicon.png");
            background-size: cover;
            padding: 10px 10px;
            color: none;
            border: none;
            cursor: pointer;
            transition-duration: 0.4s;
        }

        .search {
            width: 250px;
            height: 40px;
            background-color: rgba(245, 245, 245, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            padding: 0px 20px;
        }

        .search input {
            width: 100%;
            height: 30px;
            border: none;
            outline: none;
            background-color: transparent;
        }

        .picMov {
            width: 200px;
            display: flex;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            border-radius: 5px;
            flex-direction: column;
            margin-left: 100px;
            margin-top: 50px;
        }

        .info {
            margin-top: -280px;
            text-align: left;
            margin-left: 375px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <!--logo--------------->
            <h1 class="logo">
                <img src="https://cdn.discordapp.com/attachments/821334010046840832/843141776117071922/LogoMakr-935qQ9.png" height="50px" width="50px" style="background-color: gray;"> MaF Cineplex
            </h1>
            <!--menu--btn----------------->
            <input type="checkbox" class="menu-btn" id="menu-btn" />
            <label class="menu-icon" for="menu-btn">
                <span class="nav-icon"></span>
            </label>
            <!--menu-------------->
            <!----------------search------------------->
            <form action="search.php" method="post">
                <div class="search">
                    <input type="text" name="keyword" placeholder="Search.." required /><label for="keyword">
                        <!--search-icon----------->
                        <button class="button" type="submit" name="search"></button>
                </div>
            </form>
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
    </header>
    <div class="container">
        <section>
            <br>
            <h1>Search for <?php echo $keyword ?></h1>
            <br>
        </section>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <div class="picMov">
                <?php echo "<img src='images/" . $row['m_img'] . "'>" ?>
            </div>
            <div class="info">
                <h1><?php echo "Name : " . $row['m_Name'] ?></h1><br>
                <h1><?php echo "Type : " . $row['m_Type'] ?></h1><br>
                <h1><?php echo "Language : " . $row['m_Language'] ?></h1><br>
                <h1><?php echo "Rate : " . $row['m_Rate'] ?></h1><br>
            </div>
            <br><br><br><br><br><br><br><br>
        <?php } ?>



        <div class="adsufa191">
            <a href="https://www.facebook.com/profile.php?id=100010065976347"><img src="images/ufa191.gif" alt="ufa191" srcset=""></a>
        </div>

    </div>

</body>

</html>