# Lição 03 — Funções e métodos pequenos

## O que você vai aprender

Você vai praticar **extração de métodos** e perceber a diferença entre um método que coordena um processo e um método que executa muitos detalhes ao mesmo tempo.

## Teoria em linguagem simples

Quando um método valida entrada, soma itens, calcula desconto, calcula frete, formata texto e ainda decide regras de cupom, ele obriga o leitor a alternar entre muitos níveis de detalhe.

Métodos pequenos favorecem leitura, reutilização e testes. O objetivo não é quebrar cada linha em uma função, mas agrupar passos com significado próprio.

## Analogia: uma receita

Uma receita legível pode dizer: prepare a massa, prepare o recheio, monte o prato e leve ao forno. Primeiro você entende o fluxo; depois consulta detalhes quando necessário.

## Exemplo simples em PHP

```php
function fecharPedido(array $itens): float
{
    $subtotal = calcularSubtotal($itens);
    return aplicarDesconto($subtotal);
}
```

A intenção aparece no método principal.

## Agora observe o Legacy Store

Leia `LegacyStoreService::process()` e marque os blocos de validação, subtotal, desconto, frete, total e recibo.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. extraia somente o cálculo do subtotal para um método privado;
2. execute `composer test`;
3. faça um commit intermediário;
4. escolha **desconto** ou **frete**, mas não os dois ao mesmo tempo;
5. extraia a responsabilidade escolhida;
6. execute os testes novamente;
7. releia `process()` e verifique se ele começa a parecer uma sequência de etapas de negócio.

Não simplifique todos os `if` agora; isso pertence às próximas lições.

## Commit sugerido

```bash
git commit -am "refactor: extrai calculo de subtotal"
```

Depois faça outro commit para a segunda extração.

## Checklist

- [ ] Extraí uma responsabilidade de cada vez.
- [ ] Testei depois de cada extração.
- [ ] O método principal mostra melhor o fluxo da venda.
- [ ] Evitei misturar esta etapa com outras refatorações.

Próxima: **[Lição 04 — KISS](04-kiss.md)**.
