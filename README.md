#  PHP na Prática — Programação Web II

Projeto desenvolvido como atividade prática da disciplina de Programação Web II (ETEC), com o objetivo de apresentar os fundamentos da linguagem PHP por meio de exemplos interativos que exibem o código e sua saída lado a lado.

##  Vídeo Explicativo

[Clique aqui para assistir ao vídeo][(https://youtu.be/brFdCnSprko)]

##  Estrutura do Projeto

P-WEB-II/

├── index.php         # Página inicial

├── topico1.php       # Variáveis e Tipos de Dados

├── topico2.php       # Estruturas de Decisão

├── topico3.php       # Laços de Repetição

├── topico4.php       # Funções e Procedimentos

├── style.css         # Estilos do projeto

└── TiposDeDados/     # Exemplos complementares

##  Divisão do Trabalho

O projeto foi dividido em quatro tópicos, cada um desenvolvido e apresentado por um integrante do grupo.

**[NOME DO INTEGRANTE 1] — Variáveis e Tipos de Dados**
O primeiro integrante apresentou como o PHP armazena e identifica diferentes tipos de informação. Foram abordados os tipos primitivos (string, inteiro, float e booleano), com uso de `gettype()` para identificar o tipo de cada variável em tempo de execução. Em seguida, foram explorados arrays indexados e associativos para armazenar conjuntos de dados. O integrante também demonstrou a conversão de tipos (type casting), mostrando como o PHP converte valores automaticamente em operações aritméticas e como forçar essa conversão manualmente. Por fim, foram apresentadas as constantes criadas com `define()` e `const`, e o operador de coalescência nula (`??`), que retorna um valor padrão quando a variável não existe ou é nula.

**Ana — Estruturas de Decisão**
Ana ficou responsável por explicar como o PHP toma decisões durante a execução do código. Começou pelo `if/else` básico, evoluiu para o `if/elseif/else` encadeado, onde demonstrou a classificação de notas em conceitos. Na sequência, mostrou o uso do `switch/case` para comparar uma variável com múltiplos valores possíveis, utilizando os dias da semana como exemplo prático. Ana também apresentou o operador ternário, que resume um `if/else` simples em uma linha, e o `match` do PHP 8, uma alternativa mais segura ao `switch`. Para encerrar, demonstrou o uso de operadores lógicos (`&&`, `||`, `!`) combinando múltiplas condições em uma validação de login.

**Dorival — Laços de Repetição**
Dorival abordou as estruturas de repetição do PHP, explicando como automatizar tarefas que precisam ser executadas várias vezes. Apresentou o `for`, ideal quando o número de repetições é conhecido previamente, utilizando a tabuada do 5 como exemplo. Mostrou o `while`, que repete enquanto uma condição for verdadeira, e o `do-while`, que garante a execução do bloco pelo menos uma vez antes de verificar a condição, simulando tentativas de senha. O `foreach` foi demonstrado percorrendo um array de produtos e calculando o total automaticamente. Por último, Dorival explicou os comandos `break` e `continue`, mostrando como interromper ou pular iterações dentro de um laço.

**David Peres — Funções e Procedimentos**
David Peres apresentou como organizar e reutilizar código por meio de funções. Começou com uma função simples que recebe dois parâmetros e retorna a média entre eles. Em seguida, mostrou como definir valores padrão para parâmetros, permitindo que a função seja chamada com ou sem aquele argumento. David também diferenciou funções de procedimentos, e apresentou o uso da palavra-chave `static` para manter o valor de uma variável entre chamadas consecutivas. Na sequência, introduziu os type hints do PHP, declarando os tipos dos parâmetros e do retorno para tornar o código mais seguro e legível. Para fechar, demonstrou o conceito de recursão com uma função que calcula o fatorial de um número chamando a si mesma.

##  Como Executar

1. Instale o [XAMPP](https://www.apachefriends.org/) ou qualquer servidor local com PHP
2. Clone ou baixe este repositório na pasta `htdocs` do XAMPP
3. Inicie o Apache no painel do XAMPP
4. Acesse `http://localhost/P-WEB-II/` no navegador
