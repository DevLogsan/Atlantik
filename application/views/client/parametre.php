<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px; padding-top: 0px'>";
  echo form_open('Client/parametre');

  echo form_label('Name : ','', array('style' => 'color: white; '));
  echo form_input(array('name' => 'txtNom', 'value'=>$nom, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Surname : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtPrenom', 'value'=>$prenom, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Address : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtAdresse', 'value'=>$adresse, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Postal code : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtCodePostal', 'value'=>$codepostal, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('City : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtVille', 'value'=>$ville, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));
  
  echo form_label('Home phone number : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtTelFixe', 'value'=>$telephonefixe, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Mobile phone number : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtTelMobile', 'value'=>$telephonemobile, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Mail : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtMel', 'value'=>$mel, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Password : ','', array('style' => 'color: white;'));
  echo form_password(array('name' => 'txtMotDePasse', 'value'=>$motdepasse, 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo "<div style='padding-top: 10px;'>";
  echo form_submit(array('type' => 'submit', 'value' => 'Confirm', 'style' => 'width: 100px; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));
  echo "</div>";

  echo form_close();
  echo  "</div>";
?>