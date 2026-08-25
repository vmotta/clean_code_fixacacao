# Guia do professor — Laboratório Guiado de Clean Code

## Proposta

Este laboratório foi desenhado para transformar a leitura do material de Clean Code em prática incremental. O aluno trabalha sobre um único sistema legado e percorre o ciclo teoria → observação → teste → refatoração → teste → reflexão → commit.

## Duração sugerida

Pode ser realizado em 2 a 4 encontros, dependendo do nível da turma.

### Encontro 1

- 00 — ambiente e testes
- 01 — Clean Code e Regra do Escoteiro
- 02 — nomes
- 03 — funções pequenas

### Encontro 2

- 04 — KISS
- 05 — DRY
- 06 — YAGNI
- 07 — SoC

### Encontro 3

- 08 — comentários/formatação
- 09 — erros
- 10 — coesão/acoplamento
- 11 — Object Calisthenics

### Encontro 4 opcional

- refatoração final
- comparação de versões
- Code Review cruzado
- Pull Request

## Estratégia de mediação

Evite corrigir o código diretamente. Quando alguém pedir “qual é a solução?”, devolva perguntas como:

- O que este método está tentando dizer?
- Quantas responsabilidades você enxerga aqui?
- Qual teste protege essa regra?
- Se a regra mudar amanhã, quantos lugares mudam?
- Esta abstração deixou a leitura mais simples ou apenas mais indireta?

## O que observar

O objetivo não é que todas as equipes terminem com a mesma arquitetura. Observe se conseguem:

- preservar comportamento;
- justificar decisões;
- trabalhar incrementalmente;
- usar testes como rede de segurança;
- reconhecer trade-offs;
- evitar “refatorações” que alterem regra de negócio sem intenção.

## Material-base e limites

A teoria segue a terminologia e a sequência do material fornecido: Regra do Escoteiro, KISS, DRY, YAGNI, Separation of Concerns, nomes significativos, funções/métodos, comentários, formatação, erros, coesão/acoplamento e Object Calisthenics. As analogias adicionais do laboratório foram criadas para facilitar a compreensão da turma.

## Não há pontuação interna

O laboratório usa checklist e discussão técnica, não uma rubrica numérica. Caso a disciplina necessite avaliar participação ou entrega, isso pode ser feito externamente sem transformar cada microetapa em pontuação.
