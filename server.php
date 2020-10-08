<?php
//make an include for the database
    include "db.php";
//make a json encode to translate the api into json objects
    header('Content-Type: application/json');
    echo json_encode($albums);
?>
