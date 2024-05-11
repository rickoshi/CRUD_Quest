<?php

    $db = new SQLite3('');

    if(!$db)
    {
        die("Não foi possível conectar ao banco de dados.");
    }

?>