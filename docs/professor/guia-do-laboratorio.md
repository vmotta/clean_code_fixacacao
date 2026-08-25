# Guia do professor — Laboratório Guiado de Clean Code em PHP

## Propósito

O laboratório foi desenhado para evitar uma dificuldade comum em atividades abertas de refatoração: estudantes iniciantes identificam muitos problemas ao mesmo tempo e acabam reescrevendo o sistema sem conseguir relacionar cada decisão a um princípio.

Aqui, cada lição reduz o espaço do problema.

## Organização sugerida

O laboratório pode ser realizado individualmente ou em duplas. Uma estratégia útil é fazer cada dupla explicar verbalmente uma mudança antes de commitar.

Sugestão de blocos:

- encontro 1: lições 00 a 03;
- encontro 2: lições 04 a 07;
- encontro 3: lições 08 a 11;
- encontro 4: lição 12 e Code Review.

A divisão pode ser adaptada à carga horária.

## Papel do professor

Evite fornecer a refatoração pronta. Quando um estudante perguntar “qual é a classe certa?”, responda com perguntas que revelem responsabilidade:

- o que muda junto?
- qual regra este trecho representa?
- este método faz quantas coisas reconhecíveis?
- que teste protege essa mudança?
- a nova abstração resolve um problema atual?

## O que observar

Não procure uma arquitetura final única. Observe se o estudante consegue:

- preservar comportamento;
- justificar nomes e extrações;
- diferenciar simplicidade de abstração excessiva;
- reconhecer duplicação de conhecimento;
- usar Git para mudanças incrementais;
- responder a feedback de revisão.

## Sem pontuação

A atividade não possui sistema de pontos. O fechamento pode ser feito por demonstração: cada equipe apresenta três mudanças, o princípio associado e a evidência de teste.

## Code Review

Na etapa final, troque os Pull Requests entre grupos. Oriente comentários no formato `observação → princípio → impacto → sugestão`.

Evite que o revisor simplesmente implemente a solução no lugar do autor.
