<link href="world-map/css/style-world.css" rel="stylesheet" type="text/css"/>
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
            <h2 style="font-family: 'Signika', sans-serif; margin-bottom:10px;"><?php echo $db->Read('website_content', 'content', 'page_id = "2" AND id = "9"')[0]['content'];?></h2>
            <form method="get" action="#info" id="nameOption">
                <input type="hidden" name="page" value="bpv" />
                <select id="from" name="country" onchange="if ( ! this.getAttribute('disabled') ) selectFrom();">
                    <option></option>
                </select>
            </form>
            <select class="hidden" id="to" onchange="if ( ! this.getAttribute('disabled') ) selectTo();"
                    disabled>
            </select>
        </div>
    </div>
</div>
<?php
require_once("location.php");
require_once("pins.php");
?>
<script src="world-map/JS/miniature.earth.js"></script>
