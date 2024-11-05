<?php

$title = 'My notes';

$config = require 'config.php';
$database = new Database($config['database']);

$notes = $database->query('SELECT * FROM notes WHERE user_id = 1')->fetchAll();

require('views/notes.view.php');