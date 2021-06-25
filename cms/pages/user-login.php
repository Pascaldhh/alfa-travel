    <?php $ln = new LN();?>
    <div class="container">
        <form method="post" class="my-form">
            <div class="form-title">
                <h3>Please sign in:</h3>
            </div>
            <div class="form-input">
                <input type="text" name="user" placeholder="Enter username">
                <input type="password" visability="hidden" name="pass"  placeholder="Enter password">
                <p class="error-msg"><?php $ln->displayMsg(); ?></p>
                <input class="btn-submit" type="submit" value="Login">
            </div>
        </form>
    </div>