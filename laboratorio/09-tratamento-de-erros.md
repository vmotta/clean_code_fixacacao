# 09 — Tratamento de erros: falhar de forma clara também é parte do design

## Teoria

O material-base destaca que tratamento de erros mantém o controle da aplicação diante de situações inesperadas. Também recomenda mensagens claras e contextualizadas e, quando fizer sentido, exceções personalizadas.

### Analogia do laboratório

Compare duas mensagens em um painel de carro:

- “ERRO”
- “Pressão do pneu dianteiro direito abaixo do recomendado”

As duas indicam problema, mas só uma ajuda alguém a decidir o próximo passo.

## Problema atual

O sistema lança:

```java
throw new IllegalArgumentException("erro");
```

para situações diferentes. Quem recebe a exceção não sabe se o problema foi cliente nulo, lista vazia ou CPF inválido.

## Desafio guiado

### Passo 1 — caracterize antes de melhorar

Antes de mudar as mensagens, adicione testes para pelo menos estas situações:

- cliente nulo;
- lista de itens nula;
- lista vazia;
- CPF inválido.

Execute os testes e confirme o comportamento atual.

### Passo 2 — crie uma exceção de domínio

Crie:

```java
public class InvalidSaleException extends RuntimeException
```

com construtor que receba uma mensagem.

### Passo 3 — torne as mensagens contextuais

Exemplos de intenção:

- `Customer is required`
- `Sale must contain at least one item`
- `CPF must contain 11 digits`

Você pode usar mensagens em português se preferir, desde que sejam claras e consistentes.

### Passo 4

Atualize os testes para a nova regra e execute:

```bash
mvn test
```

## Reflexão

Uma exceção específica melhora apenas a experiência do usuário final ou também ajuda quem desenvolve e monitora o sistema?

## Commit sugerido

```bash
git add src
git commit -m "refactor: melhora tratamento e contexto dos erros"
```
