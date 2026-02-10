<?php

// super globais

//$_GET query string

//isset() verifica se um avariavel foi setada mas ignora se ela tem ou não valor

//empty() verifica se uma varivel foi setada e varifica se ela TEM ou não valor retornando true ou false


if (!empty($_GET['numero'])) {
    $numero = $_GET['numero'];
    echo "campanha " . $numero;
} else {
    echo "Camopanha invalida";
}
