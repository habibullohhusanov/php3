<?php

// $_SESSION

session_start();
// sessiya yaratish
$_SESSION["username"] = "husanov";
echo ($_SESSION["username"]);
/*
    Sessiyani tozalash

    session_unsent();
*/

/*
    Sessiyani to'xtatish
    session_destroy();
*/