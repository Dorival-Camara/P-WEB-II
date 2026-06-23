<?php
ini_set('highlight.comment', '#6A9955');
ini_set('highlight.default', '#D4D4D4');
ini_set('highlight.html', '#D4D4D4');
ini_set('highlight.keyword', '#569CD6');
ini_set('highlight.string', '#CE9178');

// ===== Exemplo 1 =====
ob_start();
function calcularMedia($n1, $n2) {
    return ($n1 + $n2) / 2;
}
echo "Média: " . calcularMedia(8, 6);
$saida1 = ob_get_clean();
$cod1 = highlight_string('<?php
function calcularMedia($n1, $n2) {
    return ($n1 + $n2) / 2;
}

echo "Média: " . calcularMedia(8, 6);', true);

// ===== Exemplo 2 =====
ob_start();
function calcularDesconto($preco, $percentual = 10) {
    return $preco - ($preco * $percentual / 100);
}
echo "Desconto padrão (10%): R$ " . number_format(calcularDesconto(200), 2, ',', '.') . "\n";
echo "Desconto de 25%: R$ " . number_format(calcularDesconto(200, 25), 2, ',', '.');
$saida2 = ob_get_clean();
$cod2 = highlight_string('<?php
function calcularDesconto($preco, $percentual = 10) {
    return $preco - ($preco * $percentual / 100);
}

echo "Desconto padrão (10%): R$ " . calcularDesconto(200);
echo "Desconto de 25%: R$ " . calcularDesconto(200, 25);', true);

// ===== Exemplo 3 =====
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
$cod3 = highlight_string('<?php
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
contarAcessos();', true);

// ===== Exemplo 4 =====
ob_start();
function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
$emails = ["aluno@escola.com", "email-invalido", "prof@faculdade.edu.br"];
foreach ($emails as $email) {
    $resultado = validarEmail($email) ? "válido" : "inválido";
    echo "$email → $resultado\n";
}
$saida4 = ob_get_clean();
$cod4 = highlight_string('<?php
function validarEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

$emails = ["aluno@escola.com", "email-invalido", "prof@faculdade.edu.br"];

foreach ($emails as $email) {
    $resultado = validarEmail($email) ? "válido" : "inválido";
    echo "$email → $resultado\n";
}', true);

// ===== Exemplo 5 =====
ob_start();
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}
echo "Fatorial de 5: " . fatorial(5) . "\n";
echo "Fatorial de 8: " . fatorial(8);
$saida5 = ob_get_clean();
$cod5 = highlight_string('<?php
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

echo "Fatorial de 5: " . fatorial(5);
echo "Fatorial de 8: " . fatorial(8);', true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04 - Funções e Procedimentos</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="pagina-4">

  <div class="faixa faixa-4"></div>

  <nav>
    <a href="topico1.php">01 variáveis</a>
    <a href="topico2.php">02 decisão</a>
    <a href="topico3.php">03 laços</a>
    <a href="topico4.php" class="ativo">04 funções</a>
  </nav>

  <div class="hero">
    <div class="numero">04</div>
    <div class="badge badge-4">David Peres</div>
    <h1>Funções e Procedimentos</h1>
    <p>Como organizar, reutilizar e dar tipo seguro ao código com funções.</p>
  </div>

  <div class="indice">
    <a href="#ex1">1. Função com retorno</a>
    <a href="#ex2">2. Valores padrão</a>
    <a href="#ex3">3. Procedimento e static</a>
    <a href="#ex4">4. Type hints</a>
    <a href="#ex5">5. Recursão</a>
  </div>

  <section class="exemplo" id="ex1">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-4">1</span>
      <div>
        <h2>Função com retorno</h2>
        <p>Uma função recebe parâmetros, processa um valor e devolve o resultado com return.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod1 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-4"><?= htmlspecialchars($saida1) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex2">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-4">2</span>
      <div>
        <h2>Parâmetros com valor padrão</h2>
        <p>Um parâmetro pode ter um valor assumido automaticamente quando não é informado na chamada.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod2 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-4"><?= htmlspecialchars($saida2) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex3">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-4">3</span>
      <div>
        <h2>Procedimento e variável static</h2>
        <p>Um procedimento executa uma ação sem retornar valor. static faz a variável manter seu valor entre chamadas.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod3 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-4"><?= htmlspecialchars($saida3) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex4">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-4">4</span>
      <div>
        <h2>Tipagem de parâmetros e retorno (type hints)</h2>
        <p>Declarar tipos (string, bool, etc.) deixa claro o que a função espera receber e devolver.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod4 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-4"><?= htmlspecialchars($saida4) ?></pre>
    </div>
  </section>

  <section class="exemplo" id="ex5">
    <div class="exemplo-cabecalho">
      <span class="exemplo-numero numero-4">5</span>
      <div>
        <h2>Função recursiva</h2>
        <p>Uma função que chama a si mesma até atingir uma condição de parada — aqui, para calcular o fatorial.</p>
      </div>
    </div>
    <div class="codigo"><?= $cod5 ?></div>
    <div class="saida">
      <div class="rotulo">Saída</div>
      <pre class="cor-4"><?= htmlspecialchars($saida5) ?></pre>
    </div>
  </section>

  <div class="rodape">
    <a href="topico3.php">← Laços de Repetição</a>
    <a href="index.php">Voltar ao Início</a>
  </div>

</body>
</html>
