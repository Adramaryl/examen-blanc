<?php

require "../liste_stagiaires.php";

function detailList($stagiaires) {
    $id = 2;
    if (!isset($_GET)) {
        echo "Veuillez fournir un id de stagiaire";
    }
    else if ($_GET !== $stagiaires[$id]) {
        echo "Pas de stagiaire connu avec cet id";
    }
    else {
        echo 
        "<ul>
            <li>Nom : " . $stagiaires["nom"] . "</li>
            <li>Prénom : " . $stagiaires["prenom"] . "</li>
            <li>Date de naissance : " . $stagiaires["ddn"] . "</li>
            <li>Sexe : " . $stagiaires["sexe"] . "</li>
            <li>Enfants : " . $stagiaires["enfants"] . "</li>
            <li>Hobbies : " . $stagiaires["hobbies"] . "</li>
        </ul>";
    }
}


?>