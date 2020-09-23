<?php

abstract class Contrato extends Documento
{
  protected
    $nomePartesEnvolvidas,
    $nomeTestemunhas,
    $objetoContrato,
    $dataRegistro;

  private static $Contratos;

  public function __construct(
    int $numeroRegistro,
    array $nomePartesEnvolvidas,
    array $nomeTestemunhas,
    string $objetoContrato,
    string $dataRegistro,
    string $nomeTabeliao,
    string $nomeCartorio
  ) {
    parent::__construct(
      $numeroRegistro,
      $nomeTabeliao,
      $nomeCartorio
    );

    $this->nomePartesEnvolvidas = $nomePartesEnvolvidas;
    $this->nomeTestemunhas = $nomeTestemunhas;
    $this->objetoContrato = $objetoContrato;
    $this->dataRegistro = $dataRegistro;

    self::addContrato($this);
    Cartorio::Registrar($this);
  }

  public function getNomePartesEnvolvidas()
  {
    return $this->nomePartesEnvolvidas;
  }

  public function getNomeTestemunhas()
  {
    return $this->nomeTestemunhas;
  }

  public function getObjetoContrato()
  {
    return $this->objetoContrato;
  } 

  public function getDataRegistro()
  {
    return $this->dataRegistro;
  }

  public function getContratos()
  {
    return self::$Contratos;
  }

  protected function addContrato($contrato)
  {
    self::$Contratos[] = $contrato;
  }

  public function contarContratos()
  {
    $contador = 0;
    foreach (self::$Contratos as $contrato) {
      $contador += 1;
    }
    return $contador;
  }
}
