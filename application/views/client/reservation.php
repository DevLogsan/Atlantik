<h4>
<?php if($this->session->UtilisateurConnecter == 1) :
    foreach($laliaison as $uneliaison)
    {
        echo '<p>'. 'Liaison ' .$uneliaison->pD.' - '.$uneliaison->pA.'</p>';
        echo '<p>'. 'Traversée n°'.$uneliaison->notraversee. ' le '.$uneliaison->dateheuredepart = date("d:H:y", strtotime($uneliaison->dateheuredepart)). ' à '.$uneliaison->dateheuredepart = date("H:i", strtotime($uneliaison->dateheuredepart)) .'</p>';
        echo '<p>'. 'Saisir les informations relatives à la réservation'. '</p>';

        echo '<p>'. 'Nom : ' .$this->session->nom.'</p>';
        echo '<p>'. 'Adresse : ' .$this->session->adresse.'</p>';
        echo '<p>'. 'CP : ' .$this->session->codepostal.' Ville : '. $this->session->ville.'</p>';
    }
    ?>
    <table border=1 >
<thead>
  <tr>
    <th></th>
    <th>Tarif en €</th>
  </tr>
</thead>
<tbody>
    <?php
    foreach ($LesColonnes as $uneColonne) :
            echo '<tr><td>'.$uneColonne->libelle.'</td><td>'.$uneColonne->tarif.'</td></tr>';
    endforeach
    ?>
</tbody>
</table>
<?php endif; ?>
</h4>