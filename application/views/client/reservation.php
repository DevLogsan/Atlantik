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
    <th>Quantité</th>
  </tr>
</thead>
<tbody>
    <?php
    $quantite = [];
    $i = 0;

    echo validation_errors();
    echo form_open('Client/ValiderReservation');

    foreach ($LesColonnes as $uneColonne) :
        echo '<tr><td>'.$uneColonne->libelle.'</td><td>'.$uneColonne->tarif.'</td><td>';
        echo form_input($quantite = ["name" => $i, "lettrecategorie" => $uneColonne->lettrecategorie, "notype" => $uneColonne->notype]);
        echo '</td></tr>';
        $i++;
    endforeach;
    ?>
</tbody>
</table>
<?php endif;
echo form_submit(array('type' => 'submit', 'value' => 'Confirm'));
echo form_close();
?>
</h4>