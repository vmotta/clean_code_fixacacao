# Lição 02 — Nomes significativos

## O que você vai aprender

Você vai aprender a escolher nomes que revelem a intenção do código e vai melhorar nomes locais do processamento de vendas sem alterar sua interface pública.

## Teoria em linguagem simples

Um nome ruim transfere trabalho do autor para o leitor. Quando uma variável se chama `$x`, o computador não se importa, mas a pessoa que mantém o sistema precisa descobrir o que `$x` representa.

Um bom nome costuma responder o que o valor representa, por que ele existe e em qual contexto deve ser interpretado. Nomes também devem ser fáceis de buscar.

## Analogia: placas em uma cidade

Imagine uma cidade em que todas as placas tenham apenas letras: “R”, “A”, “X”. O motorista até pode decorar o mapa, mas cada visitante precisa reconstruir o significado dessas letras.

Nomes no código são placas.

## Exemplo simples em PHP

```php
function calc(float $v, int $q): float
{
    return $v * $q;
}
```

Mais claro:

```php
function calcularSubtotalItem(float $precoUnitario, int $quantidade): float
{
    return $precoUnitario * $quantidade;
}
```

## Agora observe o Legacy Store

No método `LegacyStoreService::process()` existem nomes como `$c`, `$it`, `$exp`, `$cup`, `$s`, `$d`, `$f`, `$tot` e `$r`.

Preserve o nome público `process()` nesta lição para que as próximas instruções continuem fáceis de acompanhar.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. faça um mapa do significado de cada abreviação;
2. use a refatoração **Rename Symbol** da IDE quando possível;
3. renomeie primeiro as variáveis locais;
4. execute `composer test`;
5. depois melhore os nomes dos parâmetros preservando ordem e tipos;
6. execute os testes novamente.

Pense em conceitos como subtotal, desconto, frete, total e recibo, mas escolha nomes que façam sentido no domínio.

## Pare e pense

Leia o método inteiro outra vez. Agora você consegue prever o objetivo de algumas linhas sem olhar para o restante do método? Qual nome foi mais difícil de escolher?

## Commit sugerido

```bash
git add src/Legacy/LegacyStoreService.php
git commit -m "refactor: melhora nomes do processamento da venda"
```

## Checklist

- [ ] Troquei abreviações por nomes que revelam intenção.
- [ ] Preservei comportamento e tipos.
- [ ] Rodei os testes antes e depois.
- [ ] Consigo explicar por que cada novo nome é melhor.

Próxima: **[Lição 03 — Funções e métodos pequenos](03-funcoes-pequenas.md)**.
