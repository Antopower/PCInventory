<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <title>PC Inventory</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    @yield('head')

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/plugins/plugins-styles.css">

</head>
<body id="app-layout">
    <div id="container" class="clearfix">
        <div id="sidebar">
            <ul class="sidebar-nav">
                <li class="sidebar-logo">
                    <a href="/"><img src="/images/layout/logo-wide.png" alt="Logo"></a>
                </li>
                <li> <a href="#">Tableau de bord</a></li>
                <li><a href="#">Ordinateurs</a></li>
                <li><a href="#">Portables</a></li>
                <li><a href="#">Écrans</a></li>
                <li><a href="#">Cables</a></li>
                <li><a href="#">Pièces d'ordinateurs</a></li>
                <li><a href="#">Autres</a></li>
            </ul>
        </div>
        <div id="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/plugins/jscrollpane/jscrollpane.min.js"></script>
    <script src="/plugins/jscrollpane/jquery.mousewheel.js"></script>
    <script src="/js/custom.js"></script>

</body>
</html>
