<?php
// Crée une nouvelle instance de SoapClient pour communiquer avec le service SOAP spécifié par l'URL du WSDL
$client = new SoapClient("http://mds-api-ex1.test/treasureService.wsdl");

// Appelle la fonction 'trouverTresor' du service SOAP avec "Tom" comme argument
// et stocke le résultat retourné par le service
$result = $client->trouverTresor("Tom");

// Affiche la latitude et la longitude contenue dans le résultat
echo "Latitude: " . $result->latitude . "\n";
echo "Longitude: " . $result->longitude . "\n";
