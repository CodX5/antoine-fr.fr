<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"CONTACT - antoine-fr.fr"<email-expediteur@example.org>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail et/ou téléphone de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';
    
		mail("angelique.cornil@gmail.com", "CONTACT - antoine-fr.fr", $message, $header);
		$msg="Votre message a bien été envoyé ! Vous aurez une réponse dans moins de 24H";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<!doctype html>
<html lang="fr">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Secrétariat, secrétariat, secretariat, SECRETARIAT, aide à la perssonne, impôt, administratif, accueil, interimaire, interim, facture, courrier, ecrivain" >
    <meta name="keywords" content="Secrétariat, secrétariat, secretariat, SECRETARIAT, aide à la perssonne, impôt, administratif, accueil, interimaire, interim, facture, courrier, ecrivain" >
    <meta name="robots" content="noindex" />

    <meta property="og:url" content="https://www.antoine-fr.fr">
    <meta property="og:title" content="Secrétariat Indépendant | antoine-fr">
    <meta property="og:description" content="En tant que secretaire free-lance, je traite vos dossiers administratifs avec rigueur et respect du secret professionnel, de manière ponctuelle ou régulière, sur site ou à distance. Laissez vous tenter par une collaboration efficace.">
    <meta property="og:image" content="https://www.antoine-fr.fr/src/img/logo.png">

    <meta name="twitter:card" content="https://www.antoine-fr.fr/src/img/banniere.jpg">
    <meta name="twitter:site" content="@_Cod57x_">
    <meta name="twitter:creator" content="@_Cod57x_">
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="src/js/navbar.js"></script>
    <script src="src/js/captcha.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> 
    <script src="https://www.google.com/recaptcha/api.js?render=6LeimewfAAAAAAp6topFgctIhnHCA-2YiHfQrRMa"></script>
    <!-- LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="src/css/style1.css">
    <link rel="stylesheet" href="src/css/contact.css">
    <link rel="stylesheet" href="src/css/homepage.css">
    <link rel="stylesheet" href="src/css/counter.css">
    <link rel="stylesheet" href="src/css/navbar.css">
    <link rel="shortcut icon" href="src/img/logo.png">

    <title>Secrétariat Indépendant</title>
</head>

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
          <a class="nav-link" href="../" style="color: black;">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mention_légale" style="color: gray;">Mentions Légales</a>
        </li>
      </ul>
    </div>
  </nav>

  <section id="PRESENTATION" class="container">
    <h2 class="title-2">Présentation</h2>
    <div class="cards">
      <div class="card">
        <img src="src/img/pdp.jpg" alt="dish-1" style="border-radius: 5%">
        <h3 class="title-3"> Ma présentation</h3>
        <p class="subtitle">En tant que secretaire free-lance, je traite vos dossiers administratifs avec rigueur et respect du secret professionnel, de manière ponctuelle ou régulière, sur site ou à distance. Laissez vous tenter par une collaboration efficace.</p>
      </div>
      <div class="card">
        <img src="src/img/bureau.jpg" alt="dish-2" style="border-radius: 5%">
        <h3 class="title-3">Dans quels cas faire appel à mes services ?</h3>
        <p class="subtitle">Votre secretaire est absente ou malade, à la retraite, trop occupé par vos activités, trop pris par votre travail pour gérer la paperasse personnelle, les tâches administratives vous rebutent ou vous dépassent. Déplacement chez le client <b>(10km au tour de Metz)</b>
         ou Prestation à distance.</p>
        </p>
      </div>
      <div class="card">
        <img src="src/img/créateur.jpg" alt="dish-3" style="border-radius: 5%">
        <h3 class="title-3">Créateur</h3>
        <p class="subtitle">Priam Antoine 14 ans créateur de ce site. <br> Son instagram : _.codx_ .</p>
      </div>
    </div>
  </section>

  <header class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6"></div>
      <br>
      <br>
    </div>

  </header>

    <br>
    <h3 style="text-align: center;" id="form-title">Alors n’hésitez pas à me contacter, nous définirons ensemble lors d’un rendez-vous vos besoins</h3>
		<br><br>
    <form method="POST" action="" id="CONTACT"> 
			<input class="form-control" type="text" id="test" name="nom" minlength="3" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" required /><br /><br />
			<input class="form-control" type="text" id="test"	name="mail" placeholder="Votre email et/ou Votre téléphone" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<textarea class="form-control" name="message" minlength="3" id="test" placeholder="Votre message" required><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
      <input class="form-control" type="submit" value="Envoyer" name="mailform"/>
		</form>

		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
    
    <br><br>

<!--compteur de visite -->
    <?php require_once 'counter.php' ?>
    <span class="badge badge-dark" id="VISITEUR">Nombre de visiteurs : <?php echo $count; ?></span>
</body>
</html>