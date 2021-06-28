<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/styleWorld.css" rel="stylesheet" type="text/css"/>
    <title>Map</title>
</head>
<body>
<div id="wrapper">
    <div id="main-col">
        <div id="myearth" class="little-earth">
            <div id="tip-layer">
                <div>
                    <div id="tip-big"></div>
                    <div id="tip-small"></div>
                </div>
            </div>
            <div id="button-reset" onclick="reset();"></div>
        </div>
    </div>

    <div id="side-col">
        <div id="CountryInfo"><br></div>
        <div>
            <form method="post" action="" id="nameOption">
                <select id="from" onchange="if ( ! this.getAttribute('disabled') ) selectFrom();">
                    <option></option>
                </select>
            </form>
            <select class="hidden" id="to" onchange="if ( ! this.getAttribute('disabled') ) selectTo();"
                    disabled>
            </select>
        </div>
    </div>
</div>
</div>
<?php
require_once("location.php");
require_once("pins.php");
?>
<script src="JS/miniature.earth.js"></script>
</body>
</html>