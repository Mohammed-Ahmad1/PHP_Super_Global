<?php
session_start();
if (!isset($_SESSION['refresh_counter']))
{
    $_SESSION['refresh_counter'] = 0;
}

$_SESSION['refresh_counter']++;
echo "Page refreshed " . $_SESSION['refresh_counter'] . " times this session.";


// to make it 0 and repeat the proecess :
// session_unset(); 
// session_destroy();
?>
