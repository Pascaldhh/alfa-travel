<?php include_once(sprintf('%s%scms%spages%scms-panel%spanel-head.php', DIRR, DS, DS, DS, DS)); 
$db = new DB();
$RPC = new RPC();
$sprint = sprintf('id = ' . $_GET['id']);
$sprint2 = sprintf('page_id = ' . $_GET['id']);
$title = $db->Read('website_header', '*',  $sprint);
$read = $db->Read('website_content', '*', $sprint2);
?>

<div class="content">
    <h2 class="page-title"><?php echo $title[0]['page'] ?></h2>
    <form method="POST" style="display:flex; flex-direction:column; gap:10px;">
        <?php $i = 1;
        foreach($read as $item) {
            echo '<input name="' . $item['id'] . $i++ . '" style="padding:7px 15px;" type="text" value="' . $item['content1'] . '">';
            echo '<input name="' . $item['id'] . $i++ . '" style="padding:7px 15px;" type="text" value="' . $item['content2'] . '">';
            echo '<input name="' . $item['id'] . $i++ . '" style="padding:7px 15px;" type="text" value="' . $item['content3'] . '">';
            $i = 1;
        } 
        ?>
        <input style="padding:7px 15px;" class="btn" type="submit">
    </form>
</div>

<?php include_once(sprintf('%s%scms%spages%scms-panel%spanel-foot.php', DIRR, DS, DS, DS, DS)); ?>