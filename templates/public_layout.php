<?php

require(HTML_DIR . 'head.php');
if (!empty($erreurs)) {
    require(HTML_DIR . 'erreur.php');
} else {
    require(HTML_DIR . 'header.php');
    echo $contenu;
    require(HTML_DIR . 'footer.php');
}

