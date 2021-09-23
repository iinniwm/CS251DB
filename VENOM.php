<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>VENOM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script type="text/javascript" src="effect.js"></script>
</head>

<body>
	<div class="color-overlay">
		<video autoplay loop muted id=few>
			<source src="venom1.mov" type="video/mp4">
		</video>
	</div>
	<div class="col-md-6 header">
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
				<h1>VENOM</h1>
				<p>Venom is a 2018 American superhero film featuring the Marvel Comics character of the same name, produced by Columbia Pictures in association with Marvel and Tencent Pictures. Distributed by Sony Pictures Releasing, it is the first film in the Sony Pictures Universe of Marvel Characters.</p>
				<form action="se_movie_db.php" method="post">
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
					<br><br><br><input type="checkbox" id="ve" name="m_ID" value="1" required>&nbsp;Please agree to confirm to buy tickets.
					<label for="ve"></label><br>

					<input type="submit" button class="button" name="buy_ticket" value="Book movie tickets"></button>
				</form>
			</div>
			<div class="col-md-6 text-center">
				<img src="image-movie/m-16.png" class="movie-img">
				<div class="overlay">
					<a href="https://www.youtube.com/watch?v=u9Mv98Gr5pY" class="icon" title="Play">
						<i class="fa fa-play"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 series">
			<h3>
				Coming soon...
			</h3>
			<div class="popular-movies">
				<img src="image-movie/ve1.png">
				<img src="image-movie/ve2.png">
				<img src="image-movie/ve3.png">
			</div>
		</div>

	</div>

</body>

</html>

<style>
	body {
		background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(image-movie/background9.png);
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}

	.button {
		border-radius: 28px;
		background: none;
		color: white;
		border-color: white;
		padding: 8px 20px;
	}

	.header-btn {
		text-decoration: none;
		border-radius: 30px;
		padding: 7px 20px;
		float: right;
		margin-top: 15px;
		margin-right: -730px;
		color: #fff;
		background: #107afd;
		font-weight: 600;

	}
</style>