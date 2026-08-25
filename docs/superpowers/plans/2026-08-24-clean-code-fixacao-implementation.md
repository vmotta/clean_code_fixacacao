# Clean Code Fixação Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Construir um desafio completo de Clean Code para TADS, baseado em um sistema legado funcional que permita diagnóstico de dívida técnica, criação de testes, refatoração, Git, Pull Requests e Code Review sem atribuição de pontuação.

**Architecture:** O repositório terá um pequeno domínio de vendas em Java 21, deliberadamente escrito com problemas de legibilidade, coesão, acoplamento, duplicação, condicionais aninhadas, números mágicos e tratamento de erros genérico. Uma suíte inicial de testes de caracterização protege comportamentos essenciais; GitHub Actions executa `mvn verify`; a documentação guia o desafio sem revelar uma solução pronta.

**Tech Stack:** Java 21, Maven 3, JUnit 5, AssertJ, JaCoCo, GitHub Actions, Markdown.

**Spec:** `docs/superpowers/specs/2026-08-24-clean-code-fixacao-design.md`

## Global Constraints

- A atividade é um desafio formativo e não possui pontuação, nota ou ranking obrigatório.
- A branch principal não deve conter solução de referência nem mapa completo de respostas.
- O sistema inicial deve compilar e executar com Java 21 e Maven.
- Os defeitos de Clean Code são intencionais e não podem impedir a compreensão ou execução do sistema.
- Os testes iniciais devem proteger apenas parte do comportamento, deixando espaço para os estudantes criarem testes adicionais.
- O fluxo profissional esperado é `Issue → Branch → Testes → Refatoração → Commit → Pull Request → Code Review → Ajustes → Merge`.
- A documentação deve estar escrita em português e direcionada a estudantes de TADS.

---

## File Map

### Build e automação
- `pom.xml`: dependências, Java 21, Surefire e JaCoCo.
- `.gitignore`: arquivos de IDE e build.
- `.github/workflows/ci.yml`: build e testes em push/PR.
- `.github/ISSUE_TEMPLATE/divida-tecnica.md`: template para registrar dívida técnica.
- `.github/pull_request_template.md`: checklist de PR.

### Código legado
- `src/main/java/br/edu/ifes/tads/legacy/Cliente.java`: entidade de cliente.
- `src/main/java/br/edu/ifes/tads/legacy/Produto.java`: entidade de produto.
- `src/main/java/br/edu/ifes/tads/legacy/ItemVenda.java`: item de venda.
- `src/main/java/br/edu/ifes/tads/legacy/Venda.java`: agregação simples da venda.
- `src/main/java/br/edu/ifes/tads/legacy/ResultadoVenda.java`: resultado observável da operação.
- `src/main/java/br/edu/ifes/tads/legacy/Validacoes.java`: validações utilitárias propositalmente mal organizadas.
- `src/main/java/br/edu/ifes/tads/legacy/RelatorioVenda.java`: emissão textual de recibo com acoplamento desnecessário.
- `src/main/java/br/edu/ifes/tads/legacy/VendaService.java`: classe central propositalmente grande e pouco coesa.
- `src/main/java/br/edu/ifes/tads/legacy/CalculadoraAntiga.java`: código sem uso para discutir YAGNI.

### Testes
- `src/test/java/br/edu/ifes/tads/legacy/VendaServiceCaracterizacaoTest.java`: comportamentos essenciais do sistema legado.
- `src/test/java/br/edu/ifes/tads/legacy/ValidacoesCaracterizacaoTest.java`: comportamento mínimo de CPF.

### Documentação
- `README.md`: entrada principal do desafio.
- `docs/atividade-alunos.md`: enunciado completo e etapas.
- `docs/guia-git.md`: fluxo Git/GitHub.
- `docs/guia-code-review.md`: como revisar tecnicamente.
- `docs/criterios-conclusao.md`: critérios qualitativos, sem pontos.
- `docs/divida-tecnica-modelo.md`: modelo de diagnóstico.
- `docs/antes-e-depois-modelo.md`: modelo para registrar refatorações.
- `docs/professor/guia-aplicacao.md`: facilitação sem gabarito.

---

### Task 1: Criar o esqueleto de build e o primeiro teste de caracterização

**Files:**
- Create: `pom.xml`
- Create: `.gitignore`
- Create: `src/test/java/br/edu/ifes/tads/legacy/VendaServiceCaracterizacaoTest.java`

**Interfaces:**
- Consumes: nenhuma.
- Produces: expectativa pública para `VendaService.processarVenda(Venda)` e `ResultadoVenda`.

- [ ] **Step 1: Criar teste RED para venda VIP em ES**

O teste deve criar cliente VIP, produto de R$ 100,00, quantidade 5 e esperar:
- subtotal = 500,00;
- desconto = 50,00;
- frete = 20,00;
- total = 470,00.

- [ ] **Step 2: Executar o teste e confirmar falha por classes inexistentes**

Run: `mvn -q -Dtest=VendaServiceCaracterizacaoTest test`
Expected: FAIL de compilação porque as classes do domínio ainda não existem.

- [ ] **Step 3: Criar `pom.xml` com Java 21, JUnit 5, AssertJ, Surefire e JaCoCo**

- [ ] **Step 4: Commit do teste e build inicial**

Commit: `test: define primeiro comportamento do legacy store`

---

### Task 2: Implementar o domínio mínimo para tornar o primeiro cenário verde

**Files:**
- Create: `Cliente.java`
- Create: `Produto.java`
- Create: `ItemVenda.java`
- Create: `Venda.java`
- Create: `ResultadoVenda.java`
- Create: `VendaService.java`

**Interfaces:**
- `Cliente(String nome, String cpf, String tipo, String uf)`
- `Produto(String codigo, String nome, double preco)`
- `ItemVenda(Produto produto, int quantidade)`
- `Venda(Cliente cliente)` + `adicionarItem(ItemVenda item)`
- `ResultadoVenda(double subtotal, double desconto, double frete, double total, String recibo)`
- `VendaService.processarVenda(Venda venda): ResultadoVenda`

- [ ] **Step 1: Implementar apenas o necessário para o cenário VIP/ES**

Usar intencionalmente variáveis locais curtas, números mágicos e condicionais aninhadas dentro de `VendaService`, preservando clareza suficiente para o exercício.

- [ ] **Step 2: Executar teste GREEN**

Run: `mvn -q -Dtest=VendaServiceCaracterizacaoTest test`
Expected: PASS.

- [ ] **Step 3: Commit**

Commit: `feat: implementa fluxo legado minimo de vendas`

---

### Task 3: Expandir os comportamentos de caracterização e defeitos pedagógicos

**Files:**
- Modify: `VendaServiceCaracterizacaoTest.java`
- Create: `ValidacoesCaracterizacaoTest.java`
- Create: `Validacoes.java`
- Create: `RelatorioVenda.java`
- Create: `CalculadoraAntiga.java`
- Modify: `VendaService.java`

**Interfaces:**
- `Validacoes.cpf(String cpf): boolean`
- `RelatorioVenda.gerar(Venda venda, double subtotal, double desconto, double frete, double total): String`

- [ ] **Step 1: Adicionar teste RED para cliente PREMIUM fora do ES**

Cenário: subtotal 200, desconto 15%, frete 50, total 220.

- [ ] **Step 2: Executar e confirmar falha funcional esperada**

Run: `mvn -q -Dtest=VendaServiceCaracterizacaoTest test`
Expected: pelo menos um FAIL de asserção.

- [ ] **Step 3: Implementar regra PREMIUM e frete fora do ES**

- [ ] **Step 4: Adicionar teste RED para cliente COMUM com subtotal acima de 1000**

Cenário: subtotal 1200, desconto fixo 50, frete ES 20, total 1170.

- [ ] **Step 5: Executar RED, implementar e tornar GREEN**

- [ ] **Step 6: Adicionar testes RED para CPF válido e CPF inválido**

A validação didática mínima aceita exatamente 11 dígitos e rejeita sequências com todos os dígitos iguais.

- [ ] **Step 7: Implementar `Validacoes` com estilo propositalmente ruim e tornar GREEN**

- [ ] **Step 8: Misturar geração de recibo à operação por meio de `RelatorioVenda`, incluindo acoplamento e strings mágicas intencionais**

- [ ] **Step 9: Adicionar `CalculadoraAntiga` sem uso para discussão de YAGNI**

- [ ] **Step 10: Executar suíte completa**

Run: `mvn -q test`
Expected: PASS.

- [ ] **Step 11: Commit**

Commit: `feat: completa comportamentos do sistema legado`

---

### Task 4: Criar automação e templates de colaboração

**Files:**
- Create: `.github/workflows/ci.yml`
- Create: `.github/ISSUE_TEMPLATE/divida-tecnica.md`
- Create: `.github/pull_request_template.md`

- [ ] **Step 1: Configurar CI para checkout, JDK 21 e `mvn -B verify`**

- [ ] **Step 2: Criar template de Issue com problema, evidência, princípio, impacto, proposta e critérios de aceite**

- [ ] **Step 3: Criar template de PR com problema, solução, princípios, testes, riscos, evidências e checklist de review**

- [ ] **Step 4: Validar localmente o comando usado pelo CI**

Run: `mvn -B verify`
Expected: BUILD SUCCESS.

- [ ] **Step 5: Commit**

Commit: `ci: adiciona verificacao automatica e templates`

---

### Task 5: Criar documentação principal do desafio

**Files:**
- Create: `README.md`
- Create: `docs/atividade-alunos.md`
- Create: `docs/criterios-conclusao.md`

- [ ] **Step 1: Escrever README com cenário, missão, stack, início rápido e fluxo profissional**

- [ ] **Step 2: Escrever enunciado com 10 desafios qualitativos**

Os desafios devem cobrir: diagnóstico, nomes, funções pequenas, DRY, KISS, YAGNI, separação de responsabilidades, tratamento de erros, Object Calisthenics e Code Review.

- [ ] **Step 3: Criar critérios de conclusão sem pontuação**

Usar estados qualitativos: `não demonstrado`, `parcialmente demonstrado`, `demonstrado` e `demonstrado com excelência`, sem converter em nota.

- [ ] **Step 4: Commit**

Commit: `docs: publica enunciado do clean code challenge`

---

### Task 6: Criar guias de Git, Code Review e evidências

**Files:**
- Create: `docs/guia-git.md`
- Create: `docs/guia-code-review.md`
- Create: `docs/divida-tecnica-modelo.md`
- Create: `docs/antes-e-depois-modelo.md`

- [ ] **Step 1: Documentar branch, commit, push e abertura de PR**

- [ ] **Step 2: Documentar Code Review no formato `problema → princípio → impacto → sugestão`**

- [ ] **Step 3: Criar modelo de dívida técnica com tabela de prioridade qualitativa**

- [ ] **Step 4: Criar modelo Antes × Depois com código, justificativa e evidência de testes**

- [ ] **Step 5: Commit**

Commit: `docs: adiciona guias de colaboracao e evidencias`

---

### Task 7: Criar guia do professor sem expor gabarito

**Files:**
- Create: `docs/professor/guia-aplicacao.md`

- [ ] **Step 1: Documentar preparação da aula, formação de equipes e divisão de papéis**

- [ ] **Step 2: Documentar checkpoints sugeridos sem revelar localização exata dos problemas**

- [ ] **Step 3: Incluir categorias opcionais de reconhecimento**

Categorias: Melhor Resgate de Código Legado, Melhor Code Review, Melhor Uso de Testes e Melhor Evolução Antes × Depois. Nenhuma categoria vale pontos.

- [ ] **Step 4: Commit**

Commit: `docs: adiciona guia de aplicacao para o professor`

---

### Task 8: Verificação final e publicação no GitHub

**Files:**
- Review: todos os arquivos anteriores.

- [ ] **Step 1: Executar suíte completa**

Run: `mvn clean verify`
Expected: BUILD SUCCESS e zero falhas de teste.

- [ ] **Step 2: Verificar que a branch principal não contém solução pronta nem mapa de respostas**

- [ ] **Step 3: Verificar README, links relativos e instruções de execução**

- [ ] **Step 4: Criar Pull Request da branch de montagem para `main`**

Título: `feat: monta Clean Code Challenge para TADS`

- [ ] **Step 5: Revisar diff do PR e confirmar que apenas arquivos do desafio foram adicionados**

- [ ] **Step 6: Integrar somente após verificação do build/CI**

---

## Completion Checklist

- [ ] Java 21 configurado.
- [ ] `mvn clean verify` passa.
- [ ] Testes de caracterização cobrem cenários essenciais, mas não todos.
- [ ] Código contém dívida técnica intencional suficiente para investigação.
- [ ] Não há pontuação em nenhum documento.
- [ ] Não há gabarito exposto.
- [ ] GitHub Actions executa Maven.
- [ ] Template de Issue orienta diagnóstico.
- [ ] Template de PR orienta refatoração e testes.
- [ ] README explica como iniciar o desafio.
- [ ] Guia de Code Review ensina feedback técnico.
- [ ] Critérios de conclusão são qualitativos.
- [ ] Guia do professor não revela as respostas.
