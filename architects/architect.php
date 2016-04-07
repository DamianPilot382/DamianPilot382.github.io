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
                        <div class="col-md-4">
                            <img style="margin: 0 auto;" class="img-responsive" src="../pictures/Architects/<?php echo getPicture($_GET['id'], false);?>" alt="">
                        </div>

                        <div class="col-md-8" align="justify">
                            <h1 style="text-align:center;"><u><b><?php echo str_replace("_", " ", $_GET['id']);?><b></u></h1>
                            <p><h3><?php echo findFile($_GET['id'], false)?></h3></p>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>
                                <p style="text-align:center"><i>Music courtesy of The Dad's Band Plus One, founded by San Marino native Mr. Andrew Campbell, from the album "The Nashville Sessions".</i></p>
                            </h4>
                            <br>
                            <center>
                            <?php
                                include('../music.php');
                            ?>
                        </center>
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
                        <p>Copyright &copy, 2016 San Marino Heritage, All Rights Reserved</p>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.container -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
