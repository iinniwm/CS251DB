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
          height: 200px;
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
        .logoPos{            
            margin-bottom: 30px;
            background-position: center;
        }
        input[type=email]{
            width: 25%;
            padding: 12px 20px;                    
            box-sizing: border-box;
            border-radius: 12px;
        }
        input[type=password]{
            width: 25%;
            padding: 12px 20px;            
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
          margin-top: 20px;
          margin-left: 165px;
        }
        .font_color{
          color: white;
        }              
    </style>
    <title>Login</title>
</head>
<body>
  <form action="login_db.php" method="post">
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
        <div class="login">
          <div class="logoPos">
              <img src="https://cdn.discordapp.com/attachments/821334010046840832/843141776117071922/LogoMakr-935qQ9.png" height="190px" width="190px";>
          </div>
          <div class="posInput">
            <label for="email"> <input type="email" placeholder="Email" name="email" required></label><br><br>
            <label for="password"> <input type="password" placeholder="Password" name="password" required></label>
          </div>            
            <button class="button button2 posButt" name="login_user" type="submit">Login</button>
        </div> 
        <div class="register font_color">
        <p>Don't have an account?</p><a href="register.php"><input type="button" class="button button2" value="Register"></a>
        </div>               
      </section>
    </div>               
  </form>          
</body>
</html>