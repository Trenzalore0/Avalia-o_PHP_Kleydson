<?php

require_once 'interfaces/Emitivel.php';
require_once 'classes/Documento.php';
require_once 'classes/Cartorio.php';
require_once 'classes/Certidao.php';
require_once 'classes/Casamento.php';

$c = new Casamento(
  1,
  ['kleydson', 'mariana'],
  ['henry'],
  'casamento',
  'SSP',
  'teste'
);

Cartorio::emitirTodos();
