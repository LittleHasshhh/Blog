<?php 
session_start();
//deconnexion

// unset detruit une variable preciser
// unset($_SESSION['user']);

// detruit toute les variable de la session
session_unset();

session_destroy();

header('Location: index.php')

?>