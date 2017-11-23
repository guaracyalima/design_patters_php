<?php

class CalculadoraDeImpostos
{

  //codigo lixoso por ter varios metodos 'similares'
  public function calculaICMS(Orcamento $orcamento)
  {
    return $orcamento->getValor() * 0.05;
  }

  public function calculaISS(Orcamento $orcamento)
  {
    return $orcamento->getValor() * 0.1;
  }

  //refatoring => metodos lixoso por ter varios if

  // public function calcula(Orcamento $orcamento, $imposto)
  // {
  //   if($imposto == "ICMS")
  //   {
  //     return $orcamento->getValor() * 0.05;
  //   }
  //   else if($imposto == "ISS")
  //   {
  //     return $orcamento->getValor() * 0.1;
  //   }
  // }

//continua com if
  public function calcula(Orcamento $orcamento, Imposto $imposto)
  {
      return $imposto->calcula($orcamento);
  }


}

 ?>
