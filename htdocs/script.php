<?php
    // This page has moved, redirect.
    $script_id = $HTTP_GET_VARS{"script_id"};
    header("Location: scripts/script.php?script_id=$script_id");
    exit;
?>

