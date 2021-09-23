<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ready Player One</title>
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
				<h1>Ready Player One</h1>
				<p>James Halliday designs a virtual reality and hides the keys to his fortune in it for a worthy player to find after his death. Wade, a teenager, sets out on a quest to find the keys and the fortune.</p>
				<p>Cast :</p>
				<div class="casting">
					<img src="image-movie/c-16.jpeg" title="Olivia Cooke">
					<img src="image-movie/c-17.jpeg" title="Tye Sheridan">
					<img src="image-movie/c-18.jpeg" title="Ben Mendelsohn">
					<img src="image-movie/c-19.jpeg" title="T.J. Miller">
					<img src="image-movie/c-20.jpeg" title="Lena Waithe">
				</div>
				<a  style="cursor: no-drop;"><i class="fa fa-ticket" style="cursor: no-drop;"></i>Coming soon</a>
			</div>
			<div class="col-md-6 text-center">
				<img src="image-movie/m-10.png" class="movie-img">
				<div class="overlay">
					<a href="https://www.youtube.com/watch?v=cSp1dM2Vj48" class="icon" title="Play">
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
				<img src="image-movie/ga1.png">
				<img src="image-movie/ga2.png">
				<img src="image-movie/ga3.png">
				<img src="image-movie/ga4.png">				
			</div>
		</div>
		
	</div>
	
</body>
</html>

<style>
	body
{
	background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url(image-movie/background3.png);
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>