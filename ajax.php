<?php
include 'autoload.php';
if($_POST['action']){
    switch ($_POST['action']) {
        case 'add_user':
            $api = new ApiClass();
            print($api->addEmployee($_POST)->getBody());
            break;
        default:
            break;
    }
}