<?php
include_once 'contents/header.php';
include_once 'contents/menu.php';

// Détermine la page demandée
$page = $_GET['page'] ?? 'accueil';

// Charge la page correspondante
if (file_exists("pages/$page.php")) {
    include_once "pages/$page.php";
} else {
    echo "<p>Page introuvable.</p>";
}

include_once 'contents/footer.php';
?>