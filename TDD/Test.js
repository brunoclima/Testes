function orderTotal(cart) {
    return cart.items.reduce((prev, cur) => cur.valor + prev, 0);
}

module.exports = orderTotal;