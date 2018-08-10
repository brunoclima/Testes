<?php
class Sum {

    private $total; // Should be private and only return the result. This is only for testing.

    function total($cart) {
        $priceList = array();

        foreach ($cart as $key => $value) {
            $priceList[] = $value['valor'] * ($value['quantidade'] ?: 1);
        }

        $this->total = array_sum($priceList);

        return $this->total;
    }

    function getTotal() {
        return "\nTotal: $this->total";
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
        'valor' => 3.50,
        'quantidade' => 10
    ]
]) != 259) {
    echo "Deu Ruim!";
} else {
    echo "Nice!" . $sum->getTotal();
}
?>