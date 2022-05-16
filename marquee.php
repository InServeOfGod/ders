<?php
include_once "header.php"
?>

<body onload="turnAround()">
<marquee id="baseMarquee" direction="right" height="170" onmouseover="stop();" onmouseout="start();"
         behavior="alternate" width="400" scrollamount="5">
    <div class="text-dark text-center py-5">
        <div>lorem ipsum dolor sit amet.</div>
        <a href="https://www.google.com.tr/?q=firefox" id="img-obj">
            <img src="img/Firefox-icon.png" alt="firefox" width="50" height="50" title="firefox">
        </a>
    </div>
</marquee>

<?php
include_once "footer.php"
?>

