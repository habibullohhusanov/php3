<?php

// shartli to'xtatish setcookie("token", "birbalo");
setcookie("test", "bu_ham_birbalo", time() + 3);

echo $_COOKIE["token"];
echo $_COOKIE["test"];
