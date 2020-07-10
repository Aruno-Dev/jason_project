<?php

if(!empty($_POST['name'])){
    $newArgonaut = trim(htmlspecialchars($_POST['name']));
    Argonaut::addArgonaut($newArgonaut);
}elseif(empty($_POST['name'])){
    $message = 'Please fill in the form';
    header('location: home?message='. $message);
}

$argonauts = Argonaut::getAllArgonauts($db);