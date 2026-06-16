<?php
require 'helpers.php';

// ===== Exemplo 1: if / else =====
ob_start();
$idade = 17;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
$saida1 = ob_get_clean();

$codigo1 = <<<'PHP'
$idade = 17;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
PHP;


// ===== Exemplo 2: if / elseif / else =====
ob_start();
$nota = 7.5;

if ($nota >= 9) {
    $conceito = "Excelente";
} elseif ($nota >= 7) {
    $conceito = "Bom";
} elseif ($nota >= 5) {
    $conceito = "Regular";
} else {
    $conceito = "Insuficiente";
}

echo "Conceito: $conceito";
$saida2 = ob_get_clean();

$codigo2 = <<<'PHP'
$nota = 7.5;

if ($nota >= 9) {
    $conceito = "Excelente";
} elseif ($nota >= 7) {
    $conceito = "Bom";
} elseif ($nota >= 5) {
    $conceito = "Regular";
} else {
    $conceito = "Insuficiente";
}

echo "Conceito: $conceito";
PHP;


// ===== Exemplo 3: switch / case =====
ob_start();
$diaSemana = 3;

switch ($diaSemana) {
    case 1:
        $nomeDia = "Domingo";
        break;
    case 2:
        $nomeDia = "Segunda-feira";
        break;
    case 3:
        $nomeDia = "Terça-feira";
        break;
    default:
        $nomeDia = "Dia inválido";
}

echo $nomeDia;
$saida3 = ob_get_clean();

$codigo3 = <<<'PHP'
$diaSemana = 3;

switch ($diaSemana) {
    case 1:
        $nomeDia = "Domingo";
        break;
    case 2:
        $nomeDia = "Segunda-feira";
        break;
    case 3:
        $nomeDia = "Terça-feira";
        break;
    default:
        $nomeDia = "Dia inválido";
}

echo $nomeDia;
PHP;


// ===== Exemplo 4: operador ternário e match (PHP 8) =====
ob_start();
$idade = 20;
$status = ($idade >= 18) ? "Adulto" : "Menor";

$nota = 8;
$conceito = match (true) {
    $nota >= 9 => "Excelente",
    $nota >= 7 => "Bom",
    $nota >= 5 => "Regular",
    default => "Insuficiente",
};

echo "Status: $status\n";
echo "Conceito (match): $conceito";
$saida4 = ob_get_clean();

$codigo4 = <<<'PHP'
$idade = 20;
$status = ($idade >= 18) ? "Adulto" : "Menor";

$nota = 8;
$conceito = match (true) {
    $nota >= 9 => "Excelente",
    $nota >= 7 => "Bom",
    $nota >= 5 => "Regular",
    default => "Insuficiente",
};

echo "Status: $status\n";
echo "Conceito (match): $conceito";
PHP;


// ===== Exemplo 5: operadores lógicos (validação de login) =====
ob_start();
$usuario = "admin";
$senha = "1234";
$ativo = true;

if ($usuario === "admin" && $senha === "1234" && $ativo) {
    echo "Login permitido";
} else {
    echo "Login negado";
}
$saida5 = ob_get_clean();

$codigo5 = <<<'PHP'
$usuario = "admin";
$senha = "1234";
$ativo = true;

if ($usuario === "admin" && $senha === "1234" && $ativo) {
    echo "Login permitido";
} else {
    echo "Login negado";
}
PHP;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02 - Estruturas de Decisão</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="faixa faixa-2"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php" class="ativo">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">02</div>
    <div class="badge cor-2">Integrante 2 </div>
    <h1>Estruturas de Decisão</h1>
    <p>Como o código toma decisões com if, else, switch, ternário e match.</p>
  </div>

  <div class="indice">
    <a href="#exemplo-1">1. if / else</a>
    <a href="#exemplo-2">2. if / elseif / else</a>
    <a href="#exemplo-3">3. switch / case</a>
    <a href="#exemplo-4">4. Ternário e match</a>
    <a href="#exemplo-5">5. Operadores lógicos</a>
  </div>

  <?php
  renderizarExemplo(
      1,
      "if / else",
      "A estrutura mais básica: executa um bloco se a condição for verdadeira, e outro se for falsa.",
      $codigo1, $saida1, 2
  );

  renderizarExemplo(
      2,
      "if / elseif / else",
      "Permite testar várias condições em sequência, parando na primeira que for verdadeira.",
      $codigo2, $saida2, 2
  );

  renderizarExemplo(
      3,
      "switch / case",
      "Ideal quando uma mesma variável é comparada com vários valores possíveis, como dias da semana.",
      $codigo3, $saida3, 2
  );

  renderizarExemplo(
      4,
      "Operador ternário e match (PHP 8)",
      "O ternário resume um if/else simples em uma linha. O match compara valores e retorna um resultado, de forma mais segura que o switch.",
      $codigo4, $saida4, 2
  );

  renderizarExemplo(
      5,
      "Operadores lógicos (&&, ||, !)",
      "Combinam várias condições em uma só decisão — aqui, um login só é permitido se todas as condições forem verdadeiras.",
      $codigo5, $saida5, 2
  );
  ?>

  <div class="rodape">
    <a href="topico3.php">Próximo tópico: Laços de Repetição →</a>
  </div>

</body>
</html>
