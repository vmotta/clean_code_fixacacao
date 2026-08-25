# Lição 09 — Tratamento de erros

## O que você vai aprender

Você vai melhorar a forma como o sistema comunica situações inválidas e perceber que mensagem de erro faz parte da manutenibilidade.

## Teoria em linguagem simples

Uma exceção com a mensagem `Erro` informa que houve um problema, mas não qual problema. Isso aumenta o tempo de diagnóstico.

Tratamento de erro limpo procura separar fluxo normal de fluxo excepcional e usa mensagens ou tipos que expressem contexto.

## Analogia: painel de um carro

Se combustível baixo, porta aberta e superaquecimento acendessem a mesma luz “ERRO”, o motorista saberia que existe um problema, mas não saberia o que fazer.

## Exemplo simples em PHP

```php
throw new RuntimeException('Erro');
```

Pode ser mais contextual:

```php
throw new InvalidArgumentException('A venda precisa possuir pelo menos um item.');
```

## Agora observe o Legacy Store

Os testes iniciais caracterizam a mensagem genérica porque ela faz parte do comportamento legado. Nesta lição, você está **autorizado a melhorar esse comportamento**.

## Desafio guiado

1. escolha o cenário de venda vazia;
2. altere ou crie um teste para esperar uma mensagem contextualizada;
3. execute `composer test` e confirme que esse teste falha;
4. implemente a nova mensagem;
5. execute a suíte novamente;
6. repita o ciclo para quantidade inválida ou tipo desconhecido;
7. avalie se `InvalidArgumentException` comunica melhor o problema do que `RuntimeException`.

## Pare e pense

Esta é uma mudança intencional de comportamento. O teste primeiro deixa explícito que você não está introduzindo uma regressão acidental.

## Commit sugerido

```bash
git add src tests
git commit -m "refactor: melhora contexto dos erros de venda"
```

## Checklist

- [ ] Escrevi a nova expectativa antes da implementação.
- [ ] Usei mensagens contextualizadas.
- [ ] Mantive o restante da suíte passando.
- [ ] Consigo explicar a diferença entre refatoração estrutural e mudança intencional.

Próxima: **[Lição 10 — Coesão e acoplamento](10-coesao-e-acoplamento.md)**.
