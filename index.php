    <?php 
	session_start();
	require_once("views/includes/mesFonctions.php");
	require_once("models/database.php");
	

	if(isset($_GET["page"])) 
	{
		switch($_GET["page"])
		{
			case 'connexion':
                require_once("controllers/loginController.php");
                break;

			case 'register':
				require_once("controllers/registerController.php");
				break;
			
			case 'deconnexion':
				require_once("controllers/logoutController.php");
				break;

			case 'demande':
				require_once("controllers/demandeController.php");
				break;

			case 'demandesAdmin':
				require_once("controllers/demandesAdminController.php");
				break;

			case 'demandesGlobal':
				require_once("controllers/demandesGlobalController.php");
				break;

			case 'homelies':
				require_once("controllers/homeliesController.php");
				break;

			case 'pretre':
				require_once("controllers/pretreController.php");
				break;

			case 'annonces':
				require_once("controllers/annoncesController.php");
				break;

			case 'contact':
				require_once("controllers/contactController.php");
				break;

			case 'profil':
				require_once("controllers/profilController.php");
				break;

			case 'profilAdmin':
				require_once("controllers/profilAdminController.php");
				break;

			case 'listesMesses':
				require_once("controllers/listesMessesController.php");
				break;

			case 'listesMessesAdmin':
				require_once("controllers/listesMessesAdminController.php");
				break;

			case 'demandesGlobal':
				require_once("controllers/demandesGlobalController.php");
				break;
			
			case 'infoListeMesses':
				require_once("controllers/infoListeMessesController.php");
				break;

            default:
                require_once("controllers/homeController.php");
                break;
		}
	}
	else
	{
		
		require_once("controllers/homeController.php");
	}


	
	?>



