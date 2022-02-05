<?php

$temps = "ddd";

if ($temps == "matin")
{
    echo "Bonjour Mr";
} else if($temps == "midi")
{
    echo "Bon apres midi Mr";
} else {
    echo "Bonsoir Mr";
}

echo (
    $temps == "matin" ? "Bonjour Mr" : 
    ($temps == "midi" ? "Bon apres midi" : "Bonsoir Mr")
);



?>