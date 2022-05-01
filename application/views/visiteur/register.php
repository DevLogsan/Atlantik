<h2 style="text-align: center;  color : white; margin: 0px">
  <?php echo $Titre ?>
</h2>

<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px;'>";

  echo form_open('Visiteur/register');
  echo form_label('Name : ','', array('style' => 'color: white; '));
  echo form_input(array('name' => 'txtNom', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Surname : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtPrenom', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Address : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtAdresse', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Postal code : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtCodePostal', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('City : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtVille', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));
  
  echo form_label('Home phone number : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtTelFixe', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Mobile phone number : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtTelMobile', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Mail : ','', array('style' => 'color: white;'));
  echo form_input(array('name' => 'txtMel', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Password : ','', array('style' => 'color: white;'));
  echo form_password(array('name' => 'txtMotDePasse', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo "<div style='padding-top: 10px;'>";
  echo form_submit(array('type' => 'submit', 'value' => 'Here we go !', 'style' => 'width: 100px; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));
  echo "</div>";
  
  echo form_close();
  echo  "</div>";
?>