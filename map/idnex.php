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
            <select id="from" onchange="if ( ! this.getAttribute('disabled') ) selectFrom();">
                <option></option>
            </select>
            <select class="hidden" id="to" onchange="if ( ! this.getAttribute('disabled') ) selectTo();"
                    disabled>
            </select>
        </div>
    </div>
</div>
</div>
<?php
    include_once("location.php");
?>
<script src="JS/location.js"></script>
<script src="JS/miniature.earth.js"></script>
<script src="pins.js"></script>
<script src="CountryText.js"></script>
</body>
</html>