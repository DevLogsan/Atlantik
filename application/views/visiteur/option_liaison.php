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

echo validation_errors();
echo form_open('visiteur/crossing_times');
echo form_input('txtDate', set_value('txtDate'));
echo form_submit('submit','rechercher une date');
echo form_close();
} ?>