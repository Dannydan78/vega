<?php

/**
     * -------------------------------------------------------------------
     *                        Bienvenue sur Vega
     * 
     * Ce fichier représente le contrôleur frontal
     * https://en.wikipedia.org/wiki/Front_controller
     * 
     * Ses rôles : 
     *      - Recevoir la requête du client
     *      - Amorcer l'application
     *      - Charger le noyau de l'application
     *      - Demander au noyau de traiter la requête du client
     *      - Récupérer la réponse correspondante
     *      - L'afficher au client
     * -------------------------------------------------------------------
     */


      // Réception de la rêquete du client
          // Toutes les données se trouve dans la variable superglobale $_SERVER


      // Amorçage de l'application (Charger les fichiers de configuration)
      require __DIR__ . "/../config/bootstrap.php";

    
