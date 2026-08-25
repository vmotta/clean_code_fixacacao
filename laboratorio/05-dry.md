# Lição 05 — DRY

## O que você vai aprender

Você vai aprender a reconhecer duplicação de **conhecimento**, não apenas linhas parecidas, e remover uma repetição real da regra de frete.

## Teoria em linguagem simples

DRY significa **Don't Repeat Yourself**. Quando a mesma regra aparece em vários lugares, uma mudança futura precisa ser aplicada de forma consistente em todos eles.

Mas duas linhas parecidas não são automaticamente a mesma regra. Pergunte: **se a regra mudar, estes trechos deveriam mudar juntos?**

## Analogia: duas listas de preços

Se uma loja mantém duas tabelas independentes de preços, cada alteração precisa ser repetida. Uma única fonte reduz divergência.

## Exemplo simples em PHP

```php
$freteEs = 10;
if ($expresso) {
    $freteEs += 15;
}

$freteMg = 20;
if ($expresso) {
    $freteMg += 15;
}
```

O conhecimento duplicado é “entrega expressa adiciona 15”.

## Agora observe o Legacy Store

Na regra de frete, o adicional de entrega expressa aparece em vários ramos.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. localize todas as ocorrências do adicional expresso;
2. confirme que representam a mesma regra;
3. mantenha as diferenças de frete por estado/região;
4. centralize o adicional em um único ponto;
5. execute os testes;
6. busque novamente o valor no arquivo para confirmar que a regra não ficou espalhada.

## Pare e pense

DRY não é “não repetir caracteres”. É evitar múltiplas representações independentes da mesma decisão.

## Commit sugerido

```bash
git add src
git commit -m "refactor: remove duplicacao no adicional de frete expresso"
```

## Checklist

- [ ] Identifiquei duplicação de regra real.
- [ ] Centralizei o conhecimento.
- [ ] Não criei abstração por coincidência visual.
- [ ] Executei os testes.

Próxima: **[Lição 06 — YAGNI](06-yagni.md)**.
