<h2 style="text-align: center;  color : white; margin: 0px">
  <?php echo $TitreDeLaPage ?>
</h2>

<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px;'>";

  echo form_open('visiteur/login_up');
  echo form_label('Mail : ','', array('style' => 'color: white; '));
  echo form_input(array('name' => 'txtMel', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo form_label('Password : ','', array('style' => 'color: white; '));
  echo form_password(array('name' => 'txtMotDePasse', 'style' => 'width: 100%; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));

  echo "<div style='padding-top: 10px;'>";
  echo form_submit(array('type' => 'submit', 'value' => 'Login', 'style' => 'width: 100px; padding: 12px; resize: vertical; border-radius: 4px; border: 1px solid #ccc;'));
  echo "</div>";
  
  echo form_close();
  echo  "</div>";
  echo  "</br>";
  echo  "</br>";
?>