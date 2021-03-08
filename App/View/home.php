<!-- Liste des produits alimentaires -->
<table class="generic-table meal-list">
    <caption>Carte du restaurant</caption>
    <tbody>
        <?php foreach($meals as $meal): ?>
            <tr>
                <td><img src="/cours/NFactory/1BCI/mvc_base/Public/images/meals/<?= $meal->Photo; ?>" style="max-width:240px"></td>
                <td>
                    <strong><?= $meal->Name; ?></strong>
                    <p><?= $meal->Description; ?></p>
                </td>
                <td class="number"><strong><?= number_format($meal->SalePrice, 2); ?></strong> €</td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>