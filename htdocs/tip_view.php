<?php
    // This page has moved, redirect.
    $tip_id = $HTTP_GET_VARS{"tip_id"};
    header("Location: tips/tip.php?tip_id=$tip_id");
    exit;
?>

