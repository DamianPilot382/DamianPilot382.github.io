<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="San Marino Heritage">
        <meta name="author" content="Damian Ugalde">

        <title>San Marino Heritage | <?php echo str_replace("_", " ", $_GET['id']);?></title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/modern-business.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../css/mystyle.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <?php
            include('../layout.php');
            include('../navbar.php');
            include('../pictureFinder.php');
            include('../fileReader.php');
        ?>
        <!-- Page Content -->
        <div class="container">
            <div class="panel panel-default">
                <!-- Page Heading/Breadcrumbs -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?php echo str_replace("_", " ", $_GET['id']);?></h1>
                            <ol class="breadcrumb">
                                <li><a href="../index.php">Home</a></li>
                                <li class="active"><?php echo str_replace("_", " ", $_GET['id']);?></li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Portfolio Item Row -->
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-responsive" src="../pictures/Gallery/<?php echo getPicture($_GET['id'], true);?>" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3><?php echo str_replace("_", " ", $_GET['id']);?></h3>
                            <p><?php echo findFile($_GET['id'], true)?></p>
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
                        <p>Copyright &copy, 2016 San Marino Heritage, All Rights Reserved</p>                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
