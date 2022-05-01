<?php
    if(empty($unSecteur))
    {
        echo $Erreur;
    }
    else
    {
    ?>
<div class="form-group col-md-4 ">
        <select id="inputState" class="form-control">
        <?php
    foreach ($unSecteur as $uneLiaison): 
        echo '<option>'.$uneLiaison->pD.' - '.$uneLiaison->pA.'</option>';
    endforeach
        ?>
        </select>
</div>
<?php
    }
?>