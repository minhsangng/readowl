<?php
    error_reporting(1);
    session_start();
    include("layout/header.html");
    
    $p = "home";
    
    if (isset($_REQUEST["p"]))
        $p = $_REQUEST["p"];
    else $p = "home";
    
    if ($p != "home")
        if (file_exists("view/page/".$p))
            include("view/page/".$p."/index.php");
        else include("view/page/404/index.php");
    else include("view/page/home/index.php");
    
    include("layout/footer.html");
?>