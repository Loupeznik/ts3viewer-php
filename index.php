<?php
require_once("pages/cfg/bot.php");
require_once("pages/cfg/server.php");

$server = new Server();
$bot = new Bot();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta author="Dominik Zarsky (https://github.com/Loupeznik)">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print $server->serverName; ?></title>
    <!-- FRAMEWORK -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dd93db7e23.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <link href="img/icon.png" rel="shortcut icon">
</head>
<body>
    <section class="hero is-bold is-dark">
        <div class="hero-body">
            <h1 class="title"><?php print $server->serverName; ?></h1>
        </div>
    </section>
    <div class="columns">
        <div class="column is-2">
            <a role="button" class="navbar-burger is-hidden-tablet" data-target="navMenu" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
            <aside class="menu has-text-centered is-hidden-mobile" id="navMenu" role="navigation" aria-label="main navigation">
                <p class="menu-label has-text-weight-semibold title is-5">Menu</p>
                <ul class="menu-list">
                    <li><a href="index.php?page=main"><?php print $server->links['main']['menu_title']; ?></a></li>
                    <li><a href="index.php?page=upload"><?php print $server->links['upload']['menu_title']; ?></a></li>
                    <li><a href="index.php?page=connect"><?php print $server->links['connect']['menu_title']; ?></a></li>
                    <li><a href="index.php?page=status"><?php print $server->links['status']['menu_title']; ?></a></li>
                    <li><a href="index.php?page=cmds"><?php print $server->links['cmds']['menu_title']; ?></a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-10">
            <?php
                    if (!isset($_GET['page'])) {
                      $_GET['page'] = 'main';
                    }

                    if (file_exists('pages/' . $_GET['page'] . '.php')) {
                      include  'pages/' . $_GET['page'] . '.php';
                    } else {
                      print '
                        <div class="container">
                            <div class="notification has-background-danger has-text-black has-text-centered has-text-weight-bold">
                            <span class="icon has-text-warning">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                            <p>Page not found</p>
                            </div>
                        </div>
                      ';
                    }
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="content has-text-centered">
            ©2020 - 2021, Dominik Zarsky (Loupeznik) <br>
            TS3Viewer is MIT licensed, original source code may be found at <a href="https://github.com/Loupeznik/ts3viewer-php">GitHub</a>
        </div>
    </footer>
</body>
<script>
$(document).ready(function() {

$(".navbar-burger").click(function() {

    $(".navbar-burger").toggleClass("is-active");
    $(".menu").toggleClass("is-hidden-mobile");

});
});
</script>
</html>
