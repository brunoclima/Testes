function orderTotal(cart) {
    return cart.items.reduce((acumulador, valorAtual) => {
        var discount = desconto(valorAtual.valor, valorAtual.desconto, valorAtual.quantidade);
        return (valorAtual.valor * (valorAtual.quantidade || 1) - discount) + acumulador
    }, 0);
}

function desconto(valor, desconto, quantidade) {
    return ((valor / 100) * (desconto || 0)) * (quantidade || 1);
}

module.exports = {
    orderTotal, desconto
};