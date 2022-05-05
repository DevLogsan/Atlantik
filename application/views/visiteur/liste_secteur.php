<div position: absolute;>
    <nav>
        <ul>
            <p>SECTEURS</p>
            <?php
                foreach ($lesSecteurs as $unSecteur): 
                    echo '<li>'.anchor('visiteur/crossing_times/'.$unSecteur->nosecteur, $unSecteur->nom).'</li>';
                endforeach;
            ?>
        </ul>
    </nav>
</div>