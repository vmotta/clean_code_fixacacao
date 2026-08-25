# Modelo — Antes × Depois

> Copie este arquivo para `docs/antes-e-depois.md` ao final do laboratório.

## 1. Trecho mais difícil no início

Descreva o problema sem apenas dizer “estava feio”. Explique o custo de leitura, teste ou manutenção.

## 2. Mudança que mais melhorou a legibilidade

Mostre um pequeno trecho antes e depois ou descreva a estrutura alterada.

## 3. Mudança mais arriscada

Explique qual regra de negócio poderia ter sido quebrada e quais testes deram segurança.

## 4. Conceitos aplicados

Relacione suas decisões com os conceitos trabalhados no laboratório: nomes, funções pequenas, KISS, DRY, YAGNI, SoC, erros, coesão/acoplamento ou Object Calisthenics.

## 5. O que você decidiu não refatorar?

Explique onde preferiu parar para não criar abstrações desnecessárias.

## 6. Evidência final

```bash
mvn test
git log --oneline
```

Registre o resultado e o intervalo de commits usado para comparar o sistema inicial e final.
