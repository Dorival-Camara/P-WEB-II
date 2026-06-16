<?php
require 'helpers.php';

// ===== Exemplo 1: função com retorno =====
ob_start();
function calcularMedia($n1, $n2) {
    return ($n1 + $n2) / 2;
}

echo "Média: " . calcularMedia(8, 6);
$saida1 = ob_get_clean();

$codigo1 = <<<'PHP'
function calcularMedia($n1, $n2) {
    return ($n1 + $n2) / 2;
}

echo "Média: " . calcularMedia(8, 6);
PHP;


// ===== Exemplo 2: parâmetros com valor padrão =====
ob_start();
function calcularDesconto($preco, $percentual = 10) {
    return $preco - ($preco * $percentual / 100);
}

echo "Desconto padrão: " . calcularDesconto(200) . "\n";
echo "Desconto de 25%: " . calcularDesconto(200, 25);
$saida2 = ob_get_clean();

$codigo2 = <<<'PHP'
function calcularDesconto($preco, $percentual = 10) {
    return $preco - ($preco * $percentual / 100);
}

echo "Desconto padrão: " . calcularDesconto(200) . "\n";
echo "Desconto de 25%: " . calcularDesconto(200, 25);
PHP;


// ===== Exemplo 3: procedimento + escopo com static =====
ob_start();
function exibirMensagem($nome) {
    echo "Olá, $nome! Você acessou o sistema.\n";
}

function contarAcessos() {
    static $acessos = 0;
    $acessos++;
    echo "Total de acessos: $acessos\n";
}

exibirMensagem("Carlos");
contarAcessos();
contarAcessos();
contarAcessos();
$saida3 = ob_get_clean();

$codigo3 = <<<'PHP'
function exibirMensagem($nome) {
    echo "Olá, $nome! Você acessou o sistema.\n";
}

function contarAcessos() {
    static $acessos = 0;
    $acessos++;
    echo "Total de acessos: $acessos\n";
}

exibirMensagem("Carlos");
contarAcessos();
contarAcessos();
contarAcessos();
PHP;


// ===== Exemplo 4: tipagem (type hints) e validação =====
ob_start();
function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$emails = ["aluno@escola.com", "email-invalido"];

foreach ($emails as $email) {
    $resultado = validarEmail($email) ? "válido" : "inválido";
    echo "$email -> $resultado\n";
}
$saida4 = ob_get_clean();

$codigo4 = <<<'PHP'
function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$emails = ["aluno@escola.com", "email-invalido"];

foreach ($emails as $email) {
    $resultado = validarEmail($email) ? "válido" : "inválido";
    echo "$email -> $resultado\n";
}
PHP;


// ===== Exemplo 5: função recursiva =====
ob_start();
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

echo "Fatorial de 5: " . fatorial(5);
$saida5 = ob_get_clean();

$codigo5 = <<<'PHP'
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

echo "Fatorial de 5: " . fatorial(5);
PHP;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 - Funções e Procedimentos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="faixa faixa-4"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php" class="ativo">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">04</div>
    <div class="badge cor-4">Integrante 4 </div>
    <h1>Funções e Procedimentos</h1>
    <p>Como organizar, reutilizar e dar tipo seguro ao código com funções.</p>
  </div>

  <div class="indice">
    <a href="#exemplo-1">1. Função com retorno</a>
    <a href="#exemplo-2">2. Valores padrão</a>
    <a href="#exemplo-3">3. Procedimento e static</a>
    <a href="#exemplo-4">4. Type hints</a>
    <a href="#exemplo-5">5. Recursão</a>
  </div>

  <?php
  renderizarExemplo(
      1,
      "Função com retorno",
      "Uma função recebe parâmetros, processa um valor e devolve o resultado com return.",
      $codigo1, $saida1, 4
  );

  renderizarExemplo(
      2,
      "Parâmetros com valor padrão",
      "Um parâmetro pode ter um valor assumido automaticamente quando não é informado na chamada.",
      $codigo2, $saida2, 4
  );

  renderizarExemplo(
      3,
      "Procedimento e variável static",
      "Um procedimento executa uma ação sem retornar valor. static faz uma variável local manter seu valor entre chamadas.",
      $codigo3, $saida3, 4
  );

  renderizarExemplo(
      4,
      "Tipagem de parâmetros e retorno (type hints)",
      "Declarar tipos (string, bool, etc.) deixa claro o que a função espera receber e devolver, evitando erros.",
      $codigo4, $saida4, 4
  );

  renderizarExemplo(
      5,
      "Função recursiva",
      "Uma função que chama a si mesma até atingir uma condição de parada — aqui, para calcular o fatorial.",
      $codigo5, $saida5, 4
  );
  ?>

  <div class="rodape">
    <a href="index.php">← Voltar para a página inicial</a>
  </div>

</body>
</html>
