<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <title>@section('title')Страница @show</title>
</head>
<body>
    <!--   Навигация   -->
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">НовостиКомпани</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Меню</a></li>
            @include('blocks.menu')
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Меню</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <!--   Блок с верхним параллаксом   -->
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
        <div class="container">
            <br><br>
            <h1 class="header center teal-text text-lighten-2">Parallax дизайн</h1>
            <div class="row center">
            <h5 class="header col s12 light">Модный дизайн в parallax стиле с новостями</h5>
            </div>
            <br><br>
        </div>
        </div>
        <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <!--   Блок с контентом   -->
    <div class="container">
        <div class="section">

        <div class="row">
            <div class="col s12 m4">
                @yield('content')
            </div>
        </div>
        </div>
    </div>
    <!--   Блок с нижним параллаксом   -->
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
            <h5 class="header col s12 light">Читайте новости только к нас!</h5>
            </div>
        </div>
        </div>
        <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
    </div>
    <footer class="page-footer teal">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text">О сайте</h5>
            <p class="grey-text text-lighten-4">Страница создана для учебных целей на портале GB по Larvel</p>


            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Новости</h5>
            <ul>
                <li><a class="white-text" href="#!">Новости</a></li>
                <li><a class="white-text" href="#!">Статьи</a></li>
            </ul>
            </div>
            <div class="col l3 s12">
            <h5 class="white-text">Контакты</h5>
            <ul>
                <li><a class="white-text" href="#!">О нас</a></li>
                <li><a class="white-text" href="#!">Контакты</a></li>
            </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a> for GB laravel lessons
        </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>