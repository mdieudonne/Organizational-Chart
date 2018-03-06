<?php ob_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Organigramme CCI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="public/css/jquery.orgchart.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style-nav.css">

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- 2018-02-05 Compiled jquery.orgchart -->
    <script type="text/javascript" src="public/js/jquery.mockjax.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.orgchart.js"></script>

    <!-- JQuery DataTables -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

    <!-- Modal -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js
"></script>

</head>
<body>

<header id="page-header">
    <nav>
        <div class="left">
            <a href="index.php" class="brand"><img src="public/img/logo_cci_88.png" alt="" width="175px"></a>
        </div>
        <!--end left-->
        <div class="right">
            <div class="primary-nav has-mega-menu">
                <ul class="navigation">
                    <li class="has-child"><a href="#nav-zone">Zones</a>
                        <div class="wrapper">
                            <div id="nav-zone" class="nav-wrapper">
                                <ul>
                                    <li><a href="index.php?admin=addSector">Ajouter</a></li>
                                    <li><a href="index.php?admin=listSector">Lister | Modifier | Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="has-child"><a href="#nav-service">Service</a>
                        <div class="wrapper">
                            <div id="nav-service" class="nav-wrapper">
                                <ul>
                                    <li><a href="index.php?admin=addService">Ajouter</a></li>
                                    <li><a href="index.php?admin=listService">Lister | Modifier | Supprimer</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-child"><a href="#nav-function">Fonction</a>
                        <div class="wrapper">
                            <div id="nav-function" class="nav-wrapper">
                                <ul>
                                    <li><a href="index.php?admin=addFunction">Ajouter</a></li>
                                    <li><a href="index.php?admin=listFunction">Lister | Modifier | Supprimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="has-child"><a href="#nav-contact">Contact</a>
                        <div class="wrapper">
                            <div id="nav-contact" class="nav-wrapper">
                                <ul>
                                    <li><a href="index.php?admin=addEmployee">Ajouter</a></li>
                                    <li><a href="index.php?admin=addEmployeeService">Lier à un service</a></li>
                                    <li><a href="index.php?admin=listEmployee">Lister | Modifier | Supprimer</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--end primary-nav-->

            <div class="secondary-nav">
                <?php echo '<p>'.date("d/m/Y").' '.date("H:i").'</p>';?>
            </div>

            <div class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </div>
            <!--end nav-btn-->
        </div>

    </nav>
    <!--end nav-->
</header>

<?php

function messageFlash() {
    if (isset($_SESSION['flash'])) {
        echo $_SESSION['flash'];
        unset($_SESSION['flash']);
    }
}
?>

<div class="container">

    <div class="row">



