<?php

class Cartorio
{
  private static $documentos;

  public function Registrar(Documento $documento)
  {
    self::$documentos[] = $documento;
    echo 'documento registado com sucesso';
  }

  public function getDocumentos()
  {
    return self::$documentos;
  }

  public function emitirTodos()
  {
    foreach (self::$documentos as $documento) {
      $documento->emitir();
      print_r($documento);
    }
  }
}
