const main = require('./Test');

describe("Total do pedido", () => {
    test('Soma total', () => {
        const testvar = main.orderTotal(main.desconto, {
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
                    "desconto": 100,
                    "quantidade": 5
                }
            ]
        });

        expect(testvar).toBe(224);
        expect(testvar).toBeGreaterThan(0);
        expect(testvar).toBeDefined();
        expect(testvar).not.toBeNaN();
        expect(testvar).not.toBeUndefined();
    });

    test("Desconto", () => {
        const testvar = main.desconto(320, 50, 2)

        expect(testvar).toBe(320);
        expect(testvar).toBeDefined();
        expect(testvar).not.toBeUndefined();
        expect(testvar).toBeGreaterThanOrEqual(0);
    });
});