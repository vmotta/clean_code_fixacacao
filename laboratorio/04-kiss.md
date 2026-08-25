# Lição 04 — KISS

## O que você vai aprender

Você vai praticar **KISS — Keep It Simple**: preferir uma solução simples quando a complexidade adicional não traz valor.

## Teoria em linguagem simples

Cada `if`, nível de indentação e estado especial adiciona caminhos que o leitor precisa manter na cabeça. KISS não significa ignorar regras reais; significa não adicionar dificuldade que o problema não exige.

## Analogia: controle remoto com cinquenta botões

Uma televisão que só precisa ligar, trocar canal e controlar volume não se beneficia de um controle com cinquenta botões sem identificação. Mais recursos podem significar mais esforço sem valor.

## Exemplo simples em PHP

```php
if ($ativo === true) {
    return true;
} else {
    return false;
}
```

Pode ser simplesmente:

```php
return $ativo;
```

## Agora observe o Legacy Store

Vá até a lógica de desconto e procure a sequência aninhada que diferencia `VIP`, `PREMIUM` e `COMUM`.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. escreva em português simples as três regras de tipo de cliente;
2. compare essa descrição com os níveis de `if/else`;
3. reescreva a lógica de forma mais linear, usando retorno antecipado quando fizer sentido;
4. preserve percentuais e erro para tipo desconhecido;
5. não crie Strategy, Factory ou hierarquia de classes nesta etapa;
6. execute os testes.

## Pare e pense

Seria possível aplicar um padrão de projeto? Talvez. Mas o fato de algo poder ser usado não significa que precisa ser usado agora.

## Commit sugerido

```bash
git add src
git commit -m "refactor: simplifica regra de desconto"
```

## Checklist

- [ ] Mantive a regra existente.
- [ ] Reduzi complexidade acidental.
- [ ] Evitei arquitetura antecipada.
- [ ] Rodei os testes.

Próxima: **[Lição 05 — DRY](05-dry.md)**.
