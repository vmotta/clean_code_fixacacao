# 07 — Separation of Concerns: cada parte com sua responsabilidade

## Teoria

No material-base, Separation of Concerns (SoC) é explicado como separar responsabilidades que não pertencem ao mesmo conceito. O exemplo do material questiona colocar produtos de limpeza ao lado de alimentos dentro da mesma geladeira e mostra como uma classe `Pessoa` pode acabar acumulando responsabilidades que deveriam pertencer a `Endereco`, `Telefone`, `CPF` etc.

### Analogia do laboratório

Uma oficina mecânica pode ter recepção, estoque, elevador, caixa e área de manutenção. Todos colaboram para o mesmo serviço, mas não é eficiente colocar pagamento, ferramentas, peças e atendimento ao cliente na mesma bancada.

## Exemplo simples

Antes:

```java
class PedidoService {
    void finalizar(Pedido pedido) {
        calcularTotal();
        salvarBanco();
        montarHtml();
        enviarEmail();
    }
}
```

Há motivos de mudança diferentes misturados: regra de negócio, persistência, apresentação e comunicação.

## Desafio guiado — retire a formatação do recibo da regra de venda

1. Execute `mvn test`.
2. Observe `buildReceipt(...)` dentro de `LegacyStoreService`.
3. Pergunte: “montar texto de recibo” é a mesma responsabilidade de “calcular uma venda”?
4. Crie uma classe `ReceiptFormatter`.
5. Mova para ela a responsabilidade de gerar o texto.
6. Faça `LegacyStoreService` depender dessa classe da forma mais simples possível.
7. Não altere o conteúdo do recibo ainda; os testes devem proteger isso.
8. Execute `mvn test`.

## Desafio extra opcional

Observe `Customer`: nome, tipo, CPF, estado e e-mail representam conceitos diferentes. Não refatore tudo agora. Apenas marque quais objetos de valor poderiam existir no futuro, como `Cpf` ou `CustomerType`.

## Commit sugerido

```bash
git add src
git commit -m "refactor: separa formatacao do recibo da regra de venda"
```
