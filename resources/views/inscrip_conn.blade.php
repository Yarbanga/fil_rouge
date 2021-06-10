<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/64d58efce2.js"mous crossorign="anony"></script>
	<link rel="stylesheet" href="assets/css/style6.css">
	<link rel="stylesheet" href="https://icofont.com/icons">
	<link rel="stylesheet" href="icofont/iconfont.min.css">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>Connection et inscription</title>
</head>
<body>
	<div class="container">
		<div class="form-container">
			<div class="signin-signup">
				<form action="{{ route('login') }}" method="POST" class="sign-in-form">
					@csrf
					<h2 class="title">Se connecter</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="mail" name="email" placeholder="Email">
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Password">
					</div>
					<input type="submit" value="Se connecter" class="btn solid">
					<p class="social-text">Connectez-vous avec la plate-forme G-NOTES</p>
				</form>
				<form action="{{route('user.store')}}" method="POST" class="sign-up-form">
					@csrf
					<h2 class="title">S'inscrire</h2>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="name" placeholder="Nom">
					</div>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" name="prenoms" placeholder="Prénoms">
					</div>
					<div class="input-field">
						<i class="fas fa-print"></i>
						<input type="text" name="matricule" placeholder="Matricule">
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="text" name="email" placeholder="Email">
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Password">
					</div>
					<input type="submit" value="S'inscrire" class="btn solid">
					<p class="social-text">Inscrivez-vous a la plate-forme G-NOTES</p>
				</form>
			</div>
		</div>
        <div class="panels-container">
        	<div class="panel left-panel">
        		<div class="content">
        			<h3>Nouveau ici ?</h3>
        			<p>Bienvenue sur la plateform G-NOTES pour plus d'information veuillez vous connectez si vous etes déjà inscrit sinon veuillez-vous inscrit merci bien!!</p>
        			<button class="btn transparent" id="sign-up-btn">S'inscrire</button>
        		</div>
        		<img src="assets/img/im4.svg" class="image" alt="">
        	</div>
        	<div class="panel right-panel">
        		<div class="content">
        			<h3>Etes vous inscrit ?</h3>
        			<p>Si vous etes inscrire veuillez vous connectez ici via vos identifiants?</p>
        			<button class="btn transparent" id="sign-in-btn">Se connecter</button>
        		</div>
        		<img src="assets/img/im1.svg" class="image" alt="">
        	</div>
        </div>
	</div>
	<script src="assets/css/app.js"></script>
</body>
</html>