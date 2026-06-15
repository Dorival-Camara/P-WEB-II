# Variáveis, Tipos de Dados, Estruturas de Decisão, Laços de Repetição e Funções em PHP

Projeto desenvolvido para a disciplina de **Programação Web II**, no formato de **aula invertida**: o grupo estudou o tema, construiu exemplos práticos e apresenta os conceitos para os colegas.

## 📌 Sobre o tema

Este repositório explora quatro pilares fundamentais da linguagem PHP, que são a base para qualquer lógica de programação web:

1. **Variáveis e Tipos de Dados** — como o PHP armazena e identifica diferentes tipos de informação (string, int, float, boolean, array).
2. **Estruturas de Decisão** — como o código toma decisões com `if`, `else`, `elseif`, `switch` e operador ternário.
3. **Laços de Repetição** — como repetir ações com `for`, `while`, `do-while` e `foreach`.
4. **Funções e Procedimentos** — como organizar e reutilizar código com funções, parâmetros, valores de retorno e escopo de variáveis.

Cada conceito é apresentado com exemplos comentados e executáveis, e também com um caso prático de aplicação (validação de login, cálculo de média, validação de e-mail, etc).

## 📂 Estrutura do repositório

```
projeto-php-web2/
├── README.md
├── 01-variaveis-tipos-dados/
│   └── variaveis.php
├── 02-estruturas-decisao/
│   └── decisao.php
├── 03-lacos-repeticao/
│   └── lacos.php
├── 04-funcoes-procedimentos/
│   └── funcoes.php
└── site/
    ├── index.php
    ├── style.css
    ├── topico1.php
    ├── topico2.php
    ├── topico3.php
    └── topico4.php
```

Cada pasta de `01` a `04` corresponde a um subtema e contém um arquivo `.php` com vários exemplos comentados.

A pasta `site/` contém uma versão visual em formato de "slide", com uma página por tópico (e por integrante do grupo). Cada página executa um exemplo prático real em PHP e mostra o código-fonte (com destaque de sintaxe) e a saída gerada — usada como apoio visual no vídeo explicativo.

## ▶️ Como executar os exemplos

### Pré-requisitos
- PHP instalado (versão 7.4 ou superior). Para verificar, rode:
  ```bash
  php -v
  ```

### Executando via terminal (linha de comando)
Cada arquivo pode ser executado individualmente. A partir da raiz do projeto:

```bash
php 01-variaveis-tipos-dados/variaveis.php
php 02-estruturas-decisao/decisao.php
php 03-lacos-repeticao/lacos.php
php 04-funcoes-procedimentos/funcoes.php
```

### Executando via navegador (opcional)
Também é possível subir um servidor local com o PHP embutido:

```bash
php -S localhost:8000
```

E acessar, por exemplo: `http://localhost:8000/01-variaveis-tipos-dados/variaveis.php`

### Site visual (apoio para o vídeo)

Para abrir as páginas de apoio visual usadas no vídeo, rode o servidor dentro da pasta `site/`:

```bash
cd site
php -S localhost:8000
```

E acesse `http://localhost:8000` no navegador. A página inicial lista os 4 tópicos; cada um pode ser acessado diretamente em `topico1.php`, `topico2.php`, `topico3.php` e `topico4.php`.

## 🎥 Vídeo explicativo

📺 Link do vídeo (até 4 minutos): **[INSERIR LINK DO VÍDEO AQUI]**

No vídeo, o grupo apresenta:
- O desenvolvimento do projeto
- Os conceitos estudados (variáveis, tipos de dados, estruturas de decisão, laços de repetição, funções e procedimentos)
- Como o código de cada pasta ilustra esses conceitos na prática

## 👥 Integrantes do grupo

- [Nome do integrante 1]
- [Nome do integrante 2]
- [Nome do integrante 3]
- [Nome do integrante 4]

## 📚 Disciplina

Programação Web II — Atividade de Aula Invertida
