# Lição 10 — Coesão e acoplamento

## O que você vai aprender

Você vai analisar se classes fazem um conjunto coerente de coisas e como dependências entre classes afetam facilidade de mudança.

## Teoria em linguagem simples

**Coesão** pergunta se os elementos de uma unidade pertencem ao mesmo propósito. **Acoplamento** observa quanto uma parte depende de detalhes de outra.

Algum acoplamento é inevitável: objetos precisam colaborar. A meta é manter responsabilidades claras e dependências controladas.

## Analogia: caixa de ferramentas

Uma caixa organizada possui compartimentos. Tudo pertence à manutenção, mas cada parte tem propósito claro. Se para pegar uma chave você precisasse desmontar a caixa inteira, as partes estariam acopladas demais.

## Agora observe sua versão

Depois de separar o recibo, examine o serviço principal e as novas classes. Para cada uma, tente descrever sua responsabilidade em uma frase.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

Escolha apenas **uma** fronteira para melhorar: cálculo de desconto, cálculo de frete ou uma regra que possa ficar junto aos dados que usa.

1. escreva a responsabilidade da nova unidade em uma frase;
2. crie a classe ou mova a regra escolhida;
3. faça o serviço coordenar a colaboração;
4. execute os testes;
5. observe se a nova classe exige detalhes demais de outras classes.

Se apenas espalhou linhas por arquivos diferentes, a coesão não necessariamente melhorou.

## Commit sugerido

```bash
git add src tests
git commit -m "refactor: melhora coesao do calculo de frete"
```

Adapte a mensagem ao foco escolhido.

## Checklist

- [ ] Descrevi a responsabilidade em uma frase.
- [ ] Reduzi conhecimento indevido entre partes.
- [ ] Não extraí classe apenas para diminuir tamanho de arquivo.
- [ ] Mantive os testes passando.

Próxima: **[Lição 11 — Object Calisthenics](11-object-calisthenics.md)**.
