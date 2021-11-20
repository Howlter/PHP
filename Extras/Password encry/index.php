<?php
$senha = '1234';

$hash = password_hash($senha,  PASSWORD_DEFAULT);

echo "Senha original:".$senha."<br/>";
echo "HASH:".$hash;