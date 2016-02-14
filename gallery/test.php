<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="San Marino Heritage">
        <meta name="author" content="Damian Ugalde">

        <title>San Marino Heritage | 1316 Waverly</title>

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


        <!-- Navigation -->
        <nav class="navbar navbar-custom navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand baskerville" href="../index.html">San Marino Heritage</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/index.html">Home</a>
                        </li>
                        <li>
                          <a href="/about/index.html">About</a>
                        </li>
                        <li>
                          <a href="/gallery/index.html">Gallery</a>
                        </li>
                        <li>
                          <a href="/events/index.html">Events</a>
                        </li>
                        <li>
                          <a href="/events/donate.html">Donate</a>
                        </li>
                        <li>
                          <a href="/join-us/index.html">Join us</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="panel panel-default">
                <!-- Page Heading/Breadcrumbs -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">1316 Waverly Rd.</h1>
                            <ol class="breadcrumb">
                                <li><a href="../index.html">Home</a></li>
                                <li class="active">1316 Waverly Rd.</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /.row -->

                    <!-- Portfolio Item Row -->
                    <div class="row">
                        <div class="col-md-8">
                            <img class="img-responsive" src="../pictures/Full/1316_Waverly.jpg" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3>1316 Waverly</h3>
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
                            $imagesDir = '../pictures/Thumbnail/';
                            $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                            $array = array();
                            $pics[0] = $images[array_rand($images)];
                            $pics[1] = $images[array_rand($images)];
                            $pics[2] = $images[array_rand($images)];
                            $pics[3] = $images[array_rand($images)];

                            $array = array_unique($array);

                            while(count($array) < 4){
                                $pics[0] = $images[array_rand($images)];
                                $pics[1] = $images[array_rand($images)];
                                $pics[2] = $images[array_rand($images)];
                                $pics[3] = $images[array_rand($images)];

                                $array = array_unique($array);
                            }
                            
                            echo "<div class=\"col-sm-3 col-xs-6\">
                                <a href=\"../gallery/1404-Wilson.html\">
                                    <img class=\"img-responsive img-hover img-related\" src=\"$pics[0]\" alt=\"\">
                                </a>
                            </div>";

                            echo "<div class=\"col-sm-3 col-xs-6\">
                                <a href=\"../gallery/1404-Wilson.html\">
                                    <img class=\"img-responsive img-hover img-related\" src=\"$pics[1]\" alt=\"\">
                                </a>
                            </div>";

                            echo "<div class=\"col-sm-3 col-xs-6\">
                                <a href=\"../gallery/1404-Wilson.html\">
                                    <img class=\"img-responsive img-hover img-related\" src=\"$pics[2]\" alt=\"\">
                                </a>
                            </div>";

                            echo "<div class=\"col-sm-3 col-xs-6\">
                                <a href=\"../gallery/1404-Wilson.html\">
                                    <img class=\"img-responsive img-hover img-related\" src=\"$pics[3]\" alt=\"\">
                                </a>
                            </div>";

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
