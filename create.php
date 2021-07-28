<?php

/** @var Connection $connection */
$connection = require_once 'pdo.php';

// Validate note object;
// if id is already there then update the POST content of that id else add a new note

$id = $_POST['id'] ?? '';
if ($id){
    $connection->updateNote($id, $_POST);
} else {
    $connection->addNote($_POST);
}

header('Location: index.php');