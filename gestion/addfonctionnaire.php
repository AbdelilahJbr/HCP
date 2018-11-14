<?php
    session_start();
    require('script/connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:..');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="js/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion du prêt des documents | HCP</title>

        <link rel="icon" type="image/png" href="../logo.png"/>
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->



        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/select2.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include('nav.php'); ?>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ajouter un foncionnaire</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row" style="padding-left: 20%; padding-right: 20%;">
                                    <form role="form" method="POST" action="script/adfon.php">
                                        <div class="form-group">
                                            <label>CIN</label>
                                            <input class="form-control"  name="cin" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input class="form-control"  name="nom" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input class="form-control"  name="pnom" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Grade</label>
                                            <select class="form-control js-example-basic-single" name="gra" required>
                                                <option value="Ingénieur">Ingénieur</option>
                                                <option value="Administrateur">Administrateur</option>
                                                <option value="Technicien">Technicien</option>
                                                <option value="Agent">Agent</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Numéro du téléphone</label>
                                            <input class="form-control"  name="tel" required>
                                        </div>
                                        <button type="submit" class="btn btn-default">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/raphael.min.js"></script>
        <!-- <script src="js/morris.min.js"></script> -->
        <!-- <script src="js/morris-data.js"></script> -->

        <script src="js/dataTables/jquery.dataTables.min.js"></script>
        <script src="js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>
        <script src="js/select2.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
        
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });
        </script>


    </body>
</html>
