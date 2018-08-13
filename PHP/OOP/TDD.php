<?php
class Sum {

    private $total; // Should be private and only return the result. This is only for testing.
    protected $cart;

    public function __construct($cart)
    {
        $this->cart = $cart;
    }

    function total() {
        $priceList = array();

        foreach ($this->cart as $key => $value) {
            $priceList[] = $value['valor'] * ($value['quantidade'] ?: 1);
        }

        $this->total = array_sum($priceList);

        return $this->total;
    }

    function __get($property) {
        if(property_exists($this, $property)) {
            return $this->$property;
        }
    }
}

$sum = new Sum([
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
]);

if($sum->total() != 259) {
    echo "Deu Ruim!";
} else {
    echo "Nice! $sum->total";
}
?>