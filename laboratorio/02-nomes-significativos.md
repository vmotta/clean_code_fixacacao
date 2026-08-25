# 02 — Nomes significativos: faça o código dizer o que ele representa

## Teoria

O material-base destaca que bons nomes devem revelar propósito, evitar informação enganosa, ser pronunciáveis, pesquisáveis e compreensíveis para outras pessoas. Também sugere substantivos para classes/objetos e verbos para métodos.

Um nome ruim cria uma **dívida de interpretação**: toda pessoa que lê o trecho precisa descobrir novamente o significado escondido.

### Analogia do laboratório

Imagine um hospital em que as portas estejam identificadas como “Sala A”, “Sala B” e “Sala C”, mas ninguém saiba qual é cardiologia, radiologia ou emergência. O prédio funciona, porém cada pessoa perde tempo perguntando para onde deve ir. Bons nomes funcionam como placas claras.

## Exemplo simples

Antes:

```java
double x = p * q;
```

Depois:

```java
double subtotal = unitPrice * quantity;
```

A expressão matemática é a mesma. O custo para compreendê-la é diferente.

## Desafio guiado — renomeie sem mudar comportamento

### Passo 1 — proteção

```bash
mvn test
```

### Passo 2 — `Customer`

Renomeie os campos e acessores:

- `n` → `name`
- `t` → `customerType`
- `doc` → `cpf`
- `uf` → `state`

Atualize `LegacyStoreService` para usar os novos métodos.

### Passo 3 — `Product`

- `n` → `name`
- `p` → `unitPrice`

### Passo 4 — `SaleItem`

- `p` → `product`
- `q` → `quantity`

### Passo 5 — `LegacyStoreService.process`

Renomeie parâmetros e variáveis locais:

- `c` → `customer`
- `i` → `items`
- `exp` → `expressShipping`
- `cupom` → `coupon`
- `x` → `subtotal`
- `d` → `discount`
- `f` → `shipping`
- `r` → `receipt`
- `a` → `item`

### Passo 6 — teste novamente

```bash
mvn test
```

Se algum teste falhar, corrija a refatoração antes de continuar.

## Perguntas de reflexão

1. O número de linhas diminuiu? Provavelmente não. Mesmo assim o código melhorou?
2. Quais nomes eliminaram a necessidade de comentários explicativos?
3. Um novo integrante da equipe levaria menos tempo para entender as regras?

## Commit sugerido

```bash
git add src
git commit -m "refactor: substitui nomes ambiguos por nomes de dominio"
```
