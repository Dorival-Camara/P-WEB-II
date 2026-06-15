<?php
require 'helpers.php';

// ===== Exemplo 1: for - tabuada =====
ob_start();
for ($i = 1; $i <= 5; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}
$saida1 = ob_get_clean();

$codigo1 = <<<'PHP'
for ($i = 1; $i <= 5; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}
PHP;


// ===== Exemplo 2: while - contagem regressiva =====
ob_start();
$contador = 5;

while ($contador > 0) {
    echo "Contagem: $contador\n";
    $contador--;
}

echo "Fim!";
$saida2 = ob_get_clean();

$codigo2 = <<<'PHP'
$contador = 5;

while ($contador > 0) {
    echo "Contagem: $contador\n";
    $contador--;
}

echo "Fim!";
PHP;


// ===== Exemplo 3: do-while =====
ob_start();
$senha = "";
$tentativas = 0;

do {
    $tentativas++;
    $senha = ($tentativas == 3) ? "1234" : "errada";
} while ($senha !== "1234");

echo "Senha correta na tentativa $tentativas";
$saida3 = ob_get_clean();

$codigo3 = <<<'PHP'
$senha = "";
$tentativas = 0;

do {
    $tentativas++;
    $senha = ($tentativas == 3) ? "1234" : "errada";
} while ($senha !== "1234");

echo "Senha correta na tentativa $tentativas";
PHP;


// ===== Exemplo 4: foreach - percorrendo arrays =====
ob_start();
$produtos = [
    ["nome" => "Caderno", "preco" => 12.50],
    ["nome" => "Caneta",  "preco" => 2.00],
    ["nome" => "Mochila", "preco" => 89.90],
];

$total = 0;
foreach ($produtos as $produto) {
    echo $produto["nome"] . ": R$ " . $produto["preco"] . "\n";
    $total += $produto["preco"];
}

echo "Total: R$ " . $total;
$saida4 = ob_get_clean();

$codigo4 = <<<'PHP'
$produtos = [
    ["nome" => "Caderno", "preco" => 12.50],
    ["nome" => "Caneta",  "preco" => 2.00],
    ["nome" => "Mochila", "preco" => 89.90],
];

$total = 0;
foreach ($produtos as $produto) {
    echo $produto["nome"] . ": R$ " . $produto["preco"] . "\n";
    $total += $produto["preco"];
}

echo "Total: R$ " . $total;
PHP;


// ===== Exemplo 5: break e continue =====
ob_start();
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    if ($i == 9) {
        break;
    }
    echo "$i ";
}
$saida5 = ob_get_clean();

$codigo5 = <<<'PHP'
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    if ($i == 9) {
        break;
    }
    echo "$i ";
}
PHP;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03 - Laços de Repetição</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="faixa faixa-3"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php" class="ativo">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">03</div>
    <div class="badge cor-3">Integrante 3 </div>
    <h1>Laços de Repetição</h1>
    <p>Como repetir ações automaticamente com for, while, do-while e foreach.</p>
  </div>

  <div class="indice">
    <a href="#exemplo-1">1. for</a>
    <a href="#exemplo-2">2. while</a>
    <a href="#exemplo-3">3. do-while</a>
    <a href="#exemplo-4">4. foreach</a>
    <a href="#exemplo-5">5. break e continue</a>
  </div>

  <?php
  renderizarExemplo(
      1,
      "Laço for",
      "Usado quando já sabemos quantas vezes o bloco deve repetir — aqui, para montar a tabuada do 5.",
      $codigo1, $saida1, 3
  );

  renderizarExemplo(
      2,
      "Laço while",
      "Repete enquanto a condição for verdadeira. Aqui, conta de 5 até 1 e para quando o contador chega a 0.",
      $codigo2, $saida2, 3
  );

  renderizarExemplo(
      3,
      "Laço do-while",
      "Executa o bloco pelo menos uma vez antes de verificar a condição — útil para simular tentativas.",
      $codigo3, $saida3, 3
  );

  renderizarExemplo(
      4,
      "Laço foreach",
      "Percorre cada item de um array automaticamente, sem precisar controlar um índice manualmente.",
      $codigo4, $saida4, 3
  );

  renderizarExemplo(
      5,
      "break e continue",
      "continue pula para a próxima repetição (ignorando números pares); break encerra o laço por completo.",
      $codigo5, $saida5, 3
  );
  ?>

  <div class="rodape">
    <a href="topico4.php">Próximo tópico: Funções e Procedimentos →</a>
  </div>

</body>
</html>
