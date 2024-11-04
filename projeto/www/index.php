<?php
require '../vendor/autoload.php';

use Freelas\Model\Usuario;

$u = new Usuario;
$u->nome = 'Miguel';
$u->email = 'miguel.zarth@ifsc.edu.br';
$u->senha = '123';
$u->salvar();
