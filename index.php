<?php
session_start();

// defining things
define('DS', DIRECTORY_SEPARATOR);
define('DIRR', __DIR__);

// require database
require_once(__DIR__ . DS . 'database' . DS . 'db.php');

// require all functions
if(isset($_GET['pages']) == 'cms')
{
    foreach (glob(implode(DS, [__DIR__, 'cms', 'functions', '*.php'])) as $file) {
        require_once($file);
    }
} else {
    foreach (glob(implode(DS, [__DIR__, 'functions', '*.php'])) as $file) {
        require_once($file);
    }
}

// Page structure
require_once(sprintf('cms%srouting%sroute.php', DS, DS));
