<?php
$hash = '$2y$10$cFS1LBvdO93T7PBXOsbeAOqaWF1jp/OXVsriJzs.XwCP/iu2sh/BO';

$senha = '1234';

if(password_verify($senha, $hash)){
    echo 'Senha correta!';
} else{
    echo 'Senha incorreta!';
}