<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......"/>
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page"/>
    <meta name="robots" content="index, follow"/>
    <title>@yield('title')</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/jquery.scrollbar.css"/>
    <link rel="stylesheet" href="css/ionicons.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700'
          rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
</head>
<body>
@component('templates.elements.headers.header')@endcomponent
<div class="timeline">
    <div class="timeline-cover">
        @component('templates.elements.menuprofil')@endcomponent
    </div>
</div>

<div id="page-contents">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                    @component('templates.elements.postcreate')@endcomponent
                    <!-- Post Content
                        ================================================= -->
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsfeed Common Side Bar Right
            ================================================= -->
            <div class="col-md-2 static">
                @component('templates.elements.profilactivity')@endcomponent
            </div>
        </div>
    </div>
</div>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sticky-kit.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
