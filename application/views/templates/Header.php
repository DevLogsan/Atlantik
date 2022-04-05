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
        <a class="navbar-brand" href="#">
            <img src="<?php echo img_url('bateau.png') ?>" alt="Logo" style="width:40px;">
        </a>
    <ul class="navbar-nav">
        <?php if ($this->session_id = 1) : ?>
            <li class="nav-item">
                <span class="navbar-text">
                    <?php echo 'Utilisateur : '.$UtilisateurRetourner->$Prenom;?>
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('visiteur/seDeconnecter') ?>">Se déconnecter</a>
            </li>
        <?php if ($this->session->statut==1) : ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Ajouter
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url('administrateur/ajouterUnArticle') ?>">Ajouter un article</a>
                </div>
            </li>
        <?php endif; ?>
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('visiteur/seConnecter') ?>">Se Connecter</a>
            </li>
        <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Lister
                </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo site_url('visiteur/listerLesArticles') ?>">Lister tous les Articles</a>
                <a class="dropdown-item" href="<?php echo site_url('visiteur/listerLesArticlesAvecPagination') ?>">Lister les Articles (par 3)</a>
            </div>
        </li>
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Chercher">
      <button class="btn btn-success" type="submit">Chercher</button>
    </form>
  </ul>
</nav>