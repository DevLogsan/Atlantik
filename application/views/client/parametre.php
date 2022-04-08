<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php
  echo validation_errors();

  echo form_open('Client/modifierParametre');

  echo form_label('Adresse','txtAdresse');
  echo form_input('txtAdresse', set_value('txtAdresse'));

  echo form_label('Code Postal','txtCodePostal');
  echo form_input('txtCodePostal', set_value('txtCodePostal'));  

  echo form_label('Ville','txtVille');
  echo form_password('txtVille', set_value('txtVille'));

  echo form_label('Téléphone fixe','txtTelephoneFixe');
  echo form_password('txtTelephoneFixe', set_value('txtTelephoneFixe'));

  echo form_label('Téléphone mobile','txtTelephoneMobile');
  echo form_password('txtTelephoneMobile', set_value('txtTelephoneMobile'));

  echo form_label('Mel','txtMel');
  echo form_password('txtMel', set_value('txtMel'));

  echo form_label('Mot de passe','txtMotDePasse');
  echo form_password('txtMotDePasse', set_value('txtMotDePasse'));

  echo form_submit('submit', 'Se connecter');
  
  echo form_close();
?>
</body>
</html>