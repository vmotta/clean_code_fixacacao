# 12 — Refatoração final e Code Review

## Objetivo

Consolidar o laboratório sem receber uma “solução oficial” pronta. Clean Code envolve decisões de contexto; duas equipes podem chegar a estruturas diferentes e ambas serem justificáveis.

## Parte 1 — rode tudo

```bash
mvn test
```

Se algo falhar, não faça novas melhorias até recuperar o comportamento.

## Parte 2 — releia seu diagnóstico inicial

Abra `docs/meu-diagnostico.md` e classifique cada item:

- resolvido;
- parcialmente resolvido;
- não resolvido;
- deixou de fazer sentido.

## Parte 3 — Regra do Escoteiro final

Escolha **uma pequena melhoria adicional** que não exija reescrever o sistema. Exemplos:

- melhorar um nome;
- reduzir uma duplicação;
- simplificar uma condição;
- remover um setter sem uso;
- tornar uma mensagem de erro mais clara.

Rode os testes.

## Parte 4 — comparação antes × depois

Use Git:

```bash
git log --oneline
git diff <primeiro-commit>..HEAD
```

Escreva `docs/antes-e-depois.md` respondendo:

1. Qual era o trecho mais difícil de entender?
2. Qual mudança trouxe maior ganho de legibilidade?
3. Qual mudança foi mais arriscada?
4. Como os testes ajudaram?
5. Em que ponto você percebeu excesso de abstração e decidiu parar?

## Parte 5 — Code Review em dupla

Troque o repositório/branch com outra pessoa ou equipe.

Para cada comentário, use o formato:

**problema → conceito → impacto → sugestão**

Exemplo:

> O método ainda mistura cálculo e formatação → Separation of Concerns → uma mudança no recibo exige tocar na regra de venda → considere mover a montagem do texto para um componente específico.

Evite comentários vagos como “ficou ruim”, “melhore” ou “eu faria diferente”.

## Parte 6 — Pull Request

Abra um Pull Request usando o template do repositório. Explique as decisões e mostre evidências de preservação de comportamento.

## Checklist final

Use [docs/checklist-final.md](../docs/checklist-final.md).
