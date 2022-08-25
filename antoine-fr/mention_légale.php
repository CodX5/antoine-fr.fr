<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="src/css/style1.css">
    <link rel="stylesheet" href="src/css/style2.css">
    <link rel="stylesheet" href="src/css/contact.css">
    <link rel="stylesheet" href="src/css/homepage.css">
    <link rel="stylesheet" href="src/css/counter.css">
    <link rel="stylesheet" href="src/css/mention.css">
    <link rel="stylesheet" href="src/css/navbar.css">
    <link rel="shortcut icon" href="src/img/logo.png">
    <title>Secrétariat Indépendant</title>
    <meta name="description" content="Secrétariat, secrétariat, secretariat, SECRETARIAT, aide à la perssonne, impôt, administratif, accueil, interimaire, interim, facture, courrier, ecrivain" >
    <meta name="keywords" content="Secrétariat, secrétariat, secretariat, SECRETARIAT, aide à la perssonne, impôt, administratif, accueil, interimaire, interim, facture, courrier, ecrivain" >
    <meta name="robots" content="noindex" />

  

</head>

<body>

  <!--Navbar-->
  <nav class="navbar navbar-light amber lighten-4 mb-4">
    <a class="navbar-brand" href="../"><img src="src/img/logo.png" style="width: 15%;height: 10%;"> Secrétariat Indépendant</a>
    <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent20"
      aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
      <div class="animated-icon1"><span style="background: #000000;"></span><span style="background: #000000;"></span><span style="background: #000000;"></span></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent20">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../" style="color: gray;">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mention_légale" style="color: black;">Mentions Légales</a>
        </li>
      </ul>
    </div>
  </nav>

    <br><br>
  <!-- Mention L'égales -->
    <div id="Mention_Légales" class="mention_légal">
        <div class="titre">
            <h1>Mentions Légales</h1>
        </div>
        <br><br><br>
        <p>Conformément aux dispositions des Articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 pour la
            Confiance dans l’économie numérique, dite L.C.E.N., il est porté à la connaissance des utilisateurs et
            visiteurs, ci-après l""Utilisateur", du site https://antoine-fr.fr , ci-après le "Site", les présentes mentions
            légales.
            La connexion et la navigation sur le Site par l’Utilisateur implique acceptation intégrale et sans réserve
            des présentes mentions légales.
            Ces dernières sont accessibles sur le Site à la rubrique « Mentions légales ».
        </p>
        <br>
        <h3>ARTICLE 1 - L'EDITEUR</h3>
        <br>
        <p>
            L’édition et la direction de la publication du Site est assurée par ANTOINE Priam. <br>
        </p>
        <br>
        <h3>ARTICLE 2 - L'HEBERGEUR</h3>
        <br>
        <p>
            L'hébergeur du Site est la société WebSpace, avec le numéro de téléphone : +33970 808 911 .
        </p>
        <br>
        <h3>ARTICLE 3 - ACCES AU SITE</h3>
        <p>
            Le Site est accessible en tout endroit, 7j/7, 24h/24 sauf cas de force majeure, interruption
            programmée ou non et pouvant découlant d’une nécessité de maintenance.
        </p>
        <br>
        <h3>ARTICLE 4 - COLLECTE DES DONNEES</h3>
        <br>
        <p>
            Le Site assure à l'Utilisateur une collecte et un traitement d'informations personnelles dans le respect
            de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers
            et aux libertés. <br>
            En vertu de la loi Informatique et Libertés, en date du 6 janvier 1978, l'Utilisateur dispose d'un droit
            d'accès, de rectification, de suppression et d'opposition de ses données personnelles. L'Utilisateur
            exerce ce droit : <br>
            · via un formulaire de contact ;<br>
            · via son espace personnel ;<br>
            Toute utilisation, reproduction, diffusion, commercialisation, modification de toute ou partie du Site,
            sans autorisation de l’Editeur est prohibée et pourra entraînée des actions et poursuites judiciaires
            telles que notamment prévues par le Code de la propriété intellectuelle et le Code civil.
        </p>
    </div>
    <br><br><br>

    <!--compteur de visite -->
    <?php require_once 'counter.php' ?>
    

    <span class="badge badge-dark" id="VISITEUR">Nombre de visiteurs : <?php echo $count; ?></span>
    <br>
</body>
</html>