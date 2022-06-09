<?php

require "../liste_stagiaires.php";

function displayList($stagiaires) {
    foreach($stagiaires as $stg) {
        if ($stg["sexe"] == "M") {
            echo "Mr " . $stg["prenom"] . " " . strtoupper($stg["nom"]) . "<br>";
        }
        elseif ($stg["sexe"] == "F") {
            echo "Mme " . $stg["prenom"] . " " . strtoupper($stg["nom"]) . "<br>";
        }
    }
}

?>