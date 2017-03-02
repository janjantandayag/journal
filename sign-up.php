<!DOCTYPE html>
<html>
<head>
	<?php include('section/header-links.php'); ?>
	<title>Home</title>
</head>
<body>
	<section id="signUpMain">
		<div class="container">
			<div class="row signUpMain__logo">
				<div class="col-md-6 col-md-offset-3">
					<img src="img/logo.png" class="signUpMain__logo--logo" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 signUpMain__form">
					<form>
					  <div class="form-group">
					    <input type="text" class="form-control" id="email" required placeholder="name">
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="pwd" required placeholder="username">
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="pwd" required placeholder="password">
					  </div>
					  <button type="submit" class="signUpMain__form--button">sign up</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>