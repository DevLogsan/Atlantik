<?php
  echo validation_errors();

  echo form_open('Client/parametre');
  echo form_label('Nom : ');
  echo form_input('txtNom', $nom, $class_input);

  echo form_label('Prénom : ');
  echo form_input('txtPrenom', $prenom, $class_input);

  echo form_label('Adresse : ');
  echo form_input('txtAdresse', $adresse, $class_input);

  echo form_label('Code postal : ');
  echo form_input('txtCodePostal', $codepostal, $class_input);

  echo form_label('Ville : ');
  echo form_input('txtVille', $ville, $class_input);
  
  echo form_label('Téléphone fixe : ', 'txtTelFix');
  echo form_input('txtTelFixe', $telephonefixe, $class_input);

  echo form_label('Téléphone mobile : ', 'txtTelMobile');
  echo form_input('txtTelMobile', $telephonemobile, $class_input);

  echo form_label('Téléphone Mel : ', 'txtMel');
  echo form_input('txtMel', $mel, $class_input);

  echo form_label('Mot de passe : ', 'txtMotDePasse');
  echo form_input('txtMotDePasse', $motdepasse, $class_input);

  echo "<br>";
  echo form_submit('submit', 'Modifier', $class_btn);

  echo form_close();
?>
