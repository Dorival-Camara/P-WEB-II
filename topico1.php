<?php
require 'helpers.php';

// ===== Exemplo 1: Tipos primitivos =====
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

$codigo1 = <<<'PHP'
$nome = "Maria Silva";
$idade = 22;
$altura = 1.68;
$estudante = true;

echo "Nome: $nome (" . gettype($nome) . ")\n";
echo "Idade: $idade (" . gettype($idade) . ")\n";
echo "Altura: $altura (" . gettype($altura) . ")\n";
echo "Estudante: " . ($estudante ? "sim" : "não") . " (" . gettype($estudante) . ")";
PHP;


// ===== Exemplo 2: Arrays (indexado e associativo) =====
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

$codigo2 = <<<'PHP'
$frutas = ["Maçã", "Banana", "Uva"];

$aluno = [
    "nome"  => "João",
    "curso" => "ADS",
    "idade" => 20
];

echo "Fruta: " . $frutas[1] . "\n";
echo "Aluno: " . $aluno["nome"] . " - " . $aluno["curso"];
PHP;


// ===== Exemplo 3: Conversão de tipos (type casting) =====
ob_start();
$texto = "25";
$numero = (int) $texto;

$soma = "10" + 5;
$concat = "10" . 5;

var_dump($numero);
var_dump($soma);
var_dump($concat);
$saida3 = ob_get_clean();

$codigo3 = <<<'PHP'
$texto = "25";
$numero = (int) $texto;

$soma = "10" + 5;
$concat = "10" . 5;

var_dump($numero);
var_dump($soma);
var_dump($concat);
PHP;


// ===== Exemplo 4: Constantes =====
ob_start();
define("IVA", 0.23);
const NOME_APP = "Sistema Escolar";

$preco = 100;
$precoComIva = $preco + ($preco * IVA);

echo NOME_APP . "\n";
echo "Preço com IVA: " . $precoComIva;
$saida4 = ob_get_clean();

$codigo4 = <<<'PHP'
define("IVA", 0.23);
const NOME_APP = "Sistema Escolar";

$preco = 100;
$precoComIva = $preco + ($preco * IVA);

echo NOME_APP . "\n";
echo "Preço com IVA: " . $precoComIva;
PHP;


// ===== Exemplo 5: Operador de coalescência nula (??) =====
ob_start();
$dados = ["nome" => "Ana"];

$nome = $dados["nome"] ?? "Sem nome";
$email = $dados["email"] ?? "Não informado";

echo "Nome: $nome\n";
echo "Email: $email";
$saida5 = ob_get_clean();

$codigo5 = <<<'PHP'
$dados = ["nome" => "Ana"];

$nome = $dados["nome"] ?? "Sem nome";
$email = $dados["email"] ?? "Não informado";

echo "Nome: $nome\n";
echo "Email: $email";
PHP;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01 - Variáveis e Tipos de Dados</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="faixa faixa-1"></div>

  <nav>
    <a href="topico1.php" class="ativo">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">01</div>
    <div class="badge cor-1">Integrante 1 </div>
    <h1>Variáveis e Tipos de Dados</h1>
    <p>Como o PHP guarda, identifica e converte diferentes tipos de informação.</p>
  </div>

  <div class="indice">
    <a href="#exemplo-1">1. Tipos primitivos</a>
    <a href="#exemplo-2">2. Arrays</a>
    <a href="#exemplo-3">3. Conversão de tipos</a>
    <a href="#exemplo-4">4. Constantes</a>
    <a href="#exemplo-5">5. Operador ??</a>
  </div>

  <?php
  renderizarExemplo(
      1,
      "Tipos primitivos",
      "PHP tem tipagem dinâmica: o tipo de cada variável é definido automaticamente pelo valor atribuído.",
      $codigo1, $saida1, 1
  );

  renderizarExemplo(
      2,
      "Arrays indexados e associativos",
      "Arrays guardam várias informações. Podem ser indexados por posição (0, 1, 2...) ou por chaves nomeadas.",
      $codigo2, $saida2, 1
  );

  renderizarExemplo(
      3,
      "Conversão de tipos (type casting)",
      "É possível converter valores entre tipos manualmente, ou deixar o PHP converter automaticamente em operações.",
      $codigo3, $saida3, 1
  );

  renderizarExemplo(
      4,
      "Constantes",
      "Valores que não devem mudar durante a execução podem ser definidos como constantes, com define() ou const.",
      $codigo4, $saida4, 1
  );

  renderizarExemplo(
      5,
      "Operador de coalescência nula (??)",
      "O operador ?? retorna um valor padrão quando a variável não existe ou é nula, evitando erros de índice indefinido.",
      $codigo5, $saida5, 1
  );
  ?>

  <div class="rodape">
    <a href="topico2.php">Próximo tópico: Estruturas de Decisão →</a>
  </div>

</body>
</html>
