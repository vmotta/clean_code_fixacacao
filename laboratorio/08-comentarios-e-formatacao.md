# 08 — Comentários e formatação: comunicação para quem mantém o código

## Teoria

O material-base adota uma posição forte: quando um comentário existe apenas para explicar o que o código deveria dizer sozinho, vale tentar substituí-lo por estrutura e nomes melhores. Também recomenda confiar no Git para histórico em vez de manter código antigo comentado.

Sobre formatação, o foco apresentado é comunicação do time: organização consistente reduz atrito durante a manutenção. O material também sugere leitura de cima para baixo, com métodos principais aparecendo antes dos detalhes privados.

### Analogia do laboratório

Um texto bem escrito precisa de parágrafos, títulos e ordem. Se a única forma de entender um parágrafo é colocar uma nota explicando “o que eu quis dizer”, talvez o texto possa ser reescrito.

## Exemplo simples

Antes:

```java
// verifica se pode entrar
if (idade >= 18) {
    entrar();
}
```

Depois:

```java
if (podeEntrar(idade)) {
    entrar();
}
```

O nome do método substitui um comentário operacional.

## Desafio guiado

1. Execute `mvn test`.
2. Procure comentários que apenas narram o código.
3. Mantenha comentários que expliquem uma decisão realmente não óbvia apenas se ela não puder ser expressa melhor pelo código.
4. Apague código comentado remanescente.
5. Organize `LegacyStoreService` para leitura de cima para baixo:
   - método público principal;
   - métodos públicos auxiliares;
   - métodos privados usados pelo fluxo principal;
   - detalhes mais específicos por último.
6. Use a formatação automática da IDE.
7. Execute `mvn test`.

## Reflexão

Qual comentário removido foi substituído por um nome ou estrutura que comunica melhor?

## Commit sugerido

```bash
git add src
git commit -m "refactor: melhora comunicacao do codigo e remove comentarios obsoletos"
```
