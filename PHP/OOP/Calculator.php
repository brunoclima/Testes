<?php

// PHP OOP Tutorial 3 | Scope & Calculator
// jream.com

class Calc {
    public $input;
    public $input2;
    public $output;

    function setInput($int) {
        $this->input = (int) $int;
    }

    function setInput2($int) {
        $this->input2 = (int) $int;
    }

    function getResult() {
        $this->output = $this->input * $this->input2;
        return $this->output;
    }
}

$calc = new Calc(); 
$calc->setInput(21);
$calc->setInput2(3);
echo $calc->getResult();
?>