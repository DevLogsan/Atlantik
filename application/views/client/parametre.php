<?php
  echo validation_errors();

  echo form_open('Client/parametre');
  echo form_label('Nom : ');
  echo form_input('txtNom', $nom, $class, $style);
  echo '<br>';
  echo form_label('Prénom : ');
  echo form_input('txtPrenom', $prenom, $class, $style);
  echo '<br>';
  echo form_label('Adresse : ');
  echo form_input('txtAdresse', $adresse);
  echo '<br>';
  echo form_label('Code postal : ');
  echo form_input('txtCodePostal', $codepostal);
  echo '<br>';
  echo form_label('Ville : ');
  echo form_input('txtVille', $ville);
  echo '<br>';
  echo form_label('Téléphone fixe : ', 'txtTelFix');
  echo form_input('txtTelFixe', $telephonefixe);
  echo '<br>';
  echo form_label('Téléphone mobile : ', 'txtTelMobile');
  echo form_input('txtTelMobile', $telephonemobile);
  echo '<br>';
  echo form_label('Téléphone Mel : ', 'txtMel');
  echo form_input('txtMel', $mel);
  echo '<br>';
  echo form_label('Mot de passe : ', 'txtMotDePasse');
  echo form_input('txtMotDePasse', $motdepasse);
  echo '<br>';
  echo form_submit('submit', 'Modifier');
  echo form_close();
?>
