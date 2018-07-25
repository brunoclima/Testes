const soma = require('./testing');

if (soma({
    items: [
        { "nome": "colar", "valor": 300 },
        { "nome": "anel de ouro", "valor": 500 }
    ]
}) !== 800) {
    throw new Error("Deu ruim");
} else {
    console.log("PASSOU");
}