<?php
include 'includes/KaosHeader.php';

if (file_exists($page)){
   include_once $page;
} else {
    include_once 'pages/404.php';
}

