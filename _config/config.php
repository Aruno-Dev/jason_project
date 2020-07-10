<?php

//ERROR DISPLAY - à enlever lors du deploiement
error_reporting(E_ALL);//on prends en compte toutes les erreur
ini_set('display_errors', true);//on les affiche true

//SESSIONS
ini_set('session.cookie_lifetime', false);//la session sera active tant que la page sera ouverte
session_start();//les erreurs avant les sessions et le session_start() après le ini_set() !important car sinon on obtient une erreur php



//PATHS
define("PATH_REQUIRE", substr($_SERVER['SCRIPT_FILENAME'], 0, -9));//pour les fonctions d'inclusion php : require - include
define("PATH", substr($_SERVER['PHP_SELF'], 0, -9));//pour les images, fichiers etc - attribut src par exemple


//WEBSIT INFORMATIONS
define("WEBSITE_TITLE", "The Argonauts");
define("WEBSITE_NAME", "The Argonauts");
define("WEBSITE_URL", "https://theargonauts.com");
define("WEBSITE_DESCRIPTION", "a sweet oddyssey");
define("WEBSITE_KEYWORDS", "");
define("WEBSITE_LANGUAGE", "");
define("WEBSITE_AUTHOR", "Arnaud TERRET");
define("WEBSITE_AUTHOR_MAIL", "arnaud.terret@gmail.com");


//FACEBOOK OPEN GRAPH TAGS
define("WEBSITE_FACEBOOK_NAME", "The Argonauts");
define("WEBSITE_FACEBOOK_DESCRIPTION", "");
define("WEBSITE_FACEBOOK_URL", "");
define("WEBSITE_FACEBOOK_IMAGE", "");

//DATABASE INFORMATIONS
define("DATABASE_HOST","localhost");
define("DATABASE_NAME", "jason_project");
define("DATABASE_USER", "root");
define("DATABASE_PASSWORD", "");