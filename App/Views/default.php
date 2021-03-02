<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C LE RESTO</title>
    <link rel="stylesheet" href="css/3wa-resto.css">
    <link rel="stylesheet" href="css/ui-button.css">
    <link rel="stylesheet" href="css/ui-form.css">
    <link rel="stylesheet" href="css/ui-table.css">

</head>

<body>
<header>
    <h1>
        <a href="/index.php">
            <img src="img/logo.png" height="63" width="57" alt="3WA Restaurant">Restaurant - Made In America !
        </a>
    </h1>
    <nav class="user-interface">
        <ul class="link-list">
            <?php if(isset($_SESSION[""])): ?>
                <li>
                    <a class="button button-primary" href="index.php?page=logout">Déconnexion</a>
                </li>

            <?php else: ?>

                <li>
                    <a class="button button-primary" href="index.php?page=registration">Créer un compte</a>
                </li>
                <li class="layout-right">
                    <a class="button button-primary" href="index.php?page=login">Connexion</a>
                </li>

            <?php endif; ?>
        </ul>
    </nav>
</header>

<main>
    <div class="container">
        <?= $content ?>
    </div>
</main>

<footer>
    <ul class="link-list">
        <li><img src="img/payment/visa.png" alt="Visa"></li>
        <li><img src="img/payment/mastercard.png" alt="MasterCard"></li>
        <li><img src="img/payment/paypal.png" alt="PayPal"></li>
    </ul>
</footer>
</body>

</html>
<!--<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resto</title>
</head>
<body>
<h1>coucou</h1>

<table>
    <thead>
        <tr>
            <th>photo</th>
            <th>nom</th>
            <th>desc</th>
            <th>prix</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <?php /*foreach ($meals as $meal): */?>
            <td><?/*= $meal->Photo */?></td>
            <td><?/*= $meal->Name */?></td>
            <td><?/*= $meal->Description */?></td>
            <td><?/*= $meal->QuantityInStock */?></td>
            <td><?/*= $meal->BuyPrice */?></td>
            <td><?/*= $meal->SalePrice */?></td>
        <?php /*endforeach; */?>
    </tr>
    </tbody>
</table>



</body>
</html>-->