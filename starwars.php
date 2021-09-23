<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Star Wars: The Rise of Skywalker</title>
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
				<h1>Star Wars: The Rise of Skywalker</h1>
				<p>The revival of Emperor Palpatine resurrects the battle between the Resistance and the First Order while the Jedi's legendary conflict with the Sith Lord comes to a head.</p>
				<p>Cast :</p>
				<div class="casting">
					<img src="image-movie/c-1.jpg" title="Daisy Ridley">
					<img src="image-movie/c-2.jpg" title="John Boyega">
					<img src="image-movie/c-3.jpg" title="Oscar Isaac">
					<img src="image-movie/c-4.jpg" title="Adam Driver">
					<img src="image-movie/c-5.jpg" title="Keri Russell">
				</div>
				<a  style="cursor: no-drop;"><i class="fa fa-ticket" style="cursor: no-drop;"></i>Coming soon</a>
			</div>
			<div class="col-md-6 text-center">
				<img src="image-movie/m-1.png" class="movie-img">
				<div class="overlay">
					<a href="https://www.youtube.com/watch?v=8Qn_spdM5Zg" class="icon" title="Play">
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
				<img src="image-movie/star1.png">
				<img src="image-movie/star2.png">
				<img src="image-movie/star3.png">
				<img src="image-movie/star4.png">
				<img src="image-movie/star5.png">				
			</div>
		</div>
		
	</div>
	
</body>
</html>

<style>
	body
{
	background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(image-movie/background.png);
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>