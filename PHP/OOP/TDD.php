<?php
class Sum {

    public $total;

    function total($cart) {
        $priceList = array();

        foreach ($cart as $key => $value) {
            $priceList[] = $value['valor'] * ($value['quantidade'] ?: 1);
        }

        $this->total = array_sum($priceList);
        var_dump($this->total);
        return $this->total;
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
    ], [
        'nome' => 'batata',
        'valor' => 3,
        'quantidade' => 10
    ]
]) != 254) {
    echo "Deu Ruim! \nResultado: $sum->total";
} else {
    echo "Nice! \nResultado: $sum->total";
}
?>