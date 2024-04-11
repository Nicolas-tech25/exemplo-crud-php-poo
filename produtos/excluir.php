<?php
require_once "../vendor/autoload.php";
use ExemploCrudPoo\Produtos;
$produtos = new Produtos;


$produtos->setId($_GET['id']);
$produtos->excluirProduto();
header("location:visualizar.php");