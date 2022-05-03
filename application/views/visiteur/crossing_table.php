<table border="1">
<thead>
    <tr>
        <td>N°</td>
        <td>Heure</td>
        <td>Bateau</td>
    </tr>
</thead>
<tbody>
    <?php
        foreach ($lesinfo as $uneInfo) :
            echo '<tr><td>'. $uneInfo->notraversee .'</td><td>'. $uneInfo->dateheuredepart .'</td><td>'. $uneInfo->nombateau .'</td></tr>';
        endforeach
    ?>
</tbody>
</table>