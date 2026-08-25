# Guia rápido de Git para o laboratório

## Ver situação atual

```bash
git status
```

## Ver alterações

```bash
git diff
```

## Criar branch

```bash
git switch -c lab/seu-nome-clean-code
```

## Registrar uma etapa

```bash
git add src
git commit -m "refactor: descreva a mudanca"
```

## Ver histórico

```bash
git log --oneline --decorate --graph
```

## Por que commits pequenos?

Um commit pequeno funciona como um checkpoint. Se uma refatoração der errado, é mais simples comparar, revisar ou voltar a um estado conhecido. O histórico também permite enxergar o percurso de aprendizagem.

## Regra deste laboratório

Evite commits como:

- `alterações`
- `final`
- `coisas`
- `funcionando`

Prefira mensagens que expliquem a intenção:

- `refactor: melhora nomes do dominio`
- `refactor: extrai calculo de frete`
- `test: caracteriza erros de entrada`
