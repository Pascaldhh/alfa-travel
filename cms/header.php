<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php if(isset($_GET['page']) == "loggedin" && isset($_GET['pages']) == "cms"){ echo sprintf('<link rel="stylesheet" href="cms%scss%scms-panel.css">', DS, DS);} else if(isset($_GET['pages']) == "cms") {echo sprintf('<link rel="stylesheet" href="cms%scss%slogin-form.css">', DS, DS);} ?>
    <title>Secure login</title>
</head>
<body>
