<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="San Marino Heritage">
        <meta name="author" content="Damian Ugalde">

        <title>San Marino Heritage | San Marino City Hall</title>

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
                            <h1 class="page-header">San Marino City Hall</h1>
                            <ol class="breadcrumb">
                                <li><a href="../index.php">Home</a></li>
                                <li class="active">San Marino City Hall</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Portfolio Item Row -->
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-responsive" src="../pictures/Full/San_Marino_City_Hall.jpg" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3>San Marino City Hall</h3>
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
