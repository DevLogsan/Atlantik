<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px; padding-top: 50px'>";
  echo form_open('Client/parametre');
  echo form_label('Nom : ');
  echo form_input(array('name' => 'txtNom','value'=>$nom, 'class' => 'form-control input-sm'));

  echo form_label('Prénom : ');
  echo form_input(array('name' => 'txtPrenom','value'=>$prenom, 'class' => 'form-control input-sm'));

  echo form_label('Adresse : ');
  echo form_input(array('name' => 'txtAdresse','value'=>$adresse, 'class' => 'form-control input-sm'));

  echo form_label('Code postal : ');
  echo form_input(array('name' => 'txtCodePostal','value'=>$codepostal, 'class' => 'form-control input-sm'));

  echo form_label('Ville : ');
  echo form_input(array('name' => 'txtVille','value'=>$ville, 'class' => 'form-control input-sm'));
  
  echo form_label('Téléphone fixe : ', 'txtTelFix');
  echo form_input(array('name' => 'txtTelFixe','value'=>$telephonefixe, 'class' => 'form-control input-sm'));

  echo form_label('Téléphone mobile : ', 'txtTelMobile');
  echo form_input(array('name' => 'txtTelMobile','value'=>$telephonemobile, 'class' => 'form-control input-sm'));

  echo form_label('Mel : ', 'txtMel');
  echo form_input(array('name' => 'txtMel','value'=>$mel, 'class' => 'form-control input-sm'));

  echo form_label('Mot de passe : ', 'txtMotDePasse');
  echo form_password(array('name' => 'txtMotDePasse','value'=>$motdepasse, 'class' => 'form-control input-sm'));

  echo "<br>";
  echo form_submit(array('type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Modifier'));

  echo form_close();
  echo  "</div>";
  echo  "</br>";
  echo  "</br>";
?>