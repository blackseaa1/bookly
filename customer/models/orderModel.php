<?php
// function de lay du lieu tu db ve
function index(){
    include_once 'connect/openConnect.php';

}
switch ($action){
    case 'order':
    include '../views/oders/index.php';
}
?>
