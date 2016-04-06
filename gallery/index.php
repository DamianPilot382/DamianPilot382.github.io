<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>San Marino Heritage | Gallery</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/3-col-portfolio.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="text/css">
</head>

<body>

    <?php
        include('../layout.php');
        include('../navbar.php');
    ?>

    <style>
    img {
        width: 350px;
        height: 225px;
        max-height: 225px;
        max-width: 350px;
        overflow:auto;
    }
    .wrap-words{
    white-space:normal;
}
    </style>

    <!-- Page Content -->
    <div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4><i class="fa fa-fw fa-check"></i>Picture Gallery</h4>
            </div>
            <div class="panel-body">
				<!-- /.row -->

				<!-- Page Header -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Picture gallery
							<small>Click a picture for more content</small>
						</h1>
					</div>
				</div>

				<!--<div class="row">
					<div class = "col-sm-12 col-md-4 col-lg-4">
      					<div class = "thumbnail">
         					<img src = "../pictures/Thumbnail/1404_Wilson_sm.jpg" alt = "">
      					</div>

     					<div class = "caption">
         					<h3>Saved/Restored</h3>
      					</div>
   					</div>

   					<div class = "col-sm-12 col-md-4 col-lg-4">
      					<div class = "thumbnail">
         					<img src = "../pictures/Thumbnail/1450_Avonrea_sm.jpg" alt = "">
      					</div>

     					<div class = "caption">
         					<h3>At Risk</h3>
      					</div>
   					</div>

   					<div class = "col-sm-12 col-md-4 col-lg-4">
      					<div class = "thumbnail">
         					<img src = "../pictures/Thumbnail/1406_Wilson_Demolition_sm.jpg" alt = "">
      					</div>

     					<div class = "caption">
         					<h3>Graveyard</h3>
      					</div>
   					</div>-->

				</div>


                <?php

                $imagesDir = '../pictures/Gallery/';
                $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                $i = 3;
                $j = 0;
                foreach($images as $pic){
                    $i++;
                    $j++;
                    if($i >= 3){
                        print "<div class=\"row\">";
                        $i = 0;
                    }
                    echo "<div class = \"col-sm-6 col-md-4 col-lg-4\">
                        <div class = \"thumbnail\">
                    <a href=\"../gallery/picture.php?id=".str_replace(".png", "", str_replace(".gif", "", str_replace($imagesDir, "", str_replace(".jpg", " ", $pic))))."\">
                            <img sstyle=\"width:600px;height:228px;\" src=\"".$pic."\" alt = \"\">
                        </div>

                        <div class = \"caption\">
                            <h3>".str_replace("_", " ", str_replace(".png", "", str_replace(".gif", "", str_replace($imagesDir, "", str_replace(".jpg", "", $pic)))))."</a></h3>
                        </div>
                    </div>";
                    if($j >= 3){
                        echo "</div>";
                        $j = 0;
                    }
                }

                ?>


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
                    <p>Copyright &copy, 2016 San Marino Heritage, All Rights Reserved</p>                </div>
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
