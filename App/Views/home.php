<table class="generic-table meal-list">
    <caption>Carte du restaurant</caption>
    <tbody>
    <?php foreach($meals as $meal): ?>
        <tr>
            <td>
                <img src="../img/meals/coca.jpg" />
            </td>
            <td>
                <strong><?= $meal->Name ?></strong>
                </br>
                Mmmm, le Coca-Cola avec 10 morceaux de sucres et tout plein de caféine !
            </td>
            <td>
                <strong>3.00€</strong>
            </td>
        </tr>

        <?php endforeach ?>

    <?php var_dump($meals); ?>



</table>