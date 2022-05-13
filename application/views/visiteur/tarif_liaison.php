<table>
<thead>
  <tr>
    <th colspan="3">
        <?php
        foreach($LesLiaisons as $uneLiaison):
        echo "Liaison : " .$uneLiaison->noLiaison. $uneLiaison->pD.' - '.$uneLiaison->pA;
        endforeach
        ?>
    </th>
  </tr>
</thead>
<tbody>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</tbody>
</table>