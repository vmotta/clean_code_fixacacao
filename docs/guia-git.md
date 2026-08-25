# Guia rápido de Git para o laboratório

O Git é parte do exercício porque permite acompanhar a evolução do código e voltar a estados anteriores.

## Antes de começar uma lição

```bash
git status
git pull
composer test
```

## Faça mudanças pequenas

Evite um único commit chamado `atividade pronta`.

Prefira commits que contem uma história:

```text
refactor: melhora nomes do processamento da venda
refactor: extrai calculo de subtotal
refactor: simplifica regra de desconto
refactor: remove duplicacao do frete expresso
refactor: remove codigo sem uso
refactor: separa geracao do recibo
```

## Veja o que mudou

```bash
git diff
git status
git log --oneline
```

## Branch sugerida

```bash
git switch -c laboratorio/seu-nome
```

## Antes do Pull Request

```bash
composer test
git status
git log --oneline --decorate
```

A suíte precisa estar verde antes de abrir o PR.
