<?php include_once(sprintf('%s%scms%spages%scms-panel%spanel-head.php', DIRR, DS, DS, DS, DS)); ?>
<div class="content">
    <h2 class="page-title">Create user</h2>
    <div class="users-panel">
        <form method="POST" class="myform">
            <label for="username">Username:</label>
            <input type="text" name="username">
            <label for="password">Password:</label>
            <input type="text" name="password">
            <label for="role">Select Role:</label>
            <select id="" name="role">
                <option value="gebruiker">Gebruiker</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit">
        </form>
    </div>
</div>


<?php include_once(sprintf('%s%scms%spages%scms-panel%spanel-foot.php', DIRR, DS, DS, DS, DS)); ?>