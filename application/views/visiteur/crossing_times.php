<div class="form-group col-md-4 ">
    <label for="inputState">Select bindings (Sélectionner la liaison)</label>
        <select id="inputState" class="form-control">
            <option>...</option>
        </select>
</div>
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <p>SECTEURS</p>
            <?php
                foreach ($lesSecteurs as $unSecteur): 
                    echo '<li>'.anchor('visiteur/crossing_times/'.$unSecteur->nosecteur, $unSecteur->nom).'</li>';
                endforeach
            ?>
        </ul>
    </nav>
</div>