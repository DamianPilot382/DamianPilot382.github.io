<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>San Marino Heritage | Architects</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/3-col-portfolio.css" rel="stylesheet">
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="text/css">
</head>

<body>

    <?php
        include('../layout.php');
        include('../navbar.php');
        include('../pictureFinder.php');
    ?>

    <style>
    img {
        width: 400px;
        height:500px;
        max-height:500px;
        max-width: 400px;
        overflow:auto;
    }
    </style>

    <!-- Page Content -->
    <div class="container">
		<div class="panel panel-default">
            <div class="panel-body">
				<!-- /.row -->

				<!-- Page Header -->
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Architects</h1>
					</div>
				</div>
				<!-- /.row -->
    <style>
        a{
            color:#00bb00;
        }
    </style>

        <?php

        $imagesDir = '../pictures/Architects/';
        $images = glob($imagesDir . '*.{txt}', GLOB_BRACE);

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
            <a href=\"../architects/architect.php?id=".str_replace(".txt", "", str_replace($imagesDir, "", $pic))."\">
                    <img sstyle=\"width:600px;height:228px;\" src=\"".$imagesDir.getPicture(str_replace($imagesDir, "", str_replace(".txt", "", $pic)), false)."\" alt = \"\">
                </div>

                <div class = \"caption\">
                    <h3>".str_replace("_", " ", str_replace(".txt", "", str_replace($imagesDir, "", $pic)))."</a></h3>
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
