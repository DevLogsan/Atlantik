<table border=1>
<thead>
  <tr>
    <th>N° de réservation</th>
    <th>Date réservation</th>
    <th>Départ</th>
    <th>Arrivée</th>
    <th>Date départ</th>
    <th>Total</th>
    <th>Payé</th>
  </tr>
</thead>
<tbody>
<?php
    foreach ($lesReservations as $uneReservation): 
        echo '<tr><td>'.$uneReservation->noreservation.'</td><td>'.$uneReservation->dateheure.'</td><td>'.$uneReservation->pD.'</td><td>'.$uneReservation->pA.'</td><td>'.$uneReservation->dateheuredepart.'</td><td>'.$uneReservation->montanttotal.'</td><td>';
        if($uneReservation->paye == 1)
        {
            echo 'Oui</td></tr>';
        }
        else
        {
            echo 'Non</td></tr>';
        }
    endforeach;
   echo $liensPagination;
?>
</tbody>
</table>