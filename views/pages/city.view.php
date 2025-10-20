<?php

/**
 * @var WorldCityModel $city
 */
?>
<?php if (empty($city)): ?>
    <p>No such id associated with a model</p>
<?php else: ?>
    <table>
        <tbody>
            <tr>
                <th>City Name:</th>
                <td><?= $city->city ?></td>
            </tr>
            <tr>
                <th>City Name (ascii):</th>
                <td><?= $city->cityAscii ?></td>
            </tr>
            <tr>
                <th>Country:</th>
                <td><?= $city->country ?></td>
            </tr>
            <tr>
                <th>ISO2 Code:</th>
                <td><?= $city->iso2 ?></td>
            </tr>
            <tr>
                <th>Population:</th>
                <td><?= $city->population ?></td>
            </tr>
        </tbody>
    </table>

<?php endif ?>