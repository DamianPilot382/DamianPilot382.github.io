-<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>San Marino Heritage | News</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/3-col-portfolio.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="text/css">
</head>

<body>

    <!--<div id="fb-root"></div>-->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <?php
        include('../layout.php');
        include('../navbar.php');
    ?>

    <!-- Page Content -->

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

    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" src="../pictures/Assets/banner.PNG" style="margin: 0 auto; margin-top: 20px;">
        </div>
      </div>

      <br>

    <div class="container">
        <center>
            <div class="fb-page" data-href="https://www.facebook.com/sanmarinoheritage" data-tabs="timeline" data-width="500" data-height="2000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/sanmarinoheritage"><a href="https://www.facebook.com/sanmarinoheritage">San Marino Heritage</a></blockquote></div></div>
        </center>
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
            <!-- /.row -->
        </footer>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
