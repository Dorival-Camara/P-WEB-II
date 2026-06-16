<?php
ini_set('highlight.comment', '#6A9955');
ini_set('highlight.default', '#D4D4D4');
ini_set('highlight.html', '#D4D4D4');
ini_set('highlight.keyword', '#569CD6');
ini_set('highlight.string', '#CE9178');

// ===== Exemplo 1 =====
ob_start();
$idade = 17;
if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
$saida1 = ob_get_clean();
$cod1 = highlight_string('<?php
$idade = 17;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}', true);

// ===== Exemplo 2 =====
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
echo "Nota: $nota\n";
echo "Conceito: $conceito";
$saida2 = ob_get_clean();
$cod2 = highlight_string('<?php
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

echo "Nota: $nota";
echo "Conceito: $conceito";', true);

// ===== Exemplo 3 =====
ob_start();
$diaSemana = 3;
switch ($diaSemana) {
    case 1: $nomeDia = "Domingo"; break;
    case 2: $nomeDia = "Segunda-feira"; break;
    case 3: $nomeDia = "Terça-feira"; break;
    case 4: $nomeDia = "Quarta-feira"; break;
    case 5: $nomeDia = "Quinta-feira"; break;
    case 6: $nomeDia = "Sexta-feira"; break;
    case 7: $nomeDia = "Sábado"; break;
    default: $nomeDia = "Dia inválido";
}
echo "Dia $diaSemana = $nomeDia";
$saida3 = ob_get_clean();
$cod3 = highlight_string('<?php
$diaSemana = 3;

switch ($diaSemana) {
    case 1: $nomeDia = "Domingo"; break;
    case 2: $nomeDia = "Segunda-feira"; break;
    case 3: $nomeDia = "Terça-feira"; break;
    case 4: $nomeDia = "Quarta-feira"; break;
    case 5: $nomeDia = "Quinta-feira"; break;
    case 6: $nomeDia = "Sexta-feira"; break;
    case 7: $nomeDia = "Sábado"; break;
    default: $nomeDia = "Dia inválido";
}

echo "Dia $diaSemana = $nomeDia";', true);

// ===== Exemplo 4 =====
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
$cod4 = highlight_string('<?php
$idade = 20;
$status = ($idade >= 18) ? "Adulto" : "Menor";

$nota = 8;
$conceito = match (true) {
    $nota >= 9 => "Excelente",
    $nota >= 7 => "Bom",
    $nota >= 5 => "Regular",
    default => "Insuficiente",
};

echo "Status: $status";
echo "Conceito (match): $conceito";', true);

// ===== Exemplo 5 =====
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
$cod5 = highlight_string('<?php
$usuario = "admin";
$senha = "1234";
$ativo = true;

if ($usuario === "admin" && $senha === "1234" && $ativo) {
    echo "Login permitido";
} else {
    echo "Login negado";
}', true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02 - Estruturas de Decisão</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="pagina-2">

  <div class="faixa faixa-2"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php" class="ativo">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">02</div>
    <div class="badge badge-2">Integrante 2</div>
    <h1>Estruturas de Decisão</h1>
    <p>Como o código toma decisões com if, else, switch, ternário e match.</p>
  </div>

  <div class="indice">
    <a href="#ex1">1. if / else</a>
    <a href="#ex2">2. if / elseif / else</a>
    <a href="#ex3">3. switch / case</a>
    <a href="#ex4">4. Ternário e match</a>
    <a href="#ex5">5. Operadores lógicos</a>
  </div>

  <section class="exemplo" id="ex1">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-2">1</span>
      <div>
        <h2>if / else</h2>
        <p>A estrutura mais básica: executa um bloco se a condição for verdadeira, e outro se for falsa.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod1 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-2"><?= htmlspecialchars($saida1) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex2">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-2">2</span>
      <div>
        <h2>if / elseif / else</h2>
        <p>Permite testar várias condições em sequência, parando na primeira que for verdadeira.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod2 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-2"><?= htmlspecialchars($saida2) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex3">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-2">3</span>
      <div>
        <h2>switch / case</h2>
        <p>Ideal quando uma mesma variável é comparada com vários valores possíveis, como dias da semana.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod3 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-2"><?= htmlspecialchars($saida3) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex4">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-2">4</span>
      <div>
        <h2>Operador ternário e match (PHP 8)</h2>
        <p>O ternário resume um if/else simples em uma linha. O match compara valores de forma mais segura que o switch.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod4 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-2"><?= htmlspecialchars($saida4) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex5">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-2">5</span>
      <div>
        <h2>Operadores lógicos (&amp;&amp;, ||, !)</h2>
        <p>Combinam várias condições em uma só decisão — aqui, um login só é permitido se todas forem verdadeiras.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod5 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-2"><?= htmlspecialchars($saida5) ?></pre>
    </div>
  </section>

  <div class="rodape">
    <a href="topico1.php">← Variáveis e Tipos</a>
    <a href="topico3.php">Próximo: Laços de Repetição →</a>
  </div>

</body>
</html>
