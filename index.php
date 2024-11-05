<?php

require 'helpers.php';
require 'database.php';
require 'router.php';

$config = require 'config.php';
$database = new Database($config['database']);