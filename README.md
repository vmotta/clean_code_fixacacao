# Laboratório Guiado de Clean Code — Refatorando um Sistema Legado

Este repositório contém um laboratório prático e progressivo de **Clean Code**. A proposta não é apenas ler conceitos: você irá **ler uma lição curta, observar um problema real no código, executar testes, refatorar em pequenos passos, testar novamente e registrar a evolução com Git**.

> **Regra do laboratório:** o sistema deve continuar funcionando durante toda a refatoração.

## Como aprender neste laboratório

Cada lição segue o mesmo ciclo:

**LER → OBSERVAR → TESTAR → REFATORAR → TESTAR NOVAMENTE → REFLETIR → COMMITAR**

O sistema inicial se chama **Legacy Store**. Ele funciona, mas foi escrito com vários problemas intencionais de legibilidade, duplicação, responsabilidades misturadas, condicionais aninhadas, comentários desnecessários e tratamento de erros pobre.

## Material-base

A sequência conceitual foi organizada a partir do material **Clean Code – Codificação Limpa**, de Prof. Wagner Mendes Voltz, principalmente nos tópicos: Regra do Escoteiro, KISS, DRY, YAGNI, Separation of Concerns, nomes significativos, funções e métodos, comentários, formatação, tratamento de erros, coesão/acoplamento e Object Calisthenics.

As analogias e exemplos marcados como **“Analogia do laboratório”** foram criados especificamente para esta atividade didática.

## Pré-requisitos

- Java 21
- Maven 3.9+
- Git
- IDE de sua preferência

## Primeiro comando

```bash
mvn test
```

Antes de modificar qualquer linha, confirme que os testes estão verdes.

## Roteiro

1. [00 — Comece aqui](laboratorio/00-comece-aqui.md)
2. [01 — O que é Clean Code e Regra do Escoteiro](laboratorio/01-clean-code-e-regra-do-escoteiro.md)
3. [02 — Nomes significativos](laboratorio/02-nomes-significativos.md)
4. [03 — Funções pequenas](laboratorio/03-funcoes-pequenas.md)
5. [04 — KISS](laboratorio/04-kiss.md)
6. [05 — DRY](laboratorio/05-dry.md)
7. [06 — YAGNI](laboratorio/06-yagni.md)
8. [07 — Separation of Concerns](laboratorio/07-separation-of-concerns.md)
9. [08 — Comentários e formatação](laboratorio/08-comentarios-e-formatacao.md)
10. [09 — Tratamento de erros](laboratorio/09-tratamento-de-erros.md)
11. [10 — Coesão e acoplamento](laboratorio/10-coesao-e-acoplamento.md)
12. [11 — Object Calisthenics](laboratorio/11-object-calisthenics.md)
13. [12 — Refatoração final e Code Review](laboratorio/12-refatoracao-final-e-code-review.md)

Não pule etapas: as lições foram planejadas para que o mesmo código evolua gradualmente.

## Não é uma atividade por pontuação

Este laboratório não possui nota ou pontuação interna. O objetivo é concluir o percurso, manter o comportamento do sistema e conseguir justificar tecnicamente as decisões de refatoração.

## Critério principal de sucesso

Ao final, compare o primeiro commit com o último. Você deve conseguir explicar **por que a versão final é mais fácil de entender, testar e modificar**, sem usar apenas a frase “ficou mais bonito”.
