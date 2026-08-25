# 01 — O que é Clean Code e a Regra do Escoteiro

## Teoria

No material-base, código limpo é apresentado como código que outras pessoas conseguem ler e compreender com rapidez, deixando a atenção livre para as regras e para o valor entregue pelo software. A ideia central não é “código bonito”, mas **código que reduz o custo mental de manutenção**.

A **Regra do Escoteiro** é uma orientação prática: a cada contato com um trecho existente, procure deixá-lo um pouco melhor do que encontrou. A melhoria pode ser pequena: um nome melhor, uma duplicação removida, uma condição simplificada ou um comentário desnecessário eliminado.

### Analogia do material-base

O material usa o lema de deixar o acampamento mais limpo do que foi encontrado. Em software, isso significa evitar que cada mudança acrescente mais sujeira ao código.

### Analogia do laboratório

Pense em uma cozinha compartilhada. Você não precisa reformar a cozinha inteira toda vez que prepara um café. Mas pode guardar a xícara, limpar a bancada que usou e deixar o espaço um pouco melhor para a próxima pessoa.

## Exemplo simples

Antes:

```java
int x = 10;
if (x > 5) {
    System.out.println("maior");
}
```

Uma pequena melhoria pode começar apenas pelo nome:

```java
int quantidadeDeItens = 10;
if (quantidadeDeItens > 5) {
    System.out.println("maior");
}
```

Não resolvemos tudo. Apenas reduzimos uma pequena dificuldade de leitura.

## Desafio guiado — faça um diagnóstico, ainda sem refatorar

1. Execute `mvn test`.
2. Abra `LegacyStoreService.java`.
3. Liste no seu caderno ou em `docs/meu-diagnostico.md` pelo menos **8 sinais de dificuldade de manutenção**.
4. Para cada sinal, escreva uma frase explicando o impacto. Exemplo: “`x` não informa que representa subtotal; isso obriga o leitor a reconstruir mentalmente seu significado”.
5. Não altere o código ainda.

Use como pistas:

- nomes pouco expressivos;
- métodos com responsabilidades demais;
- condicionais aninhadas;
- duplicação;
- código comentado;
- itens sem uso;
- tratamento de erros genérico;
- lógica de recibo misturada com regra de negócio.

## Reflexão

Qual é a diferença entre “eu consigo entender este código depois de 10 minutos” e “este código comunica sua intenção rapidamente”?

## Commit sugerido

Se você criou o diagnóstico:

```bash
git add docs/meu-diagnostico.md
git commit -m "docs: registra diagnostico inicial do codigo legado"
```
