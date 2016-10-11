<?php
include $_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php';
$fullwidth = 'col-xs-12 col-md-12';
$sidebar = 'col-xs-12 col-md-4';

$page = $_SERVER['REQUEST_URI'];
$page = ltrim($page, '/');
$var = perch_content('Sidebar content', true);
$var = trim($var);

if ($page == 'index.php' || $page == "/" || $page == '') {
    $page = 'home';
} else if (strpos($page,'blog') !== false) {
    $page = 'vsidebar';
} else if (empty($var) || $var=='<!-- Undefined content: Sidebar content -->') {
    $page = 'page';
}
else {
    $page = 'vsidebar';
}

$os = array("sheet-metal-ductwork.php", "steelwork.php", "specialised-metals.php", "fire-rated-ductwork.php");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}

if ($page == 'home') {
    $fullwidth = 'col-xs-12';
} else if ($page == 'vsidebar') {
    $fullwidth = 'col-xs-12 col-md-8';
} else {
    $fullwidth = 'col-xs-12 col-md-12';
}

$currentSlug = ltrim(perch_page_attribute('pagePath', [], true), '/');
$currentURL = $_SERVER['REQUEST_URI'];
$currentURL = trim($currentURL, '/');
$title = perch_pages_title(true);

?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title; ?> | Firetrace Ductwork Ltd</title>
    <meta name="description" content="<?php perch_page_attribute('description'); ?>">
    <meta name="keywords" content="<?php perch_page_attribute('keywords'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="../calicoStamp/stamp.css" />
    <script type="text/javascript" src="/js/jquery.cookiebar.js"></script>
<link href="/css/jquery.cookiebar.css" rel="stylesheet">

<script type="text/javascript">
  /*$(document).ready(function(){
     $cookieBar();*/
  });
</script>
</head>
<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="line"></div>
                <div class="col-xs-12 col-sm-7 col-md-8 logo">
                    <a href="/"><img src="/img/firetrace-logo.png"/></a>

                </div>
                <div class="col-sm-5 col-md-4 preheader">
                    <ul>
                        <li><a href="https://itunes.apple.com/gb/app/ductwork-ordering-app/id953763438?mt=8" target="_blank">Download APP</a></li><li><a href="/the-group.php">The Group</a></li><li class="last"><a href="/contact.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <nav class="row navbar navbar-default">
            <div class="row" id="navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php perch_pages_navigation(array(
                        'template' => array('item.html', 'subitem.html')
                    ));
                    ?>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          <a href="https://www.facebook.com/AirtraceSheetMetalLtd" target="_blank">
                            <i class="fa fa-facebook fa-2x"></i>
                          </a>
                        </li>
                        <li>
                          <a href="https://twitter.com/airtrace_sheet" target="_blank">
                            <i class="fa fa-twitter fa-2x"></i>
                          </a>
                        </li>
                        <li>
                          <a href="/contact.php" target="_blank"><i class="fa fa-envelope-o fa-2x"></i></a>
                        </li>
                        <li>
                          <a href="/location.php" target="_blank"><i class="fa fa-map-marker fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="content">
            <div class="<?php echo $fullwidth; ?> text-left bkgrd-white <?php echo $page; ?> <?php echo $current; ?>">
