<?php

print_r($_POST);

$password = $_POST['password'] ?? '';
$confirmation = $_POST['confirmation'] ?? '';



if ($password === $confirmation) {
    echo "OK";
} else {
    echo "NOK";
}


if (isset($_POST['newsletter'])) {
    echo "inscription ok";
    
} else {
    echo "inscription nok";
}




?>