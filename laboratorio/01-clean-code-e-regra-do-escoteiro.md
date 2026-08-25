# Lição 01 — Clean Code e Regra do Escoteiro

## O que você vai aprender

Você vai entender por que código limpo é principalmente uma questão de **comunicação entre pessoas** e vai praticar uma melhoria pequena e segura.

## Teoria em linguagem simples

Um programa pode produzir a resposta correta e ainda ser ruim de manter. Isso acontece quando outra pessoa precisa gastar muita energia apenas para descobrir o que cada parte faz.

Código limpo tende a revelar intenção. Ao ler um trecho, você consegue compreender seu propósito sem decifrar uma coleção de pistas espalhadas pelo arquivo.

A **Regra do Escoteiro** traz uma ideia simples: quando você tocar em um trecho, tente deixá-lo um pouco melhor do que encontrou. Não é necessário reformar o sistema inteiro em uma única tarefa.

## Analogia: a bancada compartilhada

Imagine uma oficina em que várias pessoas usam a mesma bancada. Você pega uma ferramenta, faz seu trabalho e percebe dois parafusos soltos e uma chave fora do lugar. Você não precisa reformar a oficina inteira; basta devolver a bancada um pouco mais organizada.

## Exemplo simples em PHP

Antes:

```php
$vl = $produto->p * $q;
```

Depois:

```php
$subtotalItem = $produto->preco * $quantidade;
```

A regra de negócio não mudou. Mudou a quantidade de esforço necessária para entender a linha.

## Agora observe o Legacy Store

Abra `src/Legacy/LegacyStoreService.php`. Seu exercício de hoje é pequeno.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

No comentário que aparece antes da validação, pergunte se ele acrescenta uma informação que o código não poderia expressar melhor.

1. leia o bloco de validação;
2. remova o comentário genérico `// valida os dados para não dar problema depois`;
3. não altere a lógica;
4. execute os testes novamente.

```bash
composer test
```

## Pare e pense

- O comentário removido explicava realmente **por que** algo existia ou apenas narrava o código?
- Foi possível melhorar o arquivo sem tocar na regra de negócio?
- Que vantagem existe em commits pequenos quando algo quebra?

## Commit sugerido

```bash
git add src/Legacy/LegacyStoreService.php
git commit -m "refactor: remove comentario redundante da validacao"
```

## Checklist

- [ ] Executei os testes antes da mudança.
- [ ] Fiz apenas uma pequena melhoria.
- [ ] Executei os testes depois da mudança.
- [ ] Entendi a ideia de deixar o código um pouco melhor.

Próxima: **[Lição 02 — Nomes significativos](02-nomes-significativos.md)**.
