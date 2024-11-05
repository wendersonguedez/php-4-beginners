<?php

$title = 'Note';

$config = require 'config.php';
$database = new Database($config['database']);

$note = $database->query("SELECT * FROM notes WHERE id = :id", ['id' => $_GET['id']])->fetchObject();

require('views/note.view.php');