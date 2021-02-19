<?php
    echo "File included : ".$_REQUEST["page"];
    echo "<br></br>";
    $localFile = $_REQUEST["page"];
    echo "Local file to be used : ".$localFile;
    include $localFile;
    echo "<br></br>";
    echo "<p>My discord : 0xSword#1337 </p>";

?>
