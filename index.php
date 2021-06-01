<?php
define('DS', DIRECTORY_SEPARATOR);
include_once('header.php');
$page = 'home';
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}
include_once(sprintf('pages%s%s.php', DS, $page));
include_once('footer.php');
?>