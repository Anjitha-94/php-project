<?php

require 'router.php';

require 'Database.php';

require 'process.php';
require 'process.cliniclist.php';

$config = require ('config.php');

$database = new Database($config, 'root', '');




