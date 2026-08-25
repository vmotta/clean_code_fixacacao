# 11 — Object Calisthenics: exercícios para treinar hábitos de design

## Teoria

O material-base apresenta Object Calisthenics como exercícios de programação, comparando-os ao treinamento necessário para uma maratona. A proposta não é tratar as regras como leis universais, mas usá-las para desenvolver percepção e disciplina de design.

As nove regras apresentadas no material são:

1. um único nível de indentação por método;
2. não usar `else`;
3. encapsular tipos primitivos e `String`;
4. encapsular coleções;
5. um ponto por linha;
6. não usar abreviações;
7. manter entidades pequenas;
8. no máximo duas variáveis de instância por classe;
9. evitar getters/setters/properties indiscriminados.

O próprio material alerta que algumas regras são difíceis e devem ser aplicadas conforme a maturidade do time. Portanto, neste laboratório elas serão usadas como **restrições de treino**, não como dogmas.

### Analogia do laboratório

Um jogador de futebol pode treinar apenas com a perna não dominante. Durante uma partida real ele não é proibido de usar a outra perna; a restrição existe no treino para desenvolver uma habilidade específica.

## Desafio guiado A — um nível de indentação

1. Abra `validateInput` e `calculateShipping`.
2. Use guard clauses/retornos antecipados para reduzir blocos aninhados.
3. Busque manter no máximo um nível de indentação sempre que isso deixar o código mais claro.
4. Rode os testes.

## Desafio guiado B — elimine `else` onde fizer sentido

Escolha um método em que `else` apenas aumenta a distância entre condição e resultado. Reescreva com retorno antecipado.

Não elimine `else` de forma mecânica se a nova versão ficar menos compreensível.

## Desafio guiado C — encapsule um conceito primitivo

Crie um objeto `Cpf` que receba a `String` e concentre a validação básica de 11 dígitos.

Pergunte:

- `String` representa qualquer texto;
- `Cpf` representa qualquer texto ou representa um conceito de domínio?

Faça a mudança em passos pequenos e execute os testes a cada etapa.

## Desafio guiado D — getters e setters

Observe os setters públicos de `Product`, `SaleItem` e `Customer`. Pergunte quais realmente precisam existir depois que o objeto foi criado. Remova acessos que não têm uso real no sistema.

## Commit sugerido

```bash
git add src
git commit -m "refactor: pratica object calisthenics no dominio de vendas"
```
