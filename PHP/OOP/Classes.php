<?php
class Sum {

    public $total;

    function total($cart) {
        $priceList = array();

        foreach ($cart as $key => $value) {
            $priceList[] = $value['valor'] * ($value['quantidade'] ?: 1);
        }

        $total = array_sum($priceList);
        var_dump($total);
        return $total;
    }
}

$sum = new Sum;

if($sum->total([
    [
        'nome' => 'lasanha',
        "valor" => 8,
        'quantidade' => 3
    ], [
        'nome' => 'jogo',
        'valor' => 120
    ], [
        'nome' => 'bola de basquete',
        'valor' => 80
    ]
]) != 224) {
    echo "Deu Ruim! \nResultado: $sum->total";
} else {
    echo "Nice! \nResultado: $sum->total";
}

var_dump($sum->total);
?>