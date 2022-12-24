<?php
function route($get){
    if($get['route']){
        $tpl = $_SERVER['DOCUMENT_ROOT'].'/pages/'.$get['route'].'.php';
        if(file_exists($tpl)){
            include $tpl;
        } else {
            echo 'Нет страницы';
        }
    } else {
        include $_SERVER['DOCUMENT_ROOT'].'/pages/index.php';
    }
}