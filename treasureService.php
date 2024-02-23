<?php
// Définition de la fonction trouverTresor qui prend en paramètre le nom d'un pirate
function trouverTresor($nomPirate)
{
    // Si le nom du pirate est Tom, retourne les coordonnées du trésor
    if ($nomPirate == "Tom") {
        return ["latitude" => "49.41443607582678", "longitude" => "0.26471394055665776"];
    } else {
        // Pour tout autre nom, retourne des coordonnées par défaut indiquant une absence de trésor
        return ["latitude" => "0", "longitude" => "0"];
    }
}

// Crée un nouveau serveur SOAP en utilisant le fichier WSDL spécifié
$server = new SoapServer("http://mds-api-ex1.test/treasureService.wsdl");

// Ajoute la fonction trouverTresor au serveur SOAP, la rendant ainsi disponible comme une méthode de service web
$server->addFunction("trouverTresor");

// Démarre le gestionnaire de serveur pour écouter les requêtes SOAP et y répondre
$server->handle();
