<?php

use Kanboard\Core\Controller\Runner;

// Load classes
require __DIR__ . '/bootstrap.php';

// Run the controller
$runner = new Runner($container);
$runner->execute();