<?php

if (!isset($_GET['page'])) {
    $_GET['page'] = 'home';
}

require_once 'partials/header.php';


if ($_GET['page'] == 'about') {
    require_once 'pages/about.php';
} elseif ($_GET['page'] == 'service') {
    require_once 'pages/service.php';
} elseif ($_GET['page'] == 'gallery') {
    require_once 'pages/gallery.php';
}  elseif ($_GET['page'] == 'contact') {
    require_once 'pages/contact.php';
}else {
    require_once 'pages/home.php';
}

require_once 'partials/footer.php';

// --------------------------------------------------------------------

/* Pour lancer la compilation scss
sass --watch assets/scss/main.scss assets/css/main.css

-- Pour stopper la compilation scss
Press Ctrl-C to stop.
*/

// --------------------------------------------------------------------

/* Commandes Git

git status
git add *           -> ajouter les fichier modifié avantr le commit
git commit -m "mon message de commit"

git log             -> permet de voir tous les commit
*/