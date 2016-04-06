<?php
    $imagesDir = '../pictures/Gallery/';
    $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $pics = array();
    $pics[0] = $images[array_rand($images)];
    $pics[1] = $images[array_rand($images)];
    $pics[2] = $images[array_rand($images)];
    $pics[3] = $images[array_rand($images)];
    $pics = array_unique($pics);
    while(count($pics) < 4){
        $pics[0] = $images[array_rand($images)];
        $pics[1] = $images[array_rand($images)];
        $pics[2] = $images[array_rand($images)];
        $pics[3] = $images[array_rand($images)];
        $pics = array_unique($pics);
    }
    $namesDash = array();
    $namesDash[0] = str_replace("_", "_", str_replace(".jpg", "", str_replace(".png", "", substr($pics[0], 20))));
    $namesDash[1] = str_replace("_", "_", str_replace(".jpg", "", str_replace(".png", "", substr($pics[1], 20))));
    $namesDash[2] = str_replace("_", "_", str_replace(".jpg", "", str_replace(".png", "", substr($pics[2], 20))));
    $namesDash[3] = str_replace("_", "_", str_replace(".jpg", "", str_replace(".png", "", substr($pics[3], 20))));
    $names = array();
    $names[0] = str_replace("_", " ", $namesDash[0]);
    $names[1] = str_replace("_", " ", $namesDash[1]);
    $names[2] = str_replace("_", " ", $namesDash[2]);
    $names[3] = str_replace("_", " ", $namesDash[3]);
    echo "    <style>
        #small {
            width: 250px;
            height: 170px;
            max-height: 170px;
            max-width: 250px;
            overflow:auto;
        }
        </style>";
    for($i = 1; $i <= 4; $i++){
        echo "
        <div class=\"col-sm-3 col-xs-12\">
            <a href=\"../gallery/picture.php?id=".$namesDash[$i - 1]."\">
                <img id=\"small\" class=\"img-responsive img-hover img-related\" src=\"".$pics[$i - 1]."\" alt=\"\">
                <div class = \"caption\">
                    <h3>".$names[$i - 1]."</h3>
                </div>
            </a>
        </div>
        ";
    }
?>
