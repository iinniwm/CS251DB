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

<style>
    /* Style the Image Used to Trigger the Modal */
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (Image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image (Image Text) - Same Width as the Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation - Zoom in the Modal */
    .modal-content,
    #caption {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
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
</style>

<body>
    <!--navigation-------------->
    <nav>
        <!--logo--------------->
        <h1 class="logo">
            <img src="https://cdn.discordapp.com/attachments/821334010046840832/843141776117071922/LogoMakr-935qQ9.png" height="50px" width="50px" style="background-color: gray;"> MaF Cineplex
        </h1>
        <!----------------search------------------->
        <form action="search.php" method="post">
            <div class="search">
                <input type="text" name="keyword" placeholder="Search.." required /><label for="keyword">
                    <!--search-icon----------->
                    <button class="button" type="submit" name="search"></button>
            </div>
        </form>


        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>


        <!--menu-------------->
        <ul class="menu">

            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="index.php">Movie</a></li>
            <li><a id="myImg">Promotion</a></li>

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the image and insert it inside the modal - use its "alt" text as a caption
                var img = document.getElementById("myImg");
                var modalImg = document.getElementById("img01");
                var captionText = document.getElementById("caption");
                img.onclick = function() {
                    modal.style.display = "block";
                    modalImg.src = "https://cdn.discordapp.com/attachments/686248509543809217/843784006805225482/ad.jpg"
                    captionText.innerHTML = "Promotion";
                }

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }
            </script>


            <?php if (isset($_SESSION['c_email'])) : ?>
                <li><a href="profile.php"><img src="images/14102375_1141082999295433_3813039507700897638_n.jpg" alt="avatar" class="avatar"></a></li>
                <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
            <?php else : ?>
                <li><a href="login.php">Login</a></li>
            <?php endif ?>
        </ul>
    </nav>

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

    <section id="main">
        <!--showcase----------------------->
        <!--heading------------->
        <h1 class="showcase-heading">Showcase</h1>

        <ul id="autoWidth" class="cs-hidden">

            <!--box-1--------------------------->
            <li class="item-a">
                <!--showcase-box------------------->
                <div class="showcase-box">
                    <a href="godzila.php"><img src="images/s-1.jpg" /></a>
                </div>
            </li>
            <!--box-2--------------------------->
            <li class="item-b">
                <!--showcase-box------------------->
                <div class="showcase-box">
                    <a href="starwars.php"><img src="images/s-2.jpg" /></a>
                </div>
            </li>
            <!--box-3--------------------------->
            <li class="item-c">
                <!--showcase-box------------------->
                <div class="showcase-box">
                    <a href="beauty.php"><img src="images/s-3.jpg" /></a>
                </div>
            </li>
            <!--box-4--------------------------->
            <li class="item-d">
                <!--showcase-box------------------->
                <div class="showcase-box">
                    <a href="Ready.php"><img src="images/s-4.jpg" /></a>
                </div>
            </li>
            <!--box-5--------------------------->
            <li class="item-e">
                <!--showcase-box------------------->
                <div class="showcase-box">
                    <a href="madmax.php"><img src="images/s-5.png" /></a>
                </div>
            </li>
        </ul>

    </section>
    <!--latest-movies---------------------->
    <section id="latest">
        <h2 class="latest-heading">Latest Movies</h2>
        <!--slider------------------->
        <ul id="autoWidth2" class="cs-hidden">
            <!--slide-box-1------------------>
            <li class="item-a">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="kin.php"><img src="images/m-1.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Kin 2018</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!--slide-box-2------------------>
            <li class="item-b">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="peninsula.php"><img src="images/m-2.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Peninsula</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!--slide-box-3------------------>
            <li class="item-c">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="Inception.php"><img src="images/m-3.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Inception</strong>
                        <p>Action Movie,Sci-Fi</p>
                    </div>
                </div>
            </li>
            <!--slide-box-4------------------>
            <li class="item-d">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="IRONMAN3.php"><img src="images/m-4.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>IRONMAN 3</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!--slide-box-5------------------>
            <li class="item-e">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="VENOM.php"><img src="images/m-5.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>VENOM</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!--slide-box-6------------------>
            <li class="item-f">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="AQUAMAN.php"><img src="images/m-6.jpg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>AQUAMAN</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
            <!--slide-box-7------------------>
            <li class="item-g">
                <div class="latest-box">
                    <!--img-------->
                    <div class="latest-b-img">
                        <a href="Jungle cruise.php"><img src="images/m-7.jpeg" /></a>
                    </div>
                    <!--text---------->
                    <div class="latest-b-text">
                        <strong>Jungle cruise</strong>
                        <p>Action Movie</p>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!--movies---------------------------->
    <div class="movies-heading">
        <h2>Movies</h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="Intodarkness.php">
                <div class="movies-img">
                    <img src="images/l-1.jpg" />
                </div>
            </a>
            <!--text--------->
            <a href="Intodarkness.php">
                Star Trek:Intodarkness
            </a>
        </div>
        <!--box-2------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="fantastic.php">
                <div class="movies-img">
                    <img src="images/l-2.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="fantastic.php">
                Fantastic beasts and where to find them
            </a>
        </div>
        <!--box-3------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="croods.php">
                <div class="movies-img">
                    <img src="images/l-3.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="croods.php">
                les croods
            </a>
        </div>
        <!--box-4------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="toystory3.php">
                <div class="movies-img">
                    <img src="images/l-4.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="toystory3.php">
                Toy Story 3
            </a>
        </div>
        <!--box-5------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="coco.php">
                <div class="movies-img">
                    <img src="images/l-5.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="coco.php">
                coco
            </a>
        </div>
        <!--box-6------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="starwars.php">
                <div class="movies-img">

                    <img src="images/l-6.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="starwars.php">
                Tin
            </a>
        </div>
        <!--box-7------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="rogueone.php">
                <div class="movies-img">
                    <img src="images/l-7.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="rogueone.php">
                Rogueone
            </a>
        </div>
        <!--box-8------------------------>
        <div class="movies-box">
            <!--img------------>
            <a href="VENOM II.php">
                <div class="movies-img">
                    <img src="images/l-8.jpg">
                </div>
            </a>
            <!--text--------->
            <a href="VENOM II.php">
                VENOM II
            </a>
        </div>
    </section>


    <div class="adsufa191">
        <a href="https://scontent.fbkk22-3.fna.fbcdn.net/v/t1.18169-9/14102375_1141082999295433_3813039507700897638_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=ad2b24&_nc_ohc=jMgkK_u5SPQAX9f7KsT&_nc_ht=scontent.fbkk22-3.fna&oh=a3b9758456f0ae6f38f4d03dff2970c5&oe=60D5232C"><img src="images/ufa191.gif" alt="ufa191" srcset=""></a>
    </div>


    <!--footer------------------>
    <footer>
        <p>Copyright 2021 MAF Group.All right resevered</p>
    </footer>
</body>

<script>
    $(document).ready(function() {
        $('#autoWidth,#autoWidth2').lightSlider({
            autoWidth: true,
            loop: true,
            onSliderLoad: function() {
                $('#autoWidth,#autoWidth2').removeClass('cs-hidden');
            }
        });
    });
</script>

</html>