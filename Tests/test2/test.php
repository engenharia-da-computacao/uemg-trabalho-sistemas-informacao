<?php

include_once "../base_tests.php";

mkdir("system");

copiar_diretorio("../../System", "system/");

exec("chmod +777 -R system/");

unlink("system/base/D_LOTMAN.HTM");

header("location: system/index.php");
exit();
