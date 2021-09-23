<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 1080px;
            height: 500px;
            margin: 0 auto;
            background: #464646;
        }
        header{
          text-align: left;
          width: 1080px;
          height: 50px;
          background: #464646;
          margin: 0 auto;
        }
        section{
            margin-top: 20px;
            text-align: center;
            width: 1080px;
            height: 500px;
            background: #464646;
        }        
        body{
            background: #464646;
        }
        input[type=email]{
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 12px;
        }
        input[type=password]{
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 12px;
        }
        input[type=text]{
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 12px;
        }
        select{
            width: 25%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-radius: 12px;
        }
        .button2:hover{
            background-color: #bb9101;
		    color: white;
            box-shadow: 0 12px 16px 0 rgb(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }
        .button{
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
        .posButt{
            margin-left: 145px;
        }
        .posButt2{
            margin-left: 25px;
        }
        h1{
            color:white;
            text-align: center;
        }         
    </style>
    <title>Register</title>
</head>
<body>
    <form action="register_db.php" method="post">
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
        
        <header>
        </header>
        <div class="container">
        <section>
                <div class="Regis">
                <h1>Register</h1>
                <label for="email"><input type="email" placeholder="Email" name="email" required></label><br><br>
                <label for="password_1"><input type="password" placeholder="Password" name="password_1" required></label><br><br>
                <label for="password_2"><input type="password" placeholder="Confirm Password" name="password_2" required></label><br><br>
                <label for="fname"><input type="text" placeholder="First Name" name="fname" required></label><br><br>
                <label for="lname"><input type="text" placeholder="Last Name" name="lname" required></label><br><br>
                <label for="birth"><input type="text" placeholder="Birth Date(YY-MM-DD)" name="birth" required></label><br><br>
                <form>
                    <select id="sex" name="sex" required>
                        <option value="m">Male</option>
                        <option value="Fm">Female</option>
                        <option value="ot">Other</option>
                    </select><br><br>
                </form>
                <label for="address"><input type="text" placeholder="Address" name="address"></label><br><br>
                <laber for="phone"><input type="text" placeholder="Phone" name="phone" required></laber><br><br>
                <button class="button button2 posButt" name="reg_user" type="submit">Register</button><br><br>
                <p style="color: white;">Already a member? <a href="login.php"><input type="button" button class="button button2 posButt2" value="Sign in"></a></button></p> 
            </div>
        </section>
    </div>
    </form>    
</body>
</html>