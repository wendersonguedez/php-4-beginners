<?php

require 'helpers.php';
// require 'router.php';
require 'Database.php';

$config = require 'config.php';
$database = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";

$posts = $database->query($query, [':id' => $id])->fetchAll();