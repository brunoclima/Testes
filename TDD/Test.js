function orderTotal(cart) {
    return cart.items.reduce((acumulador, valorAtual) => {
        var desconto = (valorAtual.valor / 100) * (valorAtual.desconto || 0);
        return (valorAtual.valor * (valorAtual.quantidade || 1) - desconto) + acumulador
    }, 0);
}

module.exports = orderTotal;