# 03 — Funções pequenas: uma história lida de cima para baixo

## Teoria

O material-base apresenta funções e métodos como uma primeira linha de organização. A orientação é mantê-los pequenos, com poucos parâmetros, em um mesmo nível de abstração e organizados para leitura de cima para baixo. A relação com coesão é direta: uma função deve fazer poucas coisas e fazê-las bem.

### Analogia do laboratório

Uma receita culinária clara não descreve em uma única frase como descascar, cortar, temperar, aquecer, montar e servir. Ela divide o trabalho em etapas com nomes que ajudam o leitor a acompanhar a história.

## Exemplo simples

Antes:

```java
void registrarPedido(Pedido pedido) {
    // valida
    // calcula
    // salva
    // envia e-mail
    // imprime relatório
}
```

Depois, o método principal pode revelar a sequência:

```java
void registrarPedido(Pedido pedido) {
    validar(pedido);
    calcular(pedido);
    salvar(pedido);
    notificarCliente(pedido);
}
```

A ideia não é criar métodos por criar. É separar responsabilidades e níveis de abstração.

## Desafio guiado — transforme `process()` em uma sequência legível

### Passo 1

```bash
mvn test
```

### Passo 2 — extraia somente a validação

Crie um método privado:

```java
private void validateInput(Customer customer, List<SaleItem> items)
```

Mova para ele apenas as validações já existentes. **Não tente melhorar os `if` ainda.**

Rode os testes.

### Passo 3 — extraia subtotal

Crie:

```java
private double calculateSubtotal(List<SaleItem> items)
```

Rode os testes.

### Passo 4 — extraia desconto

Crie:

```java
private double calculateDiscount(Customer customer, double subtotal, String coupon)
```

Rode os testes.

### Passo 5 — extraia frete

Crie:

```java
private double calculateShipping(Customer customer, double subtotal, boolean expressShipping)
```

Rode os testes.

### Passo 6 — extraia recibo

Crie:

```java
private String buildReceipt(Customer customer, double subtotal, double discount, double shipping, double total)
```

Rode os testes.

### Passo 7 — leia `process()` novamente

A intenção é que o método principal agora mostre uma narrativa aproximada:

```text
validar → calcular subtotal → calcular desconto → calcular frete → calcular total → montar recibo
```

Não copie uma solução final pronta: use a extração de métodos da IDE e preserve o comportamento.

## Reflexão

Quais métodos agora podem ser testados ou evoluídos isoladamente com mais facilidade?

## Commit sugerido

```bash
git add src
git commit -m "refactor: extrai responsabilidades do processamento da venda"
```
