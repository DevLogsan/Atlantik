<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px; padding-top: 50px'>";

  echo form_open('Visiteur/register');
  echo form_label('Name : ');
  echo form_input(array('name' => 'txtNom', 'class' => 'form-control input-sm'));

  echo form_label('Surname : ');
  echo form_input(array('name' => 'txtPrenom', 'class' => 'form-control input-sm'));

  echo form_label('Address : ');
  echo form_input(array('name' => 'txtAdresse', 'class' => 'form-control input-sm'));

  echo form_label('Postal code : ');
  echo form_input(array('name' => 'txtCodePostal', 'class' => 'form-control input-sm'));

  echo form_label('City : ');
  echo form_input(array('name' => 'txtVille', 'class' => 'form-control input-sm'));
  
  echo form_label('Home phone number : ', 'txtTelFix');
  echo form_input(array('name' => 'txtTelFixe', 'class' => 'form-control input-sm'));

  echo form_label('Mobile phone number : ', 'txtTelMobile');
  echo form_input(array('name' => 'txtTelMobile', 'class' => 'form-control input-sm'));

  echo form_label('Mail : ', 'txtMel');
  echo form_input(array('name' => 'txtMel', 'class' => 'form-control input-sm'));

  echo form_label('Password : ', 'txtMotDePasse');
  echo form_password(array('name' => 'txtMotDePasse', 'class' => 'form-control input-sm'));

  echo "<br>";
  echo form_submit(array('type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Here we go !'));

  echo form_close();
  echo  "</div>";
  echo  "</br>";
  echo  "</br>";
?>