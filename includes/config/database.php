<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'MySQL|P@ssw0rd', 'bienesraices');

    if (!$db) {
        echo 'Error, no se pudo conectar';
        exit;
    }

    return $db;
}