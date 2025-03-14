<?php
    include("header.html");

    $p = "dashboard";
    
    if (isset($_REQUEST["p"]))
        $p = $_REQUEST["p"];
    else $p = "dashboard";
    
    if ($p != "dashboard")
        include($p.".php");
    else include("dashboard.php");

    include("footer.html");
?>