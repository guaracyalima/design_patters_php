<?php
/**
 *
 */
class Orcamento
{
  private $valor;
  function __construct($novoValor)
  {
    $this->valor = $novoValor;
  }

  //pra ser visivel de fora

  public function getValor()
  {
    return $this->valor;
  }
}

 ?>
