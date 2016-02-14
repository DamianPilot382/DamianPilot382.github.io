<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="San Marino Heritage">
        <meta name="author" content="Damian Ugalde">

        <title>San Marino Heritage | 1450 Avonrea Rd.</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/modern-business.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/mystyle.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <style type="text/css">
            body {
                background: url("../pictures/wallpaper/bg.jpg") !important;
                font-family: baskerville !important;
            }
        </style>

        <?php
            include('../navbar.php');
        ?>

        <!-- Page Content -->
        <div class="container">
            <div class="panel panel-default">
                <!-- Page Heading/Breadcrumbs -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">1450 Avonrea Rd.</h1>
                            <ol class="breadcrumb">
                                <li><a href="../index.html">Home</a></li>
                                <li class="active">1450 Avonrea Rd.</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Portfolio Item Row -->
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-responsive" src="../pictures/Full/1450_Avonrea.jpg" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3>1450 Avonrea Rd.</h3>
                            <p>Insert a brief description of the picture here.</p>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Related Projects Row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="page-header">Other Pictures</h3>
                        </div>

                        <?php
                            include('random.php');
                        ?>


                        <div class="col-sm-3 col-xs-6">
                            <a href="../gallery/1450-Avonrea.html">
                                <img class="img-responsive img-hover img-related" src="../pictures/Thumbnail/1450_Avonrea_sm.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
