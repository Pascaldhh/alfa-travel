<?php include_once(sprintf('cms-panel%spanel-head.php', DS)); ?>

<div class="content">
    <h2 class="page-title">Pages</h2>
    <div class="card">
        <?php 
        $db = new DB;
        $read = $db->Read('website_header', 'id, page');
        foreach($read as $item)
        {
            echo '<a href="?pages=cms&page=content&id=' . $item['id'] . '"><div class="card__item"><h2>' . $item['page'] .'</h2></div></a>';
        }
        ?>
    </div>
</div>

<?php include_once(sprintf('cms-panel%spanel-foot.php', DS)); ?>