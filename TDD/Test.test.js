const main = require('./Test');

describe("Total do pedido", () => {
    test('Soma total', () => {
        expect(main.orderTotal({
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
                    "valor": 320,
                    "desconto": 50,
                    "quantidade": 2
                }
            ]
        })).toBe(544);
    });

    test("Desconto", () => {
        expect(main.desconto(320, 10, 2)).toBe(64);
    });
});