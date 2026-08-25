# Lição 06 — YAGNI

## O que você vai aprender

Você vai praticar **YAGNI — You Aren't Gonna Need It** e usar o Git como argumento para remover código sem necessidade atual.

## Teoria em linguagem simples

Código mantido porque “talvez um dia seja útil” continua tendo custo hoje: precisa ser lido, compreendido e considerado em mudanças.

YAGNI não significa apagar funcionalidade necessária. Significa não manter complexidade baseada apenas em futuro imaginário.

## Analogia: equipamento de neve na praia

Levar correntes para pneus e uma pá de neve para um fim de semana na praia ocupa espaço sem resolver um problema atual.

## Agora observe o Legacy Store

Procure a variável de futura taxa e o método `futureLoyaltyPoints()`.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. pesquise todas as referências a `$futureTax`;
2. pesquise todas as referências a `futureLoyaltyPoints`;
3. confirme que não participam do comportamento atual;
4. remova primeiro a variável;
5. execute os testes;
6. remova o método sem uso;
7. execute os testes novamente;
8. use `git diff` para observar o que saiu.

## Pare e pense

Se algo for necessário no futuro, o histórico do Git continuará existindo. O requisito futuro deve ser implementado com o contexto e os testes daquele momento.

## Commit sugerido

```bash
git add src
git commit -m "refactor: remove codigo sem uso"
```

## Checklist

- [ ] Confirmei ausência de uso antes de apagar.
- [ ] Usei busca global.
- [ ] Mantive testes passando.
- [ ] Entendi o papel do Git como histórico.

Próxima: **[Lição 07 — Separation of Concerns](07-separation-of-concerns.md)**.
