<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style2.css">

<div class="cd-user-modal">
	<div class="cd-user-modal-container">
		<ul class="cd-switcher">
			<li><a href="#0">Connexion</a></li>
			<li><a href="#0">Inscription</a></li>
		</ul>

		<div id="cd-login"> <!-- log in form -->
			<form class="cd-form">

				<div class="fb-login-button" style="width: 100% !important;" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>

				<p class="fieldset" style="margin-top: 10px;">
					<button class="full-width has-padding google" type="submit">Se connecter avec Google <img style="transform: translateY(25%);" src="images/google-logo.png"></button>
				</p>

				<p class="fieldset">
					<label class="image-replace cd-email" for="signin-email">E-mail</label>
					<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signin-password">Mot de passe</label>
					<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Mot de passe">
				</p>

				<p class="fieldset">
					<input type="checkbox" id="remember-me" checked>
					<label for="remember-me">Se souvenir de moi</label>
				</p>

				<p class="fieldset">
					<input class="full-width" type="submit" value="Se connecter">
				</p>
			</form>
			
			<p class="cd-form-bottom-message"><a href="#0">Mot de passe oublié?</a></p>
		</div> 

		<div id="cd-signup">
			<form class="cd-form">
				<p class="fieldset" style="margin-bottom: 10px;">
					<button class="full-width has-padding facebook" type="submit">S'inscrire avec Facebook <img style="transform: translateY(25%);" src="images/fb-logo.png"></button>
				</p>

				<p class="fieldset" style="margin-top: 10px;">
					<button class="full-width has-padding google" type="submit">S'inscrire avec Google <img style="transform: translateY(25%);" src="images/google-logo.png"></button>
				</p>

				<p class="fieldset">
					<label class="image-replace cd-username" for="signup-username">Pseudo</label>
					<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Pseudo">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-email" for="signup-email">E-mail</label>
					<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
				</p>

				<p class="fieldset">
					<label class="image-replace cd-password" for="signup-password">Mot de passe</label>
					<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Mot de passe">
				</p>

				<p class="fieldset">
					<input type="checkbox" id="accept-terms">
					<label for="accept-terms">J'accepte les <a href="#0">Conditions d'utilisations</a></label>
				</p>

				<p class="fieldset">
					<input class="full-width has-padding" type="submit" value="S'inscrire">
				</p>
			</form>

		</div>

		<div id="cd-reset-password">
			<p class="cd-form-message">Vous avez oublié votre mot de passe? Saisissez l'adresse de votre compte. Vous allez prochainement reçevoir un email de réinitialisation.</p>

			<form class="cd-form">
				<p class="fieldset">
					<label class="image-replace cd-email" for="reset-email">E-mail</label>
					<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
				</p>

				<p class="fieldset">
					<input class="full-width has-padding" type="submit" value="Réinitialiser">
				</p>
			</form>

			<p class="cd-form-bottom-message"><a href="#0">Retour</a></p>
		</div>
		<a href="#0" class="cd-close-form">Close</a>
	</div>
</div>

<script src="js/main.js"></script>