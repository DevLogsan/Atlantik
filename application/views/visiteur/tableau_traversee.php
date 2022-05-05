<div style='position: absolute; left: 300px; top: 75px;'>
<h4>
    <?php
    foreach($laliaison as $uneliaison)
    {
        echo '<h4>'.$uneliaison->pD.' - '.$uneliaison->pA.'</h4>';
        echo '<h4>'. 'Traversées pour le '. $date . '. Sélectionner la traversée souhaitée' . '</h4>';
    }
    ?>
</h4>
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
            echo '<tr><td>'. anchor('client/reservation/'. $uneInfo->notraversee .'/'. $noliaison, $uneInfo->notraversee). '</td><td>'. $uneInfo->dateheuredepart = date("H:i", strtotime($uneInfo->dateheuredepart)) .'</td><td>'. $uneInfo->nombateau .'</td></tr>';
        endforeach
    ?>
</tbody>
</table>
</div>