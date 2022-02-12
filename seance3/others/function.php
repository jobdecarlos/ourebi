<?php
function sexe(string $sexe = 'F'): string
{
    return $sexe == "M" ? "Homme" : "Femme";
}

function affiche($sexe): void
{
    echo "Bonjour bienvenue a la formation Php. Vous etes " . sexe($sexe) . '<br>';
}
