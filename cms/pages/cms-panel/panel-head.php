<?php if(!$_SESSION['user']) { header('Location: ?'); }?>
<header>
    <a href="?pages=cms&page=home"><p class="cms-logo">CMS</p></a>
    <div class="container h-container">
        <div class="header__left">
            <a class="view-homebtn" href="?" target="_blank">Bekijk website</a>
        </div>
        <div class="header__right">
            <a class="logout-btn" href="?pages=cms&page=loggedout">logout</a>
        </div>
    </div>
</header>
<div class="body-content">
    <div class="sidepanel">
        <ul class="user-menu">
            <li><a href="?pages=cms&page=pages">Pages</a></li>
            <li><a href="?pages=cms&page=users">Users</a></li>
        </ul>
    </div>