<?php
    if(empty($unSecteur))
    {
        echo $Erreur;
    }
    else
    {
    ?>

<div>
<?php
echo validation_errors();

echo form_open('visiteur/crossing_times/'.$noSecteur);

    $data = [];
    foreach ($unSecteur as $uneLiaison)
    {
       $data[$uneLiaison->noliaison] = $uneLiaison->pD.' - '.$uneLiaison->pA; 
    }

echo form_dropdown('lstLiaison', $data, 'default');
echo form_label("Date : ", 'lblDate');
echo form_input('txtDate', set_value('txtDate'));
echo form_submit('submit','rechercher');
echo form_close();
    }
?>
</div>