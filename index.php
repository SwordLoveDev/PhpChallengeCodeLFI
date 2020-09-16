<?php
    echo "File included : ".$_REQUEST["page"];
    echo "<br></br>";
    $localFile = $_REQUEST["page"];
    echo "Local file to be used : ".$localFile;
    include $localFile;
    echo "<br></br>";
    echo "<p>My discord : Nxstro'S#6666 </p>";

?>