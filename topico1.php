<?php
ini_set('highlight.comment', '#6A9955');
ini_set('highlight.default', '#D4D4D4');
ini_set('highlight.html', '#D4D4D4');
ini_set('highlight.keyword', '#569CD6');
ini_set('highlight.string', '#CE9178');

// ===== Exemplo 1 =====
ob_start();
$nome = "Maria Silva";
$idade = 22;
$altura = 1.68;
$estudante = true;
echo "Nome: $nome (" . gettype($nome) . ")\n";
echo "Idade: $idade (" . gettype($idade) . ")\n";
echo "Altura: $altura (" . gettype($altura) . ")\n";
echo "Estudante: " . ($estudante ? "sim" : "não") . " (" . gettype($estudante) . ")";
$saida1 = ob_get_clean();
$cod1 = highlight_string('<?php
$nome = "Maria Silva";
$idade = 22;
$altura = 1.68;
$estudante = true;

echo "Nome: $nome (" . gettype($nome) . ")";
echo "Idade: $idade (" . gettype($idade) . ")";
echo "Altura: $altura (" . gettype($altura) . ")";
echo "Estudante: " . ($estudante ? "sim" : "não") . " (" . gettype($estudante) . ")";', true);

// ===== Exemplo 2 =====
ob_start();
$frutas = ["Maçã", "Banana", "Uva"];
$aluno = [
    "nome"  => "João",
    "curso" => "ADS",
    "idade" => 20
];
echo "Fruta: " . $frutas[1] . "\n";
echo "Aluno: " . $aluno["nome"] . " - " . $aluno["curso"];
$saida2 = ob_get_clean();
$cod2 = highlight_string('<?php
$frutas = ["Maçã", "Banana", "Uva"];

$aluno = [
    "nome"  => "João",
    "curso" => "ADS",
    "idade" => 20
];

echo "Fruta: " . $frutas[1];
echo "Aluno: " . $aluno["nome"] . " - " . $aluno["curso"];', true);

// ===== Exemplo 3 =====
ob_start();
$texto = "25";
$numero = (int) $texto;
$soma = "10" + 5;
$concat = "10" . 5;
var_dump($numero);
var_dump($soma);
var_dump($concat);
$saida3 = ob_get_clean();
$cod3 = highlight_string('<?php
$texto = "25";
$numero = (int) $texto;

$soma = "10" + 5;
$concat = "10" . 5;

var_dump($numero);
var_dump($soma);
var_dump($concat);', true);

// ===== Exemplo 4 =====
ob_start();
define("IVA", 0.23);
const NOME_APP = "Sistema Escolar";
$preco = 100;
$precoComIva = $preco + ($preco * IVA);
echo NOME_APP . "\n";
echo "Preço com IVA: " . $precoComIva;
$saida4 = ob_get_clean();
$cod4 = highlight_string('<?php
define("IVA", 0.23);
const NOME_APP = "Sistema Escolar";

$preco = 100;
$precoComIva = $preco + ($preco * IVA);

echo NOME_APP;
echo "Preço com IVA: " . $precoComIva;', true);

// ===== Exemplo 5 =====
ob_start();
$dados = ["nome" => "Ana"];
$nome = $dados["nome"] ?? "Sem nome";
$email = $dados["email"] ?? "Não informado";
echo "Nome: $nome\n";
echo "Email: $email";
$saida5 = ob_get_clean();
$cod5 = highlight_string('<?php
$dados = ["nome" => "Ana"];

$nome = $dados["nome"] ?? "Sem nome";
$email = $dados["email"] ?? "Não informado";

echo "Nome: $nome";
echo "Email: $email";', true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01 - Variáveis e Tipos de Dados</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="pagina-1">

  <div class="faixa faixa-1"></div>

  <nav>
    <a href="topico1.php" class="ativo">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">01</div>
    <div class="badge badge-1">André</div>
    <h1>Variáveis e Tipos de Dados</h1>
    <p>Como o PHP guarda, identifica e converte diferentes tipos de informação.</p>
  </div>

  <div class="indice">
    <a href="#ex1">1. Tipos primitivos</a>
    <a href="#ex2">2. Arrays</a>
    <a href="#ex3">3. Conversão de tipos</a>
    <a href="#ex4">4. Constantes</a>
    <a href="#ex5">5. Operador ??</a>
  </div>

  <!-- Exemplo 1 -->
  <section class="exemplo" id="ex1">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-1">1</span>
      <div>
        <h2>Tipos primitivos</h2>
        <p>PHP tem tipagem dinâmica: o tipo de cada variável é definido automaticamente pelo valor atribuído.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod1 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-1"><?= htmlspecialchars($saida1) ?></pre>
    </div>
  </section>

  <!-- Exemplo 2 -->
  <section class="exemplo" id="ex2">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-1">2</span>
      <div>
        <h2>Arrays indexados e associativos</h2>
        <p>Arrays guardam várias informações. Podem ser indexados por posição (0, 1, 2...) ou por chaves nomeadas.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod2 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-1"><?= htmlspecialchars($saida2) ?></pre>
    </div>
  </section>

  <!-- Exemplo 3 -->
  <section class="exemplo" id="ex3">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-1">3</span>
      <div>
        <h2>Conversão de tipos (type casting)</h2>
        <p>É possível converter valores entre tipos manualmente, ou deixar o PHP converter automaticamente em operações.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod3 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-1"><?= htmlspecialchars($saida3) ?></pre>
    </div>
  </section>

  <!-- Exemplo 4 -->
  <section class="exemplo" id="ex4">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-1">4</span>
      <div>
        <h2>Constantes</h2>
        <p>Valores que não devem mudar durante a execução podem ser definidos como constantes, com define() ou const.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod4 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-1"><?= htmlspecialchars($saida4) ?></pre>
    </div>
  </section>

  <!-- Exemplo 5 -->
  <section class="exemplo" id="ex5">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-1">5</span>
      <div>
        <h2>Operador de coalescência nula (??)</h2>
        <p>O operador ?? retorna um valor padrão quando a variável não existe ou é nula, evitando erros.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod5 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-1"><?= htmlspecialchars($saida5) ?></pre>
    </div>
  </section>

  <div class="rodape">
    <a href="index.php">← Início</a>
    <a href="topico2.php">Próximo: Estruturas de Decisão →</a>
  </div>

</body>
</html>
