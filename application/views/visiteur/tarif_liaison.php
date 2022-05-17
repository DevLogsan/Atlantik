<?php
    if(empty($lesLiaisons))
    {
        ?>
        <p>Il n'y a rien ici !</p>
        <?php
    }
    else
    {
    ?>

<table border=1>
<thead>
  <tr>
    <th colspan="6">
    <?php
        echo "Liaison : " .$lesLiaisons[0]->noliaison. " : " .$lesLiaisons[0]->pD.' - '.$lesLiaisons[0]->pA;
    ?>
    </th>
  </tr>
</thead>
<tbody>
  <tr>
    <td rowspan="2">Catégorie</td>
    <td rowspan="2">Type</td>
    <td colspan="4">Période</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <?php
$repetition = "";

foreach ($lesLiaisons as $uneLiaison) :
  if ($uneLiaison->tylettrecategorie == $repetition)
  {
  echo '';
  }
  else
  {
    echo '<tr><td>'. $uneLiaison->tylettrecategorie . $uneLiaison->clibelle.'</td><td>';
    echo $uneLiaison->clettre. $uneLiaison->notype.' - '. $uneLiaison->tylibelle.'<br>';
  }
  $repetition = $uneLiaison->tylettrecategorie;
endforeach
?>
</tbody>
</table>

<br>
<br>
<br>

<table border=1>
<?php
$repetition = "";
foreach ($lesLiaisons as $uneLiaison) :
  if ($uneLiaison->tylettrecategorie == $repetition)
  {
  echo '<tr><td></td></td><td>'. $uneLiaison->clettre. $uneLiaison->notype. ' ' .$uneLiaison->tylibelle. ' ' .$uneLiaison->datedebut. ' - '.$uneLiaison->datefin. ' ' . $uneLiaison->tarif.'</td></tr>';
  }
  else
  {
   echo '<tr><td>'.$uneLiaison->tylettrecategorie. ' ' . $uneLiaison->clibelle. '</td><td>'. $uneLiaison->clettre. $uneLiaison->notype. ' ' .$uneLiaison->tylibelle. ' ' .$uneLiaison->datedebut. ' - '.$uneLiaison->datefin. ' ' . $uneLiaison->tarif.'</td></tr>';
  }
  $repetition = $uneLiaison->tylettrecategorie;
  endforeach
?>
</table>
<?php } ?>