<!DOCTYPE html>
<html>
<head>
	<?php include('section/header-links.php'); ?>
	<title>Home</title>
</head>
<body>
	<section id="signInMain">
		<div class="container">
			<div class="row signInMain__logo">
				<div class="col-md-6 col-md-offset-3">
					<img src="img/logo.png" class="signInMain__logo--logo" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 signInMain__form">
					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="email" required placeholder="username">
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="pwd" required placeholder="password">
					  </div>
					  <button type="submit" class="signInMain__form--button">sign in</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>