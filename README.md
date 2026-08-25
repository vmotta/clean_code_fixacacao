# Laboratório Guiado de Clean Code em PHP

Este repositório é um laboratório de **leitura, teste e refatoração de código PHP**. Você trabalhará sempre sobre o mesmo pequeno sistema legado, o **Legacy Store**.

A proposta não é chegar rapidamente ao código “perfeito”. A proposta é aprender a melhorar software de forma segura, incremental e justificável.

## Como o laboratório funciona

Cada lição segue o mesmo ciclo:

> **ler → observar → testar → refatorar → testar novamente → refletir → commitar**

Você primeiro estuda um conceito em linguagem simples, vê uma analogia e um exemplo pequeno em PHP. Só depois abre o sistema legado e executa um desafio guiado.

## Pré-requisitos

- PHP 8.3 ou superior;
- Composer;
- Git;
- uma IDE ou editor com suporte a PHP.

Confira sua versão:

```bash
php -v
composer --version
git --version
```

## Preparação

```bash
git clone https://github.com/vmotta/clean_code_fixacacao.git
cd clean_code_fixacacao
composer install
composer test
```

A primeira execução da suíte deve terminar sem falhas. Os testes são sua rede de segurança durante as refatorações.

## Regra importante

Não tente “limpar tudo” de uma vez. O código inicial possui problemas de propósito para que você possa praticar cada conceito isoladamente.

Também não apague ou altere testes apenas para fazer uma refatoração passar. Se um teste falhar, investigue se o comportamento foi alterado.

## Comece aqui

Abra **[Lição 00 — Comece aqui](laboratorio/00-comece-aqui.md)**.

Depois siga as lições na ordem. Cada uma termina com um link para a próxima.

## Sistema estudado

O Legacy Store processa uma venda com cliente, itens, desconto, frete, cupom e recibo. O sistema funciona, mas a implementação inicial possui nomes ruins, números mágicos, duplicação, condicionais aninhadas, responsabilidades misturadas e erros genéricos.

Esses defeitos não são acidentes: são o material do laboratório.

## Sem pontuação

Esta atividade não possui pontos nem ranking. O resultado esperado é conseguir explicar, com exemplos do próprio histórico do Git, **o que mudou, por que mudou e como os testes ajudaram a preservar o comportamento**.

## Materiais de apoio

- [Guia rápido de Git](docs/guia-git.md)
- [Roteiro resumido](docs/roteiro-resumido.md)
- [Checklist final](docs/checklist-final.md)
- [Modelo Antes × Depois](docs/antes-e-depois-modelo.md)
