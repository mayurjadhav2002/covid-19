<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $geopluginURL = 'http://www.geoplugin.net/php.gp?id=' .$ip_address;
    $addrDetailsArr = unserialize(file_get_contents($geopluginURL));

    $city = $addrDetailsArr['geoplugin_city'];
$state = $addrDetailsArr['geoplugin_region'];
    $country = $addrDetailsArr['geoplugin_countryName'];
    $ip = $addrDetailsArr['geoplugin_request'];
    $lati = $addrDetailsArr['geoplugin_latitude'];
    $long = $addrDetailsArr['geoplugin_longitude'];
    error_reporting(0);


    ?>

</body>
</html>