<?php

    $vercode = mt_rand(1001, 9999);
    $_SESSION['vercode']   = $vercode;
    echo $vercode;

?>
