# 05 — DRY: uma regra de negócio deve ter uma fonte clara

## Teoria

O material-base alerta que duplicação dificulta manutenção e favorece bugs e comportamentos inconsistentes. DRY não significa que todo trecho parecido deve virar um método genérico. O foco é não manter **a mesma decisão de negócio em vários lugares independentes**.

### Analogia do laboratório

Imagine que o telefone de contato de uma empresa esteja escrito manualmente em 30 documentos. Quando o número mudar, alguém terá de localizar todos. Se um documento ficar para trás, surge inconsistência. Uma única fonte de verdade reduz esse risco.

## Exemplo simples

Antes:

```java
// tela A
if (idade >= 18) { ... }

// tela B
if (idade >= 18) { ... }
```

Se “maioridade” é uma regra do domínio, pode existir uma operação clara que expresse esse conceito em vez de repetir o número 18 em vários pontos.

## Desafio guiado — encontre a duplicação real

No sistema inicial, `process()` e `previewTotal()` possuem regras duplicadas de:

- subtotal;
- desconto;
- frete padrão.

Depois da lição de funções pequenas, parte dessas regras já está isolada.

### Passos

1. Execute `mvn test`.
2. Abra `previewTotal()`.
3. Substitua a lógica duplicada de subtotal por uma chamada a `calculateSubtotal()`.
4. Substitua a regra duplicada de desconto por reutilização da regra já existente, sem cupom.
5. Reutilize a regra de frete padrão quando possível, considerando que o preview não usa frete expresso.
6. Execute os testes após cada pequena alteração.
7. Compare quantos lugares precisariam mudar se a regra de VIP fosse alterada amanhã.

## Cuidado

Não transforme métodos específicos em um “super método” cheio de parâmetros apenas para dizer que não existe duplicação. DRY deve melhorar a manutenção, não criar uma abstração confusa.

## Commit sugerido

```bash
git add src
git commit -m "refactor: elimina duplicacao das regras de calculo"
```
