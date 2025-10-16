<?php
$slug_webaddress = $_SERVER['REQUEST_URI'];
if(!isset($_GET['from']) && !isset($_GET['to']) && $slug_webaddress == '/'){
    header('Location: /?from=BTC&to=ETH');
}
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"/>
        <link rel="icon" href="/favicon.png"/>
        <title>AsteriChain</title>
        <script defer="defer" src="/js/chunk-vendors.0c1296e1.js"></script>
        <script defer="defer" src="/js/app.adc43ef3.js"></script>
        <link href="/css/app.f62af7d1.css?v=<?php echo time(); ?>" rel="stylesheet">
    </head>
    <body>
        <noscript>
            <strong>We're sorry but AsteriChain doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
        </noscript>
        <div id="app"></div>
    </body>
</html>
