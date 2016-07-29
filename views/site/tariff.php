
<div align="center">
    <h1>Тарифы</h1>
<table class="table_blur" style="font-size: 300%">
    <tr>
        <th>Пакет</th>
        <th>Скорость</th>
        <th>Цена(руб./мес.)</th>
    </tr>
    <?php foreach($tariffs as $tariff): ?>
        <tr>
            <td><?= $tariff->name; ?></td>
            <td><?php $tariff->speed === '' ? print('') : print('до '.$tariff->speed.' M/bit'); ?></td>
            <td><?= $tariff->price; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</div>
