<table border="1" style="text-align: center">
<thead>
  <tr>
    <td rowspan="2">Secteur</td>
    <td colspan="4">Liaison</td>
  </tr>
  <tr>
    <td>Code Liaison</td>
    <td>Distance en milles marin</td>
    <td>Port de départ</td>
    <td>Port d'arrivée</td>
  </tr>
</thead>
<tbody>
<?php
$repetition = "";
foreach ($lesLiaisonsParSecteurs as $uneLigne) :
  if ($uneLigne->nom == $repetition )
  {
  echo '<tr><td></td><td>'. anchor('visiteur/link_price/'.$uneLigne->noliaison.'-'.$uneLigne->pD.'-'.$uneLigne->pA,$uneLigne->noliaison) .'</td><td>'. $uneLigne->distance .'</td><td>'. $uneLigne->pD .'</td><td>'. $uneLigne->pA .'</td></tr>';
  }
  else
  {
    echo '<tr><td>'. $uneLigne->nom .'</td><td>'. anchor('visiteur/link_price/'.$uneLigne->noliaison.'-'.$uneLigne->pD.'-'.$uneLigne->pA,$uneLigne->noliaison) .'</td><td>'. $uneLigne->distance .'</td><td>'. $uneLigne->pD .'</td><td>'. $uneLigne->pA .'</td></tr>';
  }
  $repetition = $uneLigne->nom;
endforeach
?>
</tbody>
</table>

