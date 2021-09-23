<?php
session_start();
include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
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
            background: #464646;
        }

        header {
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
            background: #464646;
        }

        body {
            background-color: #464646;
        }

        .row {
            display: flex;
        }

        .pos {
            padding-right: 15px;
        }

        .booking {
            margin-left: 440px;
        }

        input[type=submit] {
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 12px;
            margin-left: -460px;
            margin-top: 25px;
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

        .button2:hover {
            box-shadow: 0 12px 16px 0 rgb(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"]+label {
            display: inline-block;
            background-color: white;
            height: 12px;
            width: 15px;
            margin: 3px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            cursor: pointer;
        }

        input[type="checkbox"]:checked+label {
            background-color: #ffc600;
        }

        input[type="checkbox"]:disabled+label {
            cursor: no-drop;
            background-color: gray;
        }

        .screen {
            background-color: #c7feff;
            height: 120px;
            width: 300px;
            margin: 15px 0;
            transform: rotateX(-80deg);
            box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
            margin-left: 380px;
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 100%;
        }
    </style>
</head>

<body>
    <header>
        <form action="se_seat_db.php" method="post">
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
    </header>
    <div class="container">
        <section>
            <br><br>
            <h1>Select Seat</h1>
            <div class="screen"></div>
            <div class="booking">
                <div class="row">
                    <h3>A&nbsp;&nbsp;&nbsp;</h3>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '1'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '1') : ?>
                        <div class="pos">
                            <input type="checkbox" id="A1" name="buy_seat[]" value="1">
                            <label for="A1"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="A1" name="buy_seat[]" value="1">
                            <label for="A1"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '2'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '2') : ?>
                        <div class="pos">
                            <input type="checkbox" id="A2" name="buy_seat[]" value="2">
                            <label for="A2"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="A2" name="buy_seat[]" value="2">
                            <label for="A2"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '3'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '3') : ?>
                        <div class="pos">
                            <input type="checkbox" id="A3" name="buy_seat[]" value="3">
                            <label for="A3"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="A3" name="buy_seat[]" value="3">
                            <label for="A3"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '4'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '4') : ?>
                        <div class="pos">
                            <input type="checkbox" id="A4" name="buy_seat[]" value="4">
                            <label for="A4"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="A4" name="buy_seat[]" value="4">
                            <label for="A4"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '5'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '5') : ?>
                        <div class="pos">
                            <input type="checkbox" id="A5" name="buy_seat[]" value="5">
                            <label for="A5"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="A5" name="buy_seat[]" value="5">
                            <label for="A5"></label>
                        </div>
                    <?php endif ?>
                </div>
                <div class="row">
                    <h3>B&nbsp;&nbsp;&nbsp;</h3>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '6'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '6') : ?>
                        <div class="pos">
                            <input type="checkbox" id="B1" name="buy_seat[]" value="6">
                            <label for="B1"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="B1" name="buy_seat[]" value="6">
                            <label for="B1"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '7'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '7') : ?>
                        <div class="pos">
                            <input type="checkbox" id="B2" name="buy_seat[]" value="7">
                            <label for="B2"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="B2" name="buy_seat[]" value="7">
                            <label for="B2"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '8'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '8') : ?>
                        <div class="pos">
                            <input type="checkbox" id="B3" name="buy_seat[]" value="8">
                            <label for="B3"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="B3" name="buy_seat[]" value="8">
                            <label for="B3"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '9'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '9') : ?>
                        <div class="pos">
                            <input type="checkbox" id="B4" name="buy_seat[]" value="9">
                            <label for="B4"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="B4" name="buy_seat[]" value="9">
                            <label for="B4"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '10'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '10') : ?>
                        <div class="pos">
                            <input type="checkbox" id="B5" name="buy_seat[]" value="10">
                            <label for="B5"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="B5" name="buy_seat[]" value="10">
                            <label for="B5"></label>
                        </div>
                    <?php endif ?>
                </div>
                <div class="row">
                    <h3>C&nbsp;&nbsp;&nbsp;</h3>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '11'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '11') : ?>
                        <div class="pos">
                            <input type="checkbox" id="C1" name="buy_seat[]" value="11">
                            <label for="C1"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="C1" name="buy_seat[]" value="11">
                            <label for="C1"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '12'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '12') : ?>
                        <div class="pos">
                            <input type="checkbox" id="C2" name="buy_seat[]" value="12">
                            <label for="C2"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="C2" name="buy_seat[]" value="12">
                            <label for="C2"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '13'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '13') : ?>
                        <div class="pos">
                            <input type="checkbox" id="C3" name="buy_seat[]" value="13">
                            <label for="C3"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="C3" name="buy_seat[]" value="13">
                            <label for="C3"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '14'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '14') : ?>
                        <div class="pos">
                            <input type="checkbox" id="C4" name="buy_seat[]" value="14">
                            <label for="C4"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="C4" name="buy_seat[]" value="14">
                            <label for="C4"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '15'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '15') : ?>
                        <div class="pos">
                            <input type="checkbox" id="C5" name="buy_seat[]" value="15">
                            <label for="C5"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="C5" name="buy_seat[]" value="15">
                            <label for="C5"></label>
                        </div>
                    <?php endif ?>
                </div>
                <div class="row">
                    <h3>D&nbsp;&nbsp;&nbsp;</h3>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '16'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '16') : ?>
                        <div class="pos">
                            <input type="checkbox" id="D1" name="buy_seat[]" value="16">
                            <label for="D1"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="D1" name="buy_seat[]" value="16">
                            <label for="D1"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '17'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '17') : ?>
                        <div class="pos">
                            <input type="checkbox" id="D2" name="buy_seat[]" value="17">
                            <label for="D2"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="D2" name="buy_seat[]" value="17">
                            <label for="D2"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '18'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '18') : ?>
                        <div class="pos">
                            <input type="checkbox" id="D3" name="buy_seat[]" value="18">
                            <label for="D3"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="D3" name="buy_seat[]" value="18">
                            <label for="D3"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '19'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '19') : ?>
                        <div class="pos">
                            <input type="checkbox" id="D4" name="buy_seat[]" value="19">
                            <label for="D4"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="D4" name="buy_seat[]" value="19">
                            <label for="D4"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '20'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '20') : ?>
                        <div class="pos">
                            <input type="checkbox" id="D5" name="buy_seat[]" value="20">
                            <label for="D5"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="D5" name="buy_seat[]" value="20">
                            <label for="D5"></label>
                        </div>
                    <?php endif ?>
                </div>
                <div class="row">
                    <h3>E&nbsp;&nbsp;&nbsp;</h3>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '21'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '21') : ?>
                        <div class="pos">
                            <input type="checkbox" id="E1" name="buy_seat[]" value="21">
                            <label for="E1"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="E1" name="buy_seat[]" value="21">
                            <label for="E1"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '22'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '22') : ?>
                        <div class="pos">
                            <input type="checkbox" id="E2" name="buy_seat[]" value="22">
                            <label for="E2"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="E2" name="buy_seat[]" value="22">
                            <label for="E2"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '23'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '23') : ?>
                        <div class="pos">
                            <input type="checkbox" id="E3" name="buy_seat[]" value="23">
                            <label for="E3"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="E3" name="buy_seat[]" value="23">
                            <label for="E3"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '24'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '24') : ?>
                        <div class="pos">
                            <input type="checkbox" id="E4" name="buy_seat[]" value="24">
                            <label for="E4"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="E4" name="buy_seat[]" value="24">
                            <label for="E4"></label>
                        </div>
                    <?php endif ?>
                    <?php $seatcheck = "SELECT * FROM seat WHERE se_ID = '25'";
                    $query = mysqli_query($conn, $seatcheck);
                    $result = mysqli_fetch_assoc($query);
                    if ($result['se_status'] === '1' && $result['se_ID'] === '25') : ?>
                        <div class="pos">
                            <input type="checkbox" id="E5" name="buy_seat[]" value="25">
                            <label for="E5"></label>
                        </div>
                    <?php else : ?>
                        <div class="pos">
                            <input type="checkbox" disabled id="E5" name="buy_seat[]" value="25">
                            <label for="E5"></label>
                        </div>
                    <?php endif ?>
                </div>
                <input type="submit" button class="button button2" value="submit" onclick="myFunction()"></button>

            </div>
        </section>
    </div>
    </form>
</body>

</html>
<script>
    function myFunction() {
        alert("Booked successfully!");
    }
</script>