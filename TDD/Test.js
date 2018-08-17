function orderTotal(cart) {
    return cart.items.reduce((acumulador, valorAtual) => {
        return valorAtual.valor * (valorAtual.quantidade || 1) + acumulador
    }, 0);
}

module.exports = orderTotal;