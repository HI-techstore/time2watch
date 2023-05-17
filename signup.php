<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include("includes/analytic.php"); ?>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire | Time2watch</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
	
         <?php include("includes/nav.php"); ?>
       
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Page d'inscription</h2>
                        <p>Bienvenue sur le site Time2watch </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>S'inscrire</h3>
                        <form method="POST">
						<?php if(isset($errorMsg)){ echo '<h5>'.$errorMsg.'</h5>'; } ?>
                            <div class="input__item">
                                <input type="text" placeholder="Pseudo"name="pseudo">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" placeholder="Nom" name="lastname">
                                <span class="icon_profile"></span>
                            </div>
							<div class="input__item">
                                <input type="text" placeholder="Prenom" name="firstname">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" placeholder="Mot de passe"name="password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">S'inscrire</button>
                        </form>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Vous avez déjà un compte?</h3>
                        <a href="login" class="primary-btn">Se connecter</a>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- Signup Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
    <div class="container"><p>Le site Timetowatch.net n'héberge aucun fichier vidéo, que ce soit pour du streaming ou du téléchargements. Celui-ci consiste en une indexation de liens vidéos sur différents hébergeurs publiques et connus.
		Aucun droit réservé </p>
	</div>
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <?php include("includes/footer.php"); ?>
      </div>
  </footer>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>