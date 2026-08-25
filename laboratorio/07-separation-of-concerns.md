# Lição 07 — Separation of Concerns

## O que você vai aprender

Você vai separar responsabilidades que hoje estão concentradas em uma única classe.

## Teoria em linguagem simples

**Separation of Concerns** significa evitar que uma unidade de código conheça detalhes de assuntos diferentes sem necessidade.

No Legacy Store, uma única classe sabe validar, calcular valores e formatar um recibo. Essas responsabilidades mudam por motivos diferentes.

## Analogia: gavetas de cozinha

Talheres, produtos de limpeza e temperos podem caber na mesma gaveta, mas pertencem a contextos diferentes. Separação facilita encontrar e alterar cada coisa sem interferir nas outras.

## Exemplo simples em PHP

Uma classe que calcula total e formata texto mistura regra e apresentação. Uma separação útil pode deixar cálculo e recibo em componentes diferentes.

## Agora observe o Legacy Store

Encontre o bloco que monta a string do recibo e pergunte se ele calcula regras ou apenas apresenta valores já prontos.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. crie uma nova classe para representar a geração do recibo;
2. dê a ela um nome que revele propósito;
3. mova apenas a responsabilidade de formatação;
4. faça `LegacyStoreService` delegar a geração do texto;
5. preserve as informações essenciais esperadas pelos testes;
6. execute `composer test`.

Não transforme cada linha em uma classe. Separation of Concerns é sobre fronteiras úteis.

## Commit sugerido

```bash
git add src
git commit -m "refactor: separa geracao do recibo"
```

## Checklist

- [ ] Identifiquei responsabilidades que mudam por razões diferentes.
- [ ] Extraí uma responsabilidade coerente.
- [ ] Evitei classes sem propósito claro.
- [ ] Mantive os testes passando.

Próxima: **[Lição 08 — Comentários e formatação](08-comentarios-e-formatacao.md)**.
