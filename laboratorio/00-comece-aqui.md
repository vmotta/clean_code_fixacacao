# 00 — Comece aqui: conheça o sistema antes de refatorar

## Objetivo

Preparar o ambiente e aprender a primeira regra de uma refatoração segura: **não altere um comportamento que você ainda não conhece**.

## O cenário

Você entrou em uma equipe que herdou o sistema **Legacy Store**. O sistema calcula subtotal, desconto, frete, total e emite um recibo textual. Ele está em produção e, apesar da aparência ruim do código, possui comportamento útil para o negócio.

Refatoração não significa “reescrever do zero”. Refatorar significa **melhorar a estrutura interna preservando o comportamento observável**.

### Analogia do laboratório

Imagine uma casa habitada. Você quer reorganizar a instalação elétrica sem deixar a família dias sem energia. Antes de mexer nos fios, você precisa saber quais lâmpadas e tomadas funcionam. Os testes automatizados cumprem esse papel: ajudam a verificar se o que funcionava continua funcionando.

## Passo 1 — Clone e entre no projeto

```bash
git clone https://github.com/vmotta/clean_code_fixacacao.git
cd clean_code_fixacacao
```

## Passo 2 — Execute a suíte

```bash
mvn test
```

Não avance se os testes não passarem.

## Passo 3 — Leia sem alterar

Abra:

- `Customer.java`
- `Product.java`
- `SaleItem.java`
- `SaleResult.java`
- `LegacyStoreService.java`
- `LegacyStoreServiceTest.java`

Tente responder:

1. O que `process()` faz do início ao fim?
2. Quais regras de desconto existem?
3. Quando o frete é gratuito?
4. O que os testes protegem?
5. Que partes parecem difíceis de alterar com segurança?

## Passo 4 — Crie sua branch de laboratório

```bash
git switch -c lab/seu-nome-clean-code
```

## Checkpoint

Antes de seguir, você deve conseguir explicar o comportamento geral do sistema sem ter modificado o código.
