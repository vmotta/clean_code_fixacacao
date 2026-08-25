# Clean Code Fixação — Design da Atividade

## Objetivo

Criar uma atividade prática para a turma de TADS que simule uma sprint real de manutenção de software legado. Os estudantes deverão analisar um sistema funcional, identificar dívida técnica, proteger o comportamento com testes, refatorar o código com base em princípios de Clean Code e colaborar usando Git, GitHub, Issues, branches, Pull Requests e Code Review.

## Base conceitual do material da disciplina

A atividade será alinhada ao e-book de Clean Code fornecido pelo professor, especialmente aos tópicos sobre:

- identificação de código ruim e dívida técnica;
- código limpo e Regra do Escoteiro;
- KISS, DRY, YAGNI e Separation of Concerns;
- nomes significativos;
- funções e métodos pequenos;
- comentários e legibilidade;
- formatação e code style;
- tratamento de erros;
- coesão e acoplamento;
- Object Calisthenics;
- colaboração, versionamento, revisão de código e Pull Requests.

## Cenário profissional

A equipe foi contratada para assumir um sistema de vendas legado chamado **Legacy Store**. O sistema está em produção e funciona, mas apresenta baixa legibilidade, responsabilidades misturadas, duplicação, números e strings mágicas, condicionais aninhadas, métodos extensos, código morto, tratamento de erros inadequado e ausência de cobertura suficiente de testes.

A regra principal é: **refatorar sem alterar o comportamento funcional esperado**.

## Público e organização

- Curso: Tecnologia em Análise e Desenvolvimento de Sistemas (TADS).
- Trabalho em equipes de 3 ou 4 estudantes.
- Papéis sugeridos: desenvolvedor, responsável por testes, revisor de código e líder técnico.
- Os papéis podem ser alternados durante a atividade.

## Stack técnica

- Java 21.
- Maven.
- JUnit 5.
- AssertJ para asserções legíveis.
- JaCoCo para cobertura.
- Git e GitHub.
- GitHub Actions para integração contínua.

A atividade não dependerá de banco de dados, framework web ou infraestrutura externa. Isso mantém o foco em qualidade de código, testes e fluxo profissional.

## Arquitetura inicial do sistema legado

O projeto terá aproximadamente 8 a 10 classes, propositalmente mal organizadas, envolvendo:

- clientes;
- produtos;
- itens de venda;
- vendas;
- descontos;
- frete;
- validações;
- emissão de relatório/recibo;
- um serviço central de venda com responsabilidades demais.

O sistema deverá ter regras observáveis e testáveis, por exemplo:

- cliente comum, VIP e PREMIUM;
- descontos diferentes por categoria e valor da compra;
- frete distinto para ES e outros estados;
- validação de CPF em nível suficiente para o exercício;
- cálculo de subtotal, desconto, frete e total;
- emissão textual de recibo.

## Defeitos pedagógicos intencionais

O código inicial deverá conter, deliberadamente:

1. nomes pouco significativos;
2. métodos grandes;
3. muitos parâmetros;
4. condicionais profundamente aninhadas;
5. uso excessivo de `else`;
6. números mágicos;
7. strings mágicas;
8. duplicação de regras;
9. classe com responsabilidades demais;
10. alto acoplamento;
11. baixa coesão;
12. código morto/comentado;
13. lógica de apresentação misturada à regra de negócio;
14. exceções genéricas ou mensagens ruins;
15. ausência de testes em trechos relevantes;
16. comentários que explicam código que deveria ser autoexplicativo;
17. formatação inconsistente em alguns pontos controlados;
18. estruturas que permitam aplicar KISS, DRY, YAGNI, SoC e Object Calisthenics.

Os defeitos devem ser didáticos e intencionais, sem tornar o projeto impossível de compreender ou compilar.

## Estratégia de testes

O projeto inicial deverá compilar e executar.

Haverá uma suíte mínima de testes de caracterização fornecida pelo professor para estabelecer o comportamento essencial do sistema. Alguns cenários permanecerão sem cobertura para que os estudantes criem novos testes antes de refatorar.

Os estudantes deverão:

1. executar a suíte existente;
2. identificar comportamentos sem proteção;
3. criar testes de caracterização adicionais;
4. refatorar;
5. executar todos os testes novamente;
6. manter o comportamento externo.

A meta pedagógica não será perseguir 100% de cobertura, mas usar testes como rede de segurança para refatoração.

## Fluxo de trabalho obrigatório

Cada equipe deverá seguir o fluxo:

`Issue → Branch → Commit → Pull Request → Code Review → Ajustes → Testes → Merge`

### Issues

Cada problema relevante deverá ser registrado ou relacionado a uma Issue contendo:

- problema observado;
- evidência no código;
- princípio relacionado;
- risco de manutenção;
- proposta de melhoria;
- critérios de aceite.

### Branches

Padrão sugerido:

- `refactor/nome-da-melhoria`
- `test/nome-do-cenario`
- `docs/nome-da-documentacao`

### Commits

Mensagens claras, por exemplo:

- `test: caracteriza desconto de cliente vip`
- `refactor: extrai calculadora de desconto`
- `refactor: remove duplicação no cálculo de frete`

Commits genéricos como `alterações`, `trabalho` ou `final` deverão ser evitados.

### Pull Requests

Cada Pull Request deverá explicar:

- problema;
- solução aplicada;
- princípios de Clean Code utilizados;
- testes executados;
- riscos;
- evidências de que o comportamento foi preservado.

## Code Review cruzado

Uma equipe deverá revisar o Pull Request de outra equipe.

O revisor deverá justificar os comentários no formato:

`problema → princípio → impacto → sugestão`

Comentários vagos, como “está ruim” ou “melhore”, não serão suficientes.

O objetivo é desenvolver comunicação técnica e capacidade de argumentação, não apenas correção de código.

## Desafios obrigatórios

### Desafio 1 — Diagnóstico de dívida técnica

A equipe deverá localizar e classificar problemas do sistema antes da refatoração.

### Desafio 2 — Nomes significativos

Renomear elementos ambíguos sem alterar comportamento.

### Desafio 3 — Funções pequenas e coesas

Reduzir métodos extensos e separar níveis de abstração.

### Desafio 4 — DRY

Eliminar pelo menos uma duplicação real de regra de negócio.

### Desafio 5 — KISS

Simplificar pelo menos uma implementação excessivamente complexa.

### Desafio 6 — YAGNI

Remover pelo menos um elemento comprovadamente desnecessário, preservando o histórico no Git.

### Desafio 7 — Separation of Concerns

Separar pelo menos uma responsabilidade da classe central de vendas.

### Desafio 8 — Tratamento de erros

Substituir tratamento genérico por uma solução mais clara e contextualizada.

### Desafio 9 — Object Calisthenics

Aplicar e justificar pelo menos duas regras, priorizando redução de indentação, eliminação de `else` quando fizer sentido, encapsulamento e entidades pequenas.

### Desafio 10 — Code Review

Revisar tecnicamente o trabalho de outra equipe e responder aos comentários recebidos.

## Entregáveis dos estudantes

Cada equipe deverá entregar:

1. repositório/fork ou branch de trabalho conforme orientação do professor;
2. Issues relacionadas às melhorias;
3. commits legíveis;
4. testes adicionados;
5. Pull Request principal;
6. Code Review realizado em outra equipe;
7. arquivo `docs/divida-tecnica.md`;
8. arquivo `docs/antes-e-depois.md` com exemplos objetivos;
9. README atualizado com decisões da equipe;
10. apresentação técnica curta.

## Rubrica de avaliação — 100 pontos

| Critério | Pontos |
|---|---:|
| Identificação e priorização de dívida técnica | 15 |
| Aplicação fundamentada de princípios de Clean Code | 20 |
| Qualidade da refatoração e preservação do comportamento | 20 |
| Testes automatizados | 15 |
| Git, branches e qualidade dos commits | 10 |
| Pull Request e documentação técnica | 10 |
| Code Review realizado em outra equipe | 5 |
| Apresentação técnica | 5 |
| **Total** | **100** |

## Apresentação final

Cada equipe deverá apresentar em 5 a 7 minutos:

1. pior problema encontrado;
2. dívida técnica eliminada;
3. princípios aplicados;
4. refatoração mais difícil;
5. contribuição do Code Review externo;
6. evidência de que os testes continuam passando.

## Estrutura planejada do repositório

```text
clean_code_fixacacao/
├── README.md
├── pom.xml
├── .gitignore
├── .github/
│   ├── workflows/
│   │   └── ci.yml
│   ├── ISSUE_TEMPLATE/
│   │   └── divida-tecnica.md
│   └── pull_request_template.md
├── docs/
│   ├── atividade-alunos.md
│   ├── guia-git.md
│   ├── guia-code-review.md
│   ├── rubrica.md
│   ├── divida-tecnica-modelo.md
│   ├── antes-e-depois-modelo.md
│   └── professor/
│       ├── guia-aplicacao.md
│       ├── mapa-de-problemas.md
│       └── solucao-referencia.md
├── src/
│   ├── main/java/br/edu/ifes/tads/legacy/
│   └── test/java/br/edu/ifes/tads/legacy/
└── docs/superpowers/
    ├── specs/
    └── plans/
```

## Separação entre material do aluno e material do professor

O repositório público terá documentação principal voltada aos estudantes. A pasta `docs/professor/` poderá conter orientações de aplicação e mapa de problemas. A solução completa de referência não deverá ficar disponível de forma óbvia antes da aplicação; se for incluída no mesmo repositório, deverá ficar em branch específica de professor ou ser adicionada apenas após a atividade.

## Critérios de sucesso do projeto

O projeto estará pronto quando:

- o sistema legado compilar com Java 21 e Maven;
- a suíte inicial passar;
- houver defeitos de Clean Code intencionais suficientes para os desafios;
- os estudantes conseguirem refatorar em incrementos pequenos;
- o CI executar testes automaticamente;
- os templates de Issue e PR orientarem o fluxo profissional;
- a atividade possuir documentação clara para alunos;
- o professor possuir um guia de aplicação e mapa de problemas;
- a rubrica estiver objetiva e alinhada aos entregáveis;
- não houver solução final exposta na branch principal antes da aplicação.
