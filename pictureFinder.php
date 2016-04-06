<?php

function getPicture($name, $gallery) {
        if($gallery){
            $imagesDir = '../pictures/Gallery/';
        }else{
            $imagesDir = '../pictures/Architects/';
        }
        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        if(in_array($imagesDir.$name.".jpg", $images)) return $name.".jpg";
        else if(in_array($imagesDir.$name.".jpeg", $images)) return $name.".jpeg";
        else if(in_array($imagesDir.$name.".png", $images)) return $name.".png";
        else if(in_array($imagesDir.$name.".gif", $images)) return $name.".gif";
        else return "placeholder-architect.jpg";

     }

?>
