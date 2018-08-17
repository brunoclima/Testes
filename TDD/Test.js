function orderTotal(desconto, cart) {
    return cart.items.reduce((acumulador, valorAtual) => {
        var discount = desconto(valorAtual.valor, valorAtual.desconto, valorAtual.quantidade);
        return (valorAtual.valor * (valorAtual.quantidade || 1) - discount) + acumulador
    }, 0);
}

function desconto(valor, desconto = 0, quantidade = 1) {
    if (desconto >= 100) {
        return valor *quantidade;
    } else {
        return ((valor / 100) * desconto) * quantidade;
    }
}

module.exports = {
    orderTotal,
    desconto
};