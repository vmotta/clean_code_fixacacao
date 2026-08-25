# 04 — KISS: mantenha simples o que pode ser simples

## Teoria

KISS é apresentado no material-base como a busca por código simples e organizado, evitando complexidade adicional desnecessária, elementos sem uso, estruturas excessivamente encadeadas e condições difíceis de seguir.

KISS não significa escrever a menor quantidade possível de linhas. Significa escolher uma solução que seja **fácil de compreender e suficiente para o problema atual**.

### Analogia do laboratório

Se uma porta abre com uma maçaneta, instalar um painel eletrônico, reconhecimento facial e três sensores apenas porque “pode ser útil um dia” aumenta custo sem resolver melhor o problema atual.

## Exemplo simples

Antes:

```java
boolean ativo;
if (usuario.isAtivo() == true) {
    ativo = true;
} else {
    ativo = false;
}
```

Depois:

```java
boolean ativo = usuario.isAtivo();
```

## Desafio guiado — reduza caminhos mentais em `calculateDiscount`

1. Execute `mvn test`.
2. Abra o método `calculateDiscount` criado na lição anterior.
3. Identifique os níveis de `if`/`else`.
4. Reorganize as condições para que cada tipo de cliente fique mais evidente.
5. Use retornos antecipados quando isso simplificar a leitura.
6. Evite criar hierarquias ou padrões de projeto nesta etapa. O objetivo aqui é **simplificar**, não arquitetar.
7. Execute `mvn test` novamente.

### Meta de leitura

Uma pessoa deve conseguir responder rapidamente:

- quanto um cliente VIP recebe abaixo de 200;
- quanto recebe a partir de 200;
- quanto um PREMIUM recebe abaixo de 1000;
- quanto recebe a partir de 1000;
- como o cupom `PROMO10` interfere no desconto.

## Reflexão

Você reduziu complexidade ou apenas moveu a complexidade para outro lugar?

## Commit sugerido

```bash
git add src
git commit -m "refactor: simplifica regras de desconto com kiss"
```
