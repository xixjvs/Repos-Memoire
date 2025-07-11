<!-- /*
* Template Name: TheChurch
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="fr">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="assets/paroisseFavicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Inter&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">

	<link rel="stylesheet" href="assets/fonts/icomoon/style.css">
	<link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="assets/css/tiny-slider.css">
	<link rel="stylesheet" href="assets/css/glightbox.min.css">
	<link rel="stylesheet" href="assets/css/aos.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">

	<!-- link register -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/registerStyle.css">

	<!-- link demande -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="assets/css/listesMesseStyle.css">

	<?php if(isset($_GET["page"]) && ($_GET["page"] == "demande" || $_GET["page"] == "demandesAdmin")): ?>

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

		<style>
			.highlight .ui-state-default
			{
				background: green!important;
				color: white!important;
			}
		</style>
	<?php endif; ?>

	<title>Ma Demande de Grâce &mdash; Paroisse Sainte Thérèse</title>
</head>
<body >

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav" style="background-color: #7d321be3;">
		<div class="container">
			<div class="site-navigation">
				<a href="?page=home" class="logo m-0 float-left" style="text-decoration: none;">Paroisse Sainte Therese<br><span>de Grand-Dakar</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
					<?php if(estAdmin()): ?>

						<?php if(isset($_SESSION["user"])): ?>
						<li class="has-children <?= isset($_GET['page']) && $_GET['page'] == 'profilAdmin'? 'active': ''?>">
							<a href="#"> <i class="fa fa-user"></i> <?= $_SESSION["user"]->prenom ?></a>
								<ul class="dropdown">
									<li><a href="?page=profilAdmin" style="text-decoration: none;">Profil</a></li>
									<li><a href="?page=deconnexion" style="text-decoration: none;">Deconnexion</a></li>
								</ul>
						</li>
						<?php endif;?>
						<li class=" <?= isset($_GET['page']) && $_GET['page'] == 'listesMessesAdmin'? 'active': ''?> "><a href="?page=listesMessesAdmin">Listes Messes</a></li>
						<li class="cta-button"><a href="?page=demandesGlobal">Les Demandes</a></li>
						<li class="cta-button"><a href="?page=listesMessesAdmin">Je fais ta demande</a></li>

						

					<?php else: ?>
					<li class=" <?= !isset($_GET['page'])|| (isset($_GET['page']) && $_GET['page'] =='home')? 'active':'' ?>"><a href="index.php">Accueil</a></li>

					<li class="has-children <?= isset($_GET['page']) && $_GET['page'] == 'homelies'? 'active': ''?>">
						<a href="?page=homelies">Homelies</a>
						<ul class="dropdown">
							<li><a href="sermons.html">Sermons</a></li>
							<li><a href="sermons-single.html">Sermons Single</a></li>
							<li class="has-children">
								<a href="#">Dropdown</a>
								<ul class="dropdown">
									<li><a href="#">Sub Menu One</a></li>
									<li><a href="#">Sub Menu Two</a></li>
									<li><a href="#">Sub Menu Three</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class=" <?= isset($_GET['page']) && $_GET['page'] == 'pretre'? 'active': ''?> " ><a href="?page=pretre">Nos Prêtres</a></li>
					<li class=" <?= isset($_GET['page']) && $_GET['page'] == 'annonces'? 'active': ''?> "><a href="?page=annonces">Annonces</a></li>
					<li class=" <?= isset($_GET['page']) && $_GET['page'] == 'contact'? 'active': ''?> "><a href="?page=contact">Contact</a></li>
					
				<?php if(isset($_SESSION["user"])): ?>
					<li class="has-children <?= isset($_GET['page']) && $_GET['page'] == 'profil'? 'active': ''?>">
						<a href="#"> <i class="fa fa-user"></i><?= $_SESSION["user"]->prenom ?></a>
							<ul class="dropdown">
								<li ><a href="?page=profil" style="text-decoration: none;">Profil</a></li>
								<li><a href="?page=deconnexion" style="text-decoration: none;">Deconnexion</a></li>
							</ul>
					</li>
					<li class="cta-button"><a href="?page=listesMesses">Faites votre demande</a></li>
					<?php else: ?>
					<li class="cta-button <?= isset($_GET['page']) && $_GET['page'] == 'contact'? 'active': ''?>"><a href="?page=register" style="color: #000000;">Inscription</a></li>
					<li class="cta-button <?= isset($_GET['page']) && $_GET['page'] == 'contact'? 'active': ''?>"><a href="?page=connexion" style="color: #000000;">Demander une messe</a></li>
					<?php endif;?>
					<?php endif;?>	
				</ul>

				

				<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

				
			</div>
		</div>
	</nav>