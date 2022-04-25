<?php
  echo validation_errors();

  echo form_open('Client/modifierParametre');
  echo form_label('Nom : ', 'txtNom');
  echo form_input('txtNom', set_value('txtNom'));
  echo '<br>';
  echo form_label('Prénom : ', 'txtPrenom');
  echo form_input('txtPrenom', set_value('txtPrenom'));
  echo '<br>';
  echo form_label('Adresse : ', 'txtAdresse');
  echo form_input('txtAdresse', set_value('txtAdresse'));
  echo '<br>';
  echo form_label('Code postal : ', 'txtCodePostal');
  echo form_input('txtCodePostal', set_value('txtCodePostal'));
  echo '<br>';
  echo form_label('Ville : ', 'txtVille');
  echo form_input('txtVille', set_value('txtVille'));
  echo '<br>';
  echo form_label('Téléphone fixe : ', 'txtTelFix');
  echo form_input('txtTelFix', set_value('txtTelFix'));
  echo '<br>';
  echo form_label('Téléphone mobile : ', 'txtTelMobile');
  echo form_input('txtTelMobile', set_value('txtTelMobile'));
  echo '<br>';
  echo form_label('Téléphone Mel : ', 'txtMel');
  echo form_input('txtMel', set_value('txtMel'));
  echo '<br>';
  echo form_label('Mot de passe : ', 'txtMotDePasse');
  echo form_input('txtMotDePasse', set_value('txtMotDePasse'));
  echo '<br>';
  echo form_submit('submit', 'Modifier');
  echo form_close();
?>