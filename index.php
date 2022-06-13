<?php

require_once 'vendor/autoload.php';

$page = 'verbView';
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
include('src/View/layouts/header.php');
include('src/View/'.$page.'.php');
include('src/View/layouts/footer.php');
