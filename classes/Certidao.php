<?php

abstract class Certidao extends Documento
{
  protected
    $nomePessoas,
    $nomeDeclarantes,
    $tipo;

  private static $Certidoes;

  public function __construct(
    int $numeroRegistro,
    array $nomePessoas,
    array $nomeDeclarantes,
    string $tipo,
    string $nomeTabeliao,
    string $nomeCartorio
  ) {
    parent::__construct(
      $numeroRegistro,
      $nomeTabeliao,
      $nomeCartorio
    );
    
    $this->addCertidao();
    $this->nomePessoas = $nomePessoas;
    $this->nomeDeclarantes = $nomeDeclarantes;
    $this->tipo = 'Certidão de ' . $tipo;
    Cartorio::Registrar($this);
  }

  public function getNomePessoas()
  {
    return $this->nomePessoas;
  }

  public function getNomeDeclarantes()
  {
    return $this->nomeDeclarantes;
  }

  public function getTipo()
  {
    return $this->tipo;
  }

  public function getQuantidadeCertidoes()
  {
    return self::$Certidoes;
  }

  protected function addCertidao()
  {
    self::$Certidoes++;
  }
}
