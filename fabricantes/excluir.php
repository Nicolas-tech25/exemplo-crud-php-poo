<?php
require_once "../vendor/autoload.php";
use ExemploCrudPoo\Fabricante;

$fabricante = new Fabricante;
$fabricante->setId($_GET['id']);
$fabricante->excluirFabricante();
header("location:visualizar.php");

