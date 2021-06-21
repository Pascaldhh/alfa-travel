<?php include_once(sprintf('cms-panel%spanel-head.php', DS)); ?>

<div class="content">
    <h2 class="page-title">Users</h2>
    <div class="users-panel">
        <div class="row">
            <a href="" class="btn">Delete User</a>
            <a href="" class="btn">Create User</a>
        </div>
        <?php 
        $users = $db->Read('users', 'username, role');
        foreach($users as $user) 
        {
        echo '
        <div class="user">
            <div class="user-name">' . $user['username'] . '</div>
            <div class="user-role">' . $user['role'] .'</div>
        </div>';  
        }
        ?>
    </div>
</div>

<?php include_once(sprintf('cms-panel%spanel-foot.php', DS)); ?>