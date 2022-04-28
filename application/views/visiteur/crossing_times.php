<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <p>SECTEURS</p>
            <?php
                foreach ($lesSecteurs as $unSecteur): 
                    echo '<li>'.anchor('visiteur/crossing_times_select/'.$unSecteur->nosecteur.'-'.$unSecteur->nom ,$unSecteur->nom).'</li>';
                endforeach
            ?>
        </ul>
    </nav>
</div>