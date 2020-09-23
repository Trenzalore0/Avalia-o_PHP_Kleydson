<?php

abstract class Documento implements Emitivel
{
  protected
    $numeroRegistro,
    $dataEmissao,
    $nomeTabeliao,
    $nomeCartorio;

  public function __construct(
    int $numeroRegistro,
    string $nomeTabeliao,
    string $nomeCartorio
  ) {
    $this->numeroRegistro = $numeroRegistro;
    $this->nomeTabeliao = $nomeTabeliao;
    $this->nomeCartorio = $nomeCartorio;
  }

  final public function emitir()
  {
    $this->dataEmissao = date('d/m/Y');;
  }

  public function getDataEmissao()
  {
    return $this->dataEmissao;
  }

  public function getNumeroRegistro()
  {
    return $this->numeroRegistro;
  }

  public function getNomeTabeliao()
  {
    return $this->nomeTabeliao;
  }

  public function getNomeCartorio()
  {
    return $this->nomeCartorio;
  }
}
