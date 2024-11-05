<?php

require 'helpers.php';
require 'Database.php';
require 'router.php';

$config = require 'config.php';
$database = new Database($config['database']);