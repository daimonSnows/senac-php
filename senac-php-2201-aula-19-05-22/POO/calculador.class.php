<?php

/*
private - somente dentro da classe
protected - herdeiros dentro da mesma classe
public- zona total
*/


class calculadora{

    private ?int $n1;
    private ?int $n2;


    public function __construct($n1, $n2)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;        
    }

    public function soma():int
    {
        return $this->n1 + $this->n2;
    }
    public function subitracao():int
    {
        return $this->n1 - $this->n2;
    }

    public function __destruct()
    {
        echo "Obrigado pela visita";
    }
}