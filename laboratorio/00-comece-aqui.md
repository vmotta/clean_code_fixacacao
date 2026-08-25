# Lição 00 — Comece aqui

## O que você vai aprender

Nesta primeira etapa você não vai refatorar nada. Seu objetivo é aprender a trabalhar com um sistema legado sem começar pela alteração do código.

A primeira habilidade de quem mantém software é **observar antes de mexer**.

## Uma analogia

Imagine que você recebe um relógio mecânico antigo que está funcionando. Você quer limpá-lo e organizar as peças. Abrir a tampa e começar a trocar engrenagens sem entender o mecanismo é arriscado: o relógio pode deixar de funcionar e você nem saberá qual mudança causou o problema.

Código legado deve ser tratado da mesma maneira. Antes de alterar a estrutura interna, precisamos conhecer o comportamento que já existe.

## 1. Prepare o projeto

Na raiz do repositório, execute:

```bash
composer install
composer test
```

Você deve ver nove testes passando.

Se algum teste falhar antes de você ter alterado qualquer arquivo, não continue a refatoração. Resolva primeiro o problema de ambiente.

## 2. Conheça os arquivos

Abra a pasta `src/Legacy` e localize `Customer.php`, `Product.php`, `SaleItem.php`, `SaleResult.php` e `LegacyStoreService.php`.

Não corrija nada ainda.

Leia `LegacyStoreService::process()` do início ao fim e tente responder mentalmente quais responsabilidades esse método parece ter, onde você precisou voltar linhas para lembrar significados e quais trechos parecem mais arriscados de alterar.

## 3. Observe os testes

Abra `tests/LegacyStoreServiceTest.php`.

Perceba que os testes não estão dizendo como o código deve ser organizado. Eles descrevem o comportamento observado: subtotal, desconto, frete, cupom, erros e recibo.

**Refatorar muda a estrutura sem mudar o comportamento esperado.**

## 4. Execute uma venda manualmente

Depois de `composer install`, execute:

```bash
php examples/demo.php
```

## Desafio guiado

Sem alterar arquivos de produção:

1. execute `composer test`;
2. abra `LegacyStoreService.php`;
3. anote três trechos difíceis de entender;
4. escreva por que cada um causa dificuldade;
5. execute `git status` e confirme que ainda não alterou o código.

## Checklist

- [ ] Instalei as dependências.
- [ ] Executei os testes antes de alterar o código.
- [ ] Li o método `process()` inteiro.
- [ ] Entendi que refatoração não é sinônimo de mudar regra de negócio.
- [ ] Identifiquei dificuldades de leitura sem tentar corrigir tudo.

Próxima: **[Lição 01 — Clean Code e Regra do Escoteiro](01-clean-code-e-regra-do-escoteiro.md)**.
