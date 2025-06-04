<?php
$siteTitle = "Exercice ROUTING";

function routing(): string {
    
    if(!isset($_GET)) {
        return "_homepage";
    }
    
    $route = $_GET['route'] ?? 'homepage';
    
    
    
    switch ($route) {
        case "about":
            return "_about";  
        case "contact":
            return "_contact";
        default:
            return "_homepage"; 
    }
}

$currentTemplate = routing();
require "templates/layout.phtml";
?>