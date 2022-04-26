<h2>
    <?php echo $TitreDeLaPage ?>
</h2>

<?php
  echo validation_errors();
  echo "<div style='padding-left: 300px; padding-right: 300px; padding-top: 50px'>";

  echo form_open('visiteur/login_up');
  echo form_label('Mail :','txtMel');
  echo form_input(array('name' => 'txtMel', 'class' => 'form-control input-sm'));

  echo form_label('Password :','txtMotDePasse');
  echo form_password(array('name' => 'txtMotDePasse', 'class' => 'form-control input-sm')); 

  echo "<br>";
  echo form_submit(array('type' => 'submit', 'class' => 'btn btn-success', 'value' => 'Login'));
  
  echo form_close();
  echo  "</div>";
  echo  "</br>";
  echo  "</br>";
?>