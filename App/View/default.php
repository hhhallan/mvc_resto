<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>3WA Restaurant</title>

    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/normalize-3.0.3.min.css">
    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/font-awesome-4.3.0.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps|Karla">

    <!-- Feuilles de styles de l'application -->
    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/3wa-resto.css">
    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/ui-button.css">
    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/ui-form.css">
    <link rel="stylesheet" href="/cours/NFactory/1BCI/mvc_base/Public/css/ui-table.css">

    <!-- Librairie jQuery -->
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <!-- JavaScript de l'application -->
    <script src="/cours/NFactory/1BCI/mvc_base/Public/js/utilities.js"></script>
    <script src="/cours/NFactory/1BCI/mvc_base/Public/js/classes/FormValidator.class.js"></script>
</head>
<body>

    <!-- En-tête commune -->
    <header>
        <h1>
            <a href="home">
                <img src="/cours/NFactory/1BCI/mvc_base/Public/images/logo.gif" height="63" width="57" alt="3WA Restaurant">Restaurant - Made In America !
            </a>
        </h1>
    </header>

    <!-- Interface utilisateur -->
    <nav class="user-interface">
        <ul class="link-list">
            <?php if(array_key_exists("user", $_SESSION)): ?>
                <li>
                    <a class="button button-primary" href="booking">Réserver</a>
                    <a class="button button-primary" href="order">Commander</a>
                </li>
                <li class="layout-right">
                    <p class="welcome">Bonjour <strong><?= $_SESSION["user"]->FirstName ?></strong> !</p>
                    <a class="button button-primary" href="logout">Déconnexion</a>
                </li>
            <?php else: ?>
                <li>
                    <a class="button button-primary" href="signup">Créer un compte</a>
                </li>
                <li class="layout-right">
                    <a class="button button-primary" href="login">Connexion</a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
    <main>
        <!-- Affichage du template lié à la vue -->
        <?= $content ?>
    </main>

    <!-- Pied de page commun -->
    <footer>
        <ul class="link-list">
            <li><img src="/cours/NFactory/1BCI/mvc_base/Public/images/payment/visa.png" alt="Visa"></li>
            <li><img src="/cours/NFactory/1BCI/mvc_base/Public/images/payment/mastercard.png" alt="MasterCard"></li>
            <li><img src="/cours/NFactory/1BCI/mvc_base/Public/images/payment/paypal.png" alt="PayPal"></li>
        </ul>
        
    </footer>

    <!-- Code principal JavaScript de l'application -->
    <script src="/cours/NFactory/1BCI/mvc_base/Public/js/main.js"></script>
</body>
</html>