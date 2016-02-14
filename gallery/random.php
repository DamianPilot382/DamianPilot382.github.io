<?php
    $imagesDir = '../pictures/Thumbnail/';
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
    $namesDash[0] = str_replace("_", "-", str_replace("_sm.jpg", "", str_replace("_sm.png", "", substr($pics[0], 22))));
    $namesDash[1] = str_replace("_", "-", str_replace("_sm.jpg", "", str_replace("_sm.png", "", substr($pics[1], 22))));
    $namesDash[2] = str_replace("_", "-", str_replace("_sm.jpg", "", str_replace("_sm.png", "", substr($pics[2], 22))));
    $namesDash[3] = str_replace("_", "-", str_replace("_sm.jpg", "", str_replace("_sm.png", "", substr($pics[3], 22))));


    $names = array();
    $names[0] = str_replace("-", " ", $namesDash[0]);
    $names[1] = str_replace("-", " ", $namesDash[1]);
    $names[2] = str_replace("-", " ", $namesDash[2]);
    $names[3] = str_replace("-", " ", $namesDash[3]);

    for($i = 1; $i <= 4; $i++){
        echo "
        <div class=\"col-sm-3 col-xs-12\">
            <a href=\"".$namesDash[$i - 1].".php\">
                <img class=\"img-responsive img-hover img-related\" src=\"".$pics[$i - 1]."\" alt=\"\">
                <div class = \"caption\">
                    <h3>".$names[$i - 1]."</h3>
                </div>
            </a>
        </div>
        ";
    }

?>
