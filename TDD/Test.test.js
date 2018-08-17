const orderTotal = require('./Test');

test('Soma total', () => {
    expect(orderTotal({
        items: [
            {
                "nome": "Colar de prata",
                "valor": 200
            }, {
                "nome": "Pilha",
                "valor": 3,
                "quantidade": 8
            }, {
                "nome": "Anel de ouro",
                "valor": 320
            }
        ]
    })).toBe(544);
});