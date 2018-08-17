const orderTotal = require('./Test');

test('Soma total', (orderTotal) => {
    expect(orderTotal([
        {
            "nome": "colar",
            "valor": 200
        }, {
            "nome": "pilha",
            "valor": 3
        }
    ])).toBe(203);
});