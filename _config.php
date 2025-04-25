
<?php 

$conn = new mysqli("143.198.230.235", "devil", "ded121", "anime");

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
$zpi = "https://myanimeapi-psi.vercel.app/api";
$proxy = "https://proxy-ls4v.vercel.app/m3u8-proxy?url=";

//If you want faster loading speed
//$proxy = "https://your-hosted-proxy.com/api/v1/streamingProxy?url="; //https://github.com/MetaHat/m3u8-streaming-proxy


$banner = $websiteUrl . "/public/images/banner.png";

    
