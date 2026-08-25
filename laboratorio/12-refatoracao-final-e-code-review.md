# Lição 12 — Refatoração final e Code Review

## O que você vai aprender

Você vai consolidar o laboratório, comparar a versão inicial com a atual e realizar uma revisão de código orientada por evidências.

## 1. Execute a suíte completa

```bash
composer test
```

Não avance enquanto houver falhas que você não compreende.

## 2. Compare o início e o fim

```bash
git log --oneline --decorate
git diff <commit-inicial>..HEAD
```

Pergunte se nomes revelam melhor intenção, se o fluxo é mais fácil, se regras duplicadas foram centralizadas, se responsabilidades possuem fronteiras claras e se erros explicam melhor o contexto.

## 3. Preencha o Antes × Depois

Copie `docs/antes-e-depois-modelo.md` e registre três mudanças importantes, explicando problema, princípio, mudança, evidência de segurança e benefício.

## 4. Code Review cruzado

Troque o Pull Request com outra dupla ou grupo. Use o formato:

> **Observação → princípio → impacto → sugestão**

Evite comentários como “ficou feio”, “eu faria diferente” ou “troca isso”.

## 5. Reaja ao feedback

Você não precisa aceitar toda sugestão automaticamente. Entenda o problema, verifique se ele é real, responda com justificativa, faça a mudança se melhorar o código e rode os testes novamente.

## 6. Pull Request final

Explique conceitos aplicados, mudanças relevantes, testes executados, feedback incorporado e o que ainda melhoraria com mais tempo.

## Reflexão final

Clean Code não é uma cerimônia de embelezamento no fim do projeto. É uma forma de reduzir o custo de compreender e alterar software ao longo do tempo.

## Checklist final da lição

- [ ] Toda a suíte passa.
- [ ] Comparei versão inicial e final.
- [ ] Registrei mudanças com justificativa.
- [ ] Recebi Code Review de outra pessoa.
- [ ] Respondi ao feedback tecnicamente.
- [ ] Preparei um Pull Request explicando decisões.

Consulte também o **[Checklist final do laboratório](../docs/checklist-final.md)**.
