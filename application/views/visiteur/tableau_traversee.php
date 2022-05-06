<div style='position: absolute; left: 300px; top: 75px;'>
<h4>
    <?php
    foreach($laliaison as $uneliaison)
    {
        echo '<p>'.$uneliaison->pD.' - '.$uneliaison->pA.'</p>';
        echo '<p>'. 'Traversées pour le '. $date . '. Sélectionner la traversée souhaitée' . '</p>';
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
    if ($this->session->UtilisateurConnecter == 1) {
        foreach ($lesinfo as $uneInfo) :
            echo '<tr><td>'. anchor('client/reservation/'. $uneInfo->notraversee, $uneInfo->notraversee). '</td><td>'. $uneInfo->dateheuredepart = date("H:i", strtotime($uneInfo->dateheuredepart)) .'</td><td>'. $uneInfo->nombateau .'</td></tr>';
        endforeach;
    }
    else
    {
        foreach ($lesinfo as $uneInfo) :
            echo '<tr><td>'.$uneInfo->notraversee. '</td><td>'. $uneInfo->dateheuredepart = date("H:i", strtotime($uneInfo->dateheuredepart)) .'</td><td>'. $uneInfo->nombateau .'</td></tr>';
        endforeach;
    }
    ?>
</tbody>
</table>
</div>