# 10 — Coesão e acoplamento: quem faz o quê e quem conhece quem

## Teoria

O material-base define coesão como a ideia de uma unidade fazer uma única coisa, fazê-la bem e fazer apenas ela. Acoplamento representa o quanto classes dependem umas das outras. A direção desejável é **alta coesão e baixo acoplamento**.

### Analogia do laboratório

Uma equipe de restaurante funciona melhor quando há papéis claros: cozinha prepara, garçom atende, caixa recebe. Se todas as decisões passarem obrigatoriamente por uma única pessoa, essa pessoa vira um gargalo e qualquer mudança afeta o sistema inteiro.

## Exemplo simples

Uma classe chamada `CpfValidator` que valida CPF é coesa se não começar também a calcular frete, emitir recibo e enviar e-mail.

## Desafio guiado — reduza a concentração de regras no serviço

Depois das lições anteriores, `LegacyStoreService` ainda conhece cálculo de desconto e frete.

1. Execute `mvn test`.
2. Crie `DiscountCalculator` e mova para ela a regra de desconto.
3. Execute os testes.
4. Crie `ShippingCalculator` e mova para ela a regra de frete.
5. Execute os testes.
6. Faça `LegacyStoreService` coordenar o fluxo em vez de implementar todas as regras.
7. Observe se as novas classes possuem nomes e responsabilidades que podem ser explicados em uma frase.

## Cuidado com o outro extremo

Criar dezenas de classes minúsculas sem propósito claro também aumenta custo de navegação. Separe quando existir uma responsabilidade real, não para atingir uma contagem artificial de linhas.

## Reflexão

Se amanhã a regra de frete mudar, quantos arquivos precisam ser compreendidos e alterados?

## Commit sugerido

```bash
git add src
git commit -m "refactor: aumenta coesao separando desconto e frete"
```
