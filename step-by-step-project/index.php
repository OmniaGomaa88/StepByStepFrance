<?php
// Démarrer la session
session_start();
// Récupérer la page depuis l'URL, ou "home" par défaut
$page = $_GET['page'] ?? 'home';

// Router vers la bonne vue
if ($page === 'login') {
    include 'views/login.php';
}
elseif ($page === 'dashboard') {
    include 'views/dashboard.php';
}
else {
    include 'views/home.php';
}