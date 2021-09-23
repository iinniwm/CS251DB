<?php
session_start();
include('server.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Godzilla: King of the Monsters</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script type="text/javascript" src="effect.js"></script>

</head>

<body>
	<div class="color-overlay">
		<video autoplay loop muted id=few>
			<source src="my2.mov" type="video/mp4">
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
				<h1>Godzilla: King of the Monsters</h1>
				<p>The members of Monarch, an crypto-zoological organisation, must rely on the Godzilla and Mothra to defeat King Ghidorah and Rodan, after the former awakens other dormant Titans to destroy the world.</p>
				<p>Cast :</p>
				<div class="casting">
					<img src="image-movie/c-6.jpeg" title="Millie Bobby Brown">
					<img src="image-movie/c-7.jpeg" title="Vera Farmiga">
					<img src="image-movie/c-8.jpeg" title="Kyle Chandler">
					<img src="image-movie/c-9.jpeg" title="Ken Watanabe">
					<img src="image-movie/c-10.jpeg" title="O'Shea Jackson Jr.">
				</div>
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
					<br><br><br><input type="checkbox" id="ve" name="m_ID" value="3" required>&nbsp;Please agree to confirm to buy tickets.
					<label for="ve"></label><br>

					<input type="submit" button class="button" name="buy_ticket" value="Book movie tickets"></button>
				</form>
			</div>
			<div class="col-md-6 text-center">
				<img src="image-movie/m-8.png" class="movie-img">
				<div class="overlay">
					<a href="https://www.youtube.com/watch?v=wVDtmouV9kM" class="icon" title="Play">
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
				<img src="image-movie/god1.png">
				<img src="image-movie/god2.png">
				<img src="image-movie/god3.png">
			</div>
		</div>

	</div>

</body>

</html>

<style>
	body {
		background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(image-movie/background1.png);
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