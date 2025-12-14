<!DOCTYPE html>
<html>
<head><title>Search Redirect</title></head>
<body>

<form method="get" action="">
    URL: <input type="text" name="url" placeholder="https://example.com" required>
    <input type="submit" value="GO">
</form>

<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    // Add http:// if missing
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    header("Location: $url");
    exit;
}
?>
</body>
</html>
