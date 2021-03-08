<h2><i class="fa fa-lock"></i> Se connecter avec un compte utilisateur</h2>

<form class="generic-form" action="login" method="POST">

	<?php if($error): ?>
		<fieldset>
			<p>Une erreur est survenue:</p>
			<p><?= $error ?></p>
		</fieldset>
	<?php endif; ?>
	<fieldset>
		<legend>Informations d'authentification</legend>
		<ul>
			<li>
				<label for="email">E-mail :</label>
				<input id="email" type="text" name="Email" data-required data-name="E-mail" value="">
			</li>
			<li>
				<label for="password">Mot de passe :</label>
				<input id="password" type="password" name="Password" data-required data-name="Mot de passe">
			</li>
		</ul>
	</fieldset>

	<ul>
		<li>
			<input class="button button-primary" type="submit" value="Connexion">
			<a class="button button-cancel small" href="home">Annuler</a>
		</li>
	</ul>
</form>