<?php
// Set cookies
setcookie("username", "Mohammed", time()+3600, "/", "", false, true);
setcookie("email", "Moahmmed@gmail.com", time()+3600, "/", "", false, true);

// Retrieve cookies
if(isset($_COOKIE['username'], $_COOKIE['email'])){
    echo "Username: " . $_COOKIE['username'] . "<br>";
    echo "Email: " . $_COOKIE['email'] . "<br>";
}

// Delete cookies
setcookie("username", "", time()-3600, "/");
setcookie("email", "", time()-3600, "/");
?>
