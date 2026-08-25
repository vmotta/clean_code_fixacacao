# Lição 08 — Comentários e formatação

## O que você vai aprender

Você vai distinguir comentários que acrescentam contexto daqueles que apenas compensam código difícil de ler e organizar o arquivo para facilitar leitura.

## Teoria em linguagem simples

Comentários podem ser úteis quando registram contexto que o código não consegue expressar bem. O problema aparece quando narram aquilo que nomes e estruturas poderiam comunicar diretamente. Comentários também podem ficar desatualizados.

Formatação ajuda a equipe a perceber blocos, ordem e hierarquia.

## Analogia: post-its em um quarto bagunçado

Colar bilhetes “aqui tem roupa” e “aqui tem livros” ajuda temporariamente, mas organizar as caixas pode ser uma solução melhor.

## Exemplo simples em PHP

```php
// verifica se o cliente é vip
if ($tipo === 'VIP') {
```

O comentário apenas repete a condição. Um nome ou método mais claro pode comunicar melhor.

## Antes de alterar

```bash
composer test
```

## Desafio guiado

1. liste comentários nos arquivos já alterados;
2. classifique cada um como contexto necessário, explicação não óbvia, narrativa ou lembrete temporário;
3. substitua comentários narrativos por nomes/estruturas melhores quando possível;
4. organize métodos públicos antes dos detalhes privados;
5. aplique formatação consistente da IDE;
6. execute os testes.

## Commit sugerido

```bash
git add src
git commit -m "refactor: melhora comunicacao e formatacao do codigo"
```

## Checklist

- [ ] Revisei comentários em vez de apagar todos indiscriminadamente.
- [ ] Removi narrativas redundantes.
- [ ] Organizei métodos e formatação.
- [ ] Executei os testes.

Próxima: **[Lição 09 — Tratamento de erros](09-tratamento-de-erros.md)**.
