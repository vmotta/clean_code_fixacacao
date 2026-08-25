# Lição 11 — Object Calisthenics

## O que você vai aprender

Você vai usar algumas regras de **Object Calisthenics** como exercícios de treino para perceber hábitos de design.

## Teoria em linguagem simples

Object Calisthenics é um conjunto de restrições de prática deliberada. A ideia é semelhante a um exercício de academia: você aceita uma limitação por algum tempo para desenvolver uma habilidade.

Entre as regras conhecidas estão reduzir aninhamento, evitar `else` quando retorno antecipado deixa a intenção clara, encapsular valores de domínio, evitar abreviações e manter entidades pequenas.

Não trate essas regras como leis universais. Use-as para provocar decisões conscientes.

## Analogia: treino com peso

Um corredor pode fazer agachamentos para desenvolver força. O objetivo não é competir fazendo agachamentos; é melhorar outra atividade. Object Calisthenics funciona como treino para design.

## Exemplo simples — retorno antecipado

```php
function podeComprar(Cliente $cliente): bool
{
    if (!$cliente->ativo) {
        return false;
    }

    return true;
}
```

## Agora observe sua versão

Escolha **duas** regras para experimentar. Boas candidatas neste laboratório:

1. um nível de indentação por método;
2. reduzir `else` com retorno antecipado;
3. evitar abreviações;
4. encapsular um valor com significado de domínio.

## Desafio guiado

Para a primeira regra, escolha um método ainda aninhado e reduza níveis por extração ou retorno antecipado. Execute os testes.

Para a segunda, aplique a restrição em um local pequeno. Se encapsular um primitivo, pergunte antes se o valor possui regras próprias e se o novo objeto terá propósito além de apenas embrulhar um tipo.

Execute os testes novamente.

## Pare e pense

Registre qual regra ajudou, o que melhorou e o que ficaria exagerado se fosse levada ao extremo.

## Commit sugerido

```bash
git add src tests docs
git commit -m "refactor: aplica exercicios de object calisthenics"
```

## Checklist

- [ ] Apliquei duas regras como exercícios.
- [ ] Não tratei as regras como dogmas.
- [ ] Mantive o comportamento protegido.
- [ ] Registrei benefícios e limites percebidos.

Próxima: **[Lição 12 — Refatoração final e Code Review](12-refatoracao-final-e-code-review.md)**.
