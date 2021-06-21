<?php
session_start();
// defining things
define('DS', DIRECTORY_SEPARATOR);

// require database
require_once(__DIR__ . DS . 'database' . DS . 'db.php');

// require all functions
foreach (glob(implode(DS, [__DIR__, 'cms', 'functions', '*.php'])) as $file) {
    require_once($file);
}

// Page structure
if(isset($_GET['pages']) == 'cms')
{
    include_once(sprintf('cms%sheader.php', DS));
} else {
    include_once('header.php');
}
$page = 'home';
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
}
if(isset($_GET['pages']) == 'cms')
{
    if(!isset($_GET['page']) && empty($_GET['page']))
    {
        $page = 'user-login';
    }
    include_once(sprintf('cms%spages%s%s.php', DS, DS, $page));
} else {
    include_once(sprintf('pages%s%s.php', DS, $page));
}

if(isset($_GET['pages']) == 'cms')
{
    include_once(sprintf('cms%sfooter.php', DS));
} else {
    include_once('footer.php');
}

