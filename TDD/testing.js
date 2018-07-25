function soma(obj) {
    return obj.items.reduce((prev, cur) => cur.valor + prev, 0);
}

module.exports = soma;