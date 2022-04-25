<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Blog simple</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
<body> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="<?php echo site_url('visiteur/accueil') ?>">
            <img src="<?php echo img_url('bateau.png') ?>" alt="Logo" style="width:40px;">
        </a>
    <ul class="navbar-nav">
        <?php if ($this->session->UtilisateurConnecter == 1) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('client/parametre') ?>">Mon compte : <?php echo $this->session->nom,' '.$this->session->prenom ;?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('visiteur/seDeconnecter') ?>">Se déconnecter</a>
            </li>
        <?php if ($this->session->UtilisateurConnecter == 1) : ?>
            <a class="nav-link" href="<?php echo site_url('client/reserverTraversee') ?>">Réserver une traversée</a>
            <a class="nav-link" href="<?php echo site_url('client/historiqueReservation') ?>">Mes réservations</a>
        <?php endif; ?>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('visiteur/seConnecter') ?>">Se Connecter</a>
            </li>
        <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    Plus
                </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('visiteur/listerLesLiaisons') ?>">Lister les liaisons</a>
                <a class="dropdown-item" href="<?php echo site_url('visiteur/horairesDeTraversees') ?>">Horaires de traversées</a>
            </div>
        </li>
    </ul>
</nav>
<BR><BR><BR><BR><BR>