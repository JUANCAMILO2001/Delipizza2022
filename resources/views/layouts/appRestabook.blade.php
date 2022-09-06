<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - DeliPizza</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="text/css" rel="stylesheet" href="./Restabook/css/reset.css">
    <link type="text/css" rel="stylesheet" href="./Restabook/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="./Restabook/css/style.css">
    <link type="text/css" rel="stylesheet" href="./Restabook/css/cs-style.css">
    <link type="text/css" rel="stylesheet" href="./Restabook/css/color.css">
    <link rel="shortcut icon" href="./Restabook/images/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
<!-- lodaer  -->
<div class="loader-wrap">
    <div class="loader-item">
        <div class="cd-loader-layer" data-frame="25">
            <div class="loader-layer"></div>
        </div>
        <span class="loader"></span>
    </div>
</div>
<div id="main">
    @include('layouts.components.index.navbar')
    @yield('content')

    <!-- cursor-->
    <div class="element">
        <div class="element-item"></div>
    </div>
</div>
<script src="./Restabook/js/jquery.min.js"></script>
<script src="./Restabook/js/plugins.js"></script>
<script src="./Restabook/js/scripts.js"></script>
<script src="./Reestabook/js/cs-scripts.js"></script>
</body>
</html>
