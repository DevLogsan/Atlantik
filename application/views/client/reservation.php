<h4>
<?php
    foreach($laliaison as $uneliaison)
    {
        echo '<p>'. 'Liaison ' .$uneliaison->pD.' - '.$uneliaison->pA.'</p>';
        echo '<p>'. 'Traversée n°'.$uneliaison->notraversee. ' le '.$uneliaison->dateheuredepart = date("d:H:y", strtotime($uneliaison->dateheuredepart)). ' à '.$uneliaison->dateheuredepart = date("H:i", strtotime($uneliaison->dateheuredepart)) .'</p>';
        echo '<p>'. 'Saisir les informations relatives à la réservation'. '</p>';
    }
    ?>
</h4>