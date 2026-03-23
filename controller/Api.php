<?php
// referencia a Cruds
include_once '../MODELS/Cruds.php';

$opc = $_SERVER['REQUEST_METHOD'];
switch($opc){
    case 'GET':
        if (isset($_GET['cedula']) && $_GET['cedula'] != '') {
            Cruds::buscarEst();
        } else {
            Cruds::listarEst();
        }
        break;
    case 'POST':
        Cruds::insertEst();
        break;
    case 'PUT':
        Cruds::updateEst();
        break;
    case 'DELETE':
        Cruds::deleteEst();
        break;
}
?>