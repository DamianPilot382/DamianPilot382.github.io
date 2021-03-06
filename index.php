<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>San Marino Heritage | Home</title>



    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/modern-business.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/mystyle.css" rel="stylesheet" type="text/css">



</head>



<body>



    <?php

        include('layout.php');
    ?>

    <nav class="navbar navbar-custom navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand baskerville" href="/index.php"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                      <a href="../gallery/index.php">Gallery</a>
                    </li>
                    <li>
                        <a href="../news/index.php">News</a>
                    </li>
                    <li>
                      <a href="../architects/index.php">Architects</a>
                    </li>
                    <li>
                      <a href="../map.php">Map</a>
                    </li>
                    <li>
                      <a href="../join/index.php">Join us</a>
                    </li>
                    <li>
                        <a href="../donate/index.php">Donate</a>
                    </li>
                    <li>
                        <a href="../calendar/index.php">Calendar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Page Content -->

    <div class="container">

        <a name="letter"></a>



        <!-- Marketing Icons Section -->

        <div class="row">

            <div class="col-lg-8">

                <img class="img-responsive" src="pictures/Assets/banner.PNG" style="margin: 0 auto; margin-top: 20px; margin-bottom: 40px;">

            </div>
              <div class="col-lg-4" style="margin-top:20px;">

                  <div class="panel panel-default">

                      <div class="panel-body">

                          <h4>

                              <p style="text-align:center">Follow us on:</p>

                          </h4>

                          <center>

                          <a href="https://www.facebook.com/sanmarinoheritage/"><img style="margin:10px;" src="pictures/Assets/facebook.png" width="80px"></a>

                          <a href="https://www.etsy.com/shop/SanMarinoHeritage?ref=search_shop_redirect"><img style="margin:10px;" src="pictures/Assets/etsy.gif" width="80px"></a>

                          <a href="https://www.causes.com/causes/378040-san-marino-heritage"><img style="margin:10px;" src="pictures/Assets/causes.png" width="80px"></a>

                          <center>

                          <br>
                      </div>
                  </div>
              </div>

        </div>





          <div class="row">

            <div class="col-lg-2">

            </div>

            <div class="col-lg-8">



              <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->

                <ol class="carousel-indicators">

                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                  <li data-target="#myCarousel" data-slide-to="1"></li>

                  <li data-target="#myCarousel" data-slide-to="2"></li>

                  <li data-target="#myCarousel" data-slide-to="3"></li>

                </ol>



                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">

                  <div class="item active">

                    <img id="img-carousel" src="pictures/Crates/Dos_Palmas.jpg" alt="Dos Palmas">

                  </div>



                  <div class="item">

                    <img id="img-carousel" src="pictures/Crates/Mission_Play.jpg" alt="Mission Play">

                  </div>



                  <div class="item">

                    <img id="img-carousel" src="pictures/Crates/Titus_Ranch.jpg" alt="Titus Ranch">

                  </div>



                  <div class="item">

                    <img id="img-carousel" src="pictures/Crates/Toucan.jpg" alt="Toucan">

                  </div>

                </div>



                <!-- Left and right controls -->

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">

                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>

                  <span class="sr-only">Previous</span>

                </a>

                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>

                  <span class="sr-only">Next</span>

                </a>

              </div>



            </div>

          </div>



          <br>

          <div class="container">


        <Style>
        .wrap-words{
    white-space:normal;
    overflow-wrap: break-word;
}
        </style>
        <!-- Marketing Icons Section -->


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
                            include('musicFirst.php');
                        ?>
                    </center>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <a name="contact"></a>

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4><i class="glyphicon glyphicon-envelope"></i> Contact Us</h4>

                    </div>

                    <div class="panel-body"><h3>

                    <div class="col-md-6">

                <ul>

                    <li><strong>Email:</strong>

                        <ul>

                            <li class="wrap-words">info@sanmarinoheritage.org</li>

                        </ul>

                    </li>

                    <li><strong>Fax:</strong>

                        <ul>

                            <li>626-441-1400</li>

                        </ul>

                    </li>

                    <li><strong>Address:</strong>

                        <ul>

                            <li>San Marino Heritage<br>1613 Chelsea Rd #312<br>San Marino, CA 91108</li>

                        </ul>

                    </li>

                </ul>

            </div>

            <div class="col-md-6">

                <img class="img-responsive" src="pictures/Assets/sm_flag.png" alt="" style="border: 2px solid black;">

            </div>

                    </div>

                </div>

            </div>

        </div>



          <div class="row">

            <div class="col-lg-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <h4><i class="fa fa-fw fa-check"></i>A letter from your founder, Shirley Jagels...</h4>

                    </div>

                    <div class="panel-body">

                        <h3>

                                Dear Fellow Preservationists,

                                <br>

                                <br>

                                Welcome to San Marino Heritage’s website.  We hope that you find it easy to navigate, and helpful.

                                <br>

                                <br>

                                The mission of San Marino Heritage, a non-profit organization, is to promote, preserve and enhance San Marino’s cultural, historical and natural resources, and our quality of life.

                                <br>

                                <br>

                                San Marino, California was incorporated in 1913 and is home to the world-renowned Huntington Library and Gardens, historic El Molino Viejo (aka “The Old Mill”), and lovely Lacy Park, and proudly stands as the birthplace and hometown of General George S. Patton, whose father was San Marino's first Mayor.

                                <br>

                                <br>

                                At its incorporation, San Marino was predominantly orange groves, and still today, orange groves thrive and are harvested at The Huntington Library in celebration of this part of our local history.

                                <br>

                                <br>

                                The inspiration for the founding of San Marino Heritage was a seedling that was planted on our own Wilson Avenue.  Nearby, the 3rd oldest residence of the City, once home to a local citrus rancher, was slated for demolition as a result of the November 30th, 2007 decision by the San Marino City Council.  That seed took root, and grew in strength and in the knowledge that San Marino needed another voice, a voice that actively stood for our City’s cultural and natural resources, and for the heritage of this community, and for the law.

                                <br>

                                <br>

                                Therefore, this fledgling group has also provided an alternative means for dedicated citizens to organize and to express valid concerns about our local government and in so doing and whenever possible, protect our cultural and natural resources.

                                <br>

                                <br>

                                Please consider joining us in membership, as volunteers, and with donations.

                                <br>

                                <br>

                                Thank you.

                            </p>

                        </h3>
                    </div>
                    <center>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="KYUH6U4SSYLXU">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
                </div>

            </div>



        </div>

      </div>

        <!-- /.row -->



        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12">

                  <div class="panel panel-default">

                    <div class="panel-heading">

                      <h4>Gallery</h4>

                    </div>

                    <div class="panel-body">

                      <div class="col-lg-6">

                        <img class="img-responsive" style="float:right; border: 2px solid black;" src="pictures/Gallery/1404_Wilson.jpg" height="100%" width="100%">

                      </div>

                      <div class="col-lg-6">

                        <h3>

                          <p>

                            Visit our picture gallery for a collection of houses saved, at risk, and demolished.

                            <br>

                            <br>

                            <a href="/gallery" class="btn btn-default">Visit our picture gallery.</a>

                          </p>

                        </h3>

                      </div>

                    </div>

                  </div>

                </div>

            </div>

        </div>



        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12">

                  <div class="panel panel-default">

                    <div class="panel-heading">

                      <h4>Architects</h4>

                    </div>

                    <div class="panel-body">

                      <div class="col-lg-6">

                        <h3>

                          <p>

                            Visit our database of licensed architects for more information.

                            <br>

                            <br>

                            <a href="/architects" class="btn btn-default">Visit our architect database.</a>

                          </p>

                        </h3>

                      </div>

                      <div class="col-lg-6">

                        <img class="img-responsive" style="margin: 0 auto;" src="pictures/Architects/Theodore_Pletsch.png" height="60%" width="60%" align="middle">

                      </div>

                    </div>

                  </div>

                </div>

            </div>

        </div>



        <!-- Call to Action Section -->



        <hr>



        <!-- Footer -->

        <footer>

            <div class="row">

                <div class="col-lg-12">

                    <p>Copyright &copy, 2016 San Marino Heritage, All Rights Reserved</p>
                    <center>
                        <!-- hitwebcounter Code START -->
                        <a href="http://www.hitwebcounter.com" target="_blank">
                        <img src="http://hitwebcounter.com/counter/counter.php?page=6359817&style=0006&nbdigits=6&type=ip&initCount=0" title="website counter" Alt="website counter"   border="0" >
                        </a>                                        <br/>
                                                                <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Stats For Free"
                                                                target="_blank" style="font-family: Arial, Helvetica, sans-serif;
                                                                font-size: 9px; color: #736C65; text-decoration: none ;"><em>Stats For Free                                        </em>
                                                                </a>

                    </center>
                </div>

            </div>

        </footer>



    <!-- jQuery -->

    <script src="js/jquery.js"></script>



    <!-- Bootstrap Core JavaScript -->

    <script src="js/bootstrap.min.js"></script>



    <!-- Script to Activate the Carousel -->

    <script>

    $('.carousel').carousel({

        interval: 5000 //changes the speed

    })

    </script>



</body>



</html>
