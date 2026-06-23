<?php
ini_set('highlight.comment', '#6A9955');
ini_set('highlight.default', '#D4D4D4');
ini_set('highlight.html', '#D4D4D4');
ini_set('highlight.keyword', '#569CD6');
ini_set('highlight.string', '#CE9178');

// ===== Exemplo 1 =====
ob_start();
for ($i = 1; $i <= 5; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}
$saida1 = ob_get_clean();
$cod1 = highlight_string('<?php
for ($i = 1; $i <= 5; $i++) {
    echo "5 x $i = " . (5 * $i) . "\n";
}', true);

// ===== Exemplo 2 =====
ob_start();
$contador = 5;
while ($contador > 0) {
    echo "Contagem: $contador\n";
    $contador--;
}
echo "Fim!";
$saida2 = ob_get_clean();
$cod2 = highlight_string('<?php
$contador = 5;

while ($contador > 0) {
    echo "Contagem: $contador\n";
    $contador--;
}

echo "Fim!";', true);

// ===== Exemplo 3 =====
ob_start();
$senha = "";
$tentativas = 0;
do {
    $tentativas++;
    $senha = ($tentativas == 3) ? "1234" : "errada";
} while ($senha !== "1234");
echo "Senha correta na tentativa $tentativas";
$saida3 = ob_get_clean();
$cod3 = highlight_string('<?php
$senha = "";
$tentativas = 0;

do {
    $tentativas++;
    $senha = ($tentativas == 3) ? "1234" : "errada";
} while ($senha !== "1234");

echo "Senha correta na tentativa $tentativas";', true);

// ===== Exemplo 4 =====
ob_start();
$produtos = [
    ["nome" => "Caderno", "preco" => 12.50],
    ["nome" => "Caneta",  "preco" => 2.00],
    ["nome" => "Mochila", "preco" => 89.90],
];
$total = 0;
foreach ($produtos as $produto) {
    echo $produto["nome"] . ": R$ " . number_format($produto["preco"], 2, ',', '.') . "\n";
    $total += $produto["preco"];
}
echo "Total: R$ " . number_format($total, 2, ',', '.');
$saida4 = ob_get_clean();
$cod4 = highlight_string('<?php
$produtos = [
    ["nome" => "Caderno", "preco" => 12.50],
    ["nome" => "Caneta",  "preco" => 2.00],
    ["nome" => "Mochila", "preco" => 89.90],
];

$total = 0;
foreach ($produtos as $produto) {
    echo $produto["nome"] . ": R$ " . number_format($produto["preco"], 2, ",", ".");
    $total += $produto["preco"];
}

echo "Total: R$ " . number_format($total, 2, ",", ".");', true);

// ===== Exemplo 5 =====
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
$cod5 = highlight_string('<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // pula números pares
    }
    if ($i == 9) {
        break; // para no 9
    }
    echo "$i ";
}', true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03 - Laços de Repetição</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="pagina-3">

  <div class="faixa faixa-3"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php" class="ativo">03 laços</a>
    <a href="topico4.php">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">03</div>
    <div class="badge badge-3">Dorival</div>
    <h1>Laços de Repetição</h1>
    <p>Como repetir ações automaticamente com for, while, do-while e foreach.</p>
  </div>

  <div class="indice">
    <a href="#ex1">1. for</a>
    <a href="#ex2">2. while</a>
    <a href="#ex3">3. do-while</a>
    <a href="#ex4">4. foreach</a>
    <a href="#ex5">5. break e continue</a>
  </div>

  <section class="exemplo" id="ex1">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-3">1</span>
      <div>
        <h2>Laço for</h2>
        <p>Usado quando já sabemos quantas vezes o bloco deve repetir — aqui, para montar a tabuada do 5.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod1 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-3"><?= htmlspecialchars($saida1) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex2">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-3">2</span>
      <div>
        <h2>Laço while</h2>
        <p>Repete enquanto a condição for verdadeira. Aqui, conta de 5 até 1 e para quando chega a 0.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod2 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-3"><?= htmlspecialchars($saida2) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex3">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-3">3</span>
      <div>
        <h2>Laço do-while</h2>
        <p>Executa o bloco pelo menos uma vez antes de verificar a condição — útil para simular tentativas.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod3 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-3"><?= htmlspecialchars($saida3) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex4">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-3">4</span>
      <div>
        <h2>Laço foreach</h2>
        <p>Percorre cada item de um array automaticamente, sem precisar controlar um índice manualmente.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod4 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-3"><?= htmlspecialchars($saida4) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex5">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-3">5</span>
      <div>
        <h2>break e continue</h2>
        <p>continue pula para a próxima repetição (ignorando pares); break encerra o laço por completo.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod5 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-3"><?= htmlspecialchars($saida5) ?></pre>
    </div>
  </section>

  <div class="rodape">
    <a href="topico2.php">← Estruturas de Decisão</a>
    <a href="topico4.php">Próximo: Funções e Procedimentos →</a>
  </div>

</body>
</html>
