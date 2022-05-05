<div style='position: absolute; left: 300px; top: 96px;'>
<?php
    if(empty($unSecteur))
    {
        echo '';
    }
    else
    {
    ?>
<?php
echo validation_errors();

echo form_open('visiteur/crossing_times/'.$noSecteur);

    $liaison = [];
    foreach ($unSecteur as $uneLiaison)
    {
       $liaison[$uneLiaison->noliaison] = $uneLiaison->pD.' - '.$uneLiaison->pA; 
    }

echo form_dropdown('lstLiaison', $liaison, 'default');
echo form_label("Date : ", 'lblDate');
echo form_input('txtDate', set_value('txtDate'));
echo form_submit('submit','rechercher');
echo form_close();
    }
?>
</div>