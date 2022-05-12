<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Blog simple</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo css_url('style_navbar') ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo css_url('style_footer') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body> 
<div class="navbar">
    <a href="<?php echo site_url('visiteur/homepage') ?>"><i class="fa fa-fw fa-home"></i> Home</a>
    <?php if ($this->session->UtilisateurConnecter == 1) : ?>
        <a href="<?php echo site_url('client/parametre') ?>"><i class="fa fa-fw fa-user"></i> My account : <?php echo $this->session->nom,' '.$this->session->prenom ;?></a>
        <a href="<?php echo site_url('visiteur/logout') ?>">Logout</a>
        <a href="<?php echo site_url('client/old_reservation') ?>">My reservations (Mes réservations)</a>
    <?php else : ?>
        <a href="<?php echo site_url('visiteur/login_up') ?>">Se Connecter</a>
        <a href="<?php echo site_url('visiteur/register') ?>">Créer un compte</a>
    <?php endif; ?>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a class="dropdown-item" href="<?php echo site_url('visiteur/list_bindings') ?>">List bindings (Lister les liaisons)</a>
        <a class="dropdown-item" href="<?php echo site_url('visiteur/crossing_times') ?>">Crossing times (Horaires de traversées)</a>
    </div>
  </div> 
</div>
<br><br>