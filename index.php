<?php

include 'config.php';
include_once 'header.php';

if (isset($_GET['admin']) && $_GET['admin'] != null) {
    include('controller/adminController.php');
} else {
    include 'view/homepage.php';
}

include 'footer.php';