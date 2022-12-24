<?php
include 'composer/vendor/autoload.php';
$dir = "engine/";

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if($file !== '.' AND $file !== '..'){
                include_once($dir.'/'.$file);
            }
        }
        closedir($dh);
    }
}