# 06 — YAGNI: não carregue no presente um futuro imaginário

## Teoria

YAGNI — “You Ain't Gonna Need It” — é apresentado no material-base como a remoção de código que não traz valor atual: código comentado, classes depreciadas e elementos mantidos apenas porque “talvez sejam necessários um dia”. O histórico deve ficar a cargo do versionamento.

### Analogia do material-base

O material usa a imagem de uma pessoa no deserto carregando uma boia: o objeto pode ser útil em outro contexto, mas naquele momento só acrescenta peso.

### Analogia do laboratório

É como levar uma furadeira, uma barraca e uma panela de pressão para uma caminhada curta no parque “porque talvez precise”. Cada item aumenta o peso sem apoiar o objetivo real.

## Desafio guiado — remova peso morto

1. Execute `mvn test`.
2. Localize a constante `TAXA_QUE_TALVEZ_SEJA_USADA_UM_DIA`.
3. Descubra onde ela é usada e se essa funcionalidade participa de algum requisito/teste do sistema.
4. Localize `futureCampaign()`.
5. Localize o bloco de cashback comentado.
6. Remova o que existe apenas para um futuro hipotético.
7. Execute `mvn test`.
8. Use `git diff` e perceba que o histórico continua preservado mesmo após a remoção.

## Reflexão

Por que “deixar comentado para lembrar” é diferente de documentar uma decisão de negócio relevante?

## Commit sugerido

```bash
git add src
git commit -m "refactor: remove codigo especulativo aplicando yagni"
```
