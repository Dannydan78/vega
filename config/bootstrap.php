<?php


    /**
     * -------------------------------------------------
     *        L'amorceur de l'application
     * 
     * 
     * Ses roles :
     *      - Charger les raccourcis (constantes)
     *      - Charger les variabkes d'environnement
     *      - Charger les configuration système 
     *      - Charger la configuration session
     *      - Charger le monolog
     * ----------------------------------------------------
     */

    // Chargement des constantes 
    require __DIR__ . "/constants.php";


   // Chargement des variables d'environnement 
  require __DIR__ . "/dotenv.php";

    
   // Chargement de la configuration système
   require __DIR__ . "/system.php";


   // Chargement de la configuration session
   require __DIR__ . "/session.php";


   // Chargement du monolog 
   require __DIR__ . "/monolog.php";