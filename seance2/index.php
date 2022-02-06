<?php

// ARRAY 

$ourebi_presence = ['carlos', 'zie', 'serge', 'anderson', 'landry', 'yves', 'kalilou', 'mangane', 'stephane'];
$ourebi_presence2 = ['prenom' => 'carlos', 'nom' => 'zie'];


for ($i = 0; $i < sizeof($ourebi_presence); $i++){
    echo $ourebi_presence[$i] . '<br>';
}

$ourebi_presence[0] = 'john';

echo '------- <br>';
for ($i = 0; $i < sizeof($ourebi_presence); $i++){
    echo $ourebi_presence[$i] . '<br>';
}

$ourebi_presence[] = 'hilaire';

echo '------- <br>';
for ($i = 0; $i < sizeof($ourebi_presence); $i++){
    echo $ourebi_presence[$i] . '<br>';
}

// array_splice($ourebi_presence, 1, count($ourebi_presence));
unset($ourebi_presence[0], $ourebi_presence[1], $ourebi_presence[4]);
// echo '------- new table<br>';
// for ($i = 0; $i < sizeof($ourebi_presenceTemp); $i++){
//     echo $ourebi_presenceTemp[$i] . '<br>';
// }

echo '------- last table<br>';
for ($i = 0; $i < sizeof($ourebi_presence); $i++){
    echo $ourebi_presence[$i] . '<br>';
}
?>