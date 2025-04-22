
<?php 

$conn = new mysqli("34.227.87.221", "devil", "ded121", "anime");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    die("Database connection failed.");
}

$websiteTitle = "AniSpace";
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$websiteUrl = "{$protocol}://{$_SERVER['SERVER_NAME']}";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "1.0";

$discord = "https://prismo.one";
$github = "https://github.com/DEVILxD5919";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/_not._.anas"; 

// all the api you need
$zpi = "https://myanimeapi-nine.vercel.app/api"; //https://github.com/PacaHat/zen-api
$proxy = $websiteUrl . "/src/ajax/proxy.php?url=";

//If you want faster loading speed
//$proxy = "https://your-hosted-proxy.com/api/v1/streamingProxy?url="; //https://github.com/MetaHat/m3u8-streaming-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
