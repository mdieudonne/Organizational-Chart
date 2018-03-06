<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Organigramme CCI</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="css/jquery.orgchart.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

    <!-- 2018-02-05 Compiled jquery.orgchart -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.mockjax.min.js"></script>
    <script type="text/javascript" src="js/jquery.orgchart.js"></script>

</head>
<body>

<header>

    <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
        <li class="active">Organigramme</li>
    </ol>

</header>

<div class="container">

    <div id="chart-container"></div>

    <script type="text/javascript">
        $(function() {

            $.mockjax({
                url: '/orgchart/initdata',
                responseTime: 1000,
                contentType: 'application/json',
                responseText: {
                    <?php $topRank=getTopRank($bdd);?>
                    'title': '<?= $topRank['nem'] ?>',
                    'name': '<?= $topRank['nse'] ?>',
                    'children': [

                        <?php
                        $children=getChild($bdd,1);
                        foreach ($children as $child){
                            if(haveChild($bdd, $child['sid'])==false){
                                echo '{ \'title\': \''.$child['nem'].'\', \'name\': \''.$child['nse'].'\' },';
                                echo "\n";
                            }else{
                                echo '{ \'title\': \''.$child['nem'].'\', \'name\': \''.$child['nse'].'\',';
                                echo "\n";
                                echo '\'children\': [';
                                echo "\n";

                                $grandChildren=getChild($bdd, $child['sid']);
                                foreach ($grandChildren as $grandChild) {
                                    echo '{ \'name\': \'' . $grandChild['nem'] . '\', \'title\': \'' . $grandChild['nse'] . '\'},';
                                    echo "\n";
                                    echo "]";
                                    echo "\n";
                                    echo "},";

                                }

                            }


                        }?>

                        { 'name': 'Bo Miao', 'title': 'department manager' },
                        { 'name': 'Su Miao', 'title': 'department manager',
                            'children': [
                                { 'name': 'Tie Hua', 'title': 'senior engineer' },
                                { 'name': 'Hei Hei', 'title': 'senior engineer',
                                    'children': [
                                        { 'name': 'Pang Pang', 'title': 'engineer' },
                                        { 'name': 'Xiang Xiang', 'title': 'UE engineer' }
                                    ]
                                }
                            ]
                        },
                        { 'name': 'Yu Jie', 'title': 'department manager' },
                        { 'name': 'Yu Li', 'title': 'department manager' },
                        { 'name': 'Hong Miao', 'title': 'department manager' },
                        { 'name': 'Yu Wei', 'title': 'department manager' },
                        { 'name': 'Chun Miao', 'title': 'department manager' },
                        { 'name': 'Yu Tie', 'title': 'department manager' }
                    ]
                }
            });

            $('#chart-container').orgchart({
                'data' : '/orgchart/initdata',
                'nodeContent': 'title'
            });

        });
    </script>

    <br>
    <br>



