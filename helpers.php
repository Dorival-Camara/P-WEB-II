<?php
/**
 * Funções auxiliares compartilhadas pelas páginas do site.
 */

// Aplica destaque de sintaxe (tema escuro) usando highlight_string() nativo do PHP
function destacarCodigo($codigo) {
    ini_set('highlight.comment', '#6A9955');
    ini_set('highlight.default', '#D4D4D4');
    ini_set('highlight.html', '#D4D4D4');
    ini_set('highlight.keyword', '#569CD6');
    ini_set('highlight.string', '#CE9178');

    return highlight_string("<?php\n" . $codigo, true);
}

// Renderiza um bloco de exemplo: número, título, explicação, código e saída
function renderizarExemplo($numero, $titulo, $explicacao, $codigo, $saida, $topico) {
    $codigoFormatado = destacarCodigo($codigo);
    ?>
    <section class="exemplo" id="exemplo-<?= $numero ?>">
      <div class="exemplo-cabecalho">
        <span class="exemplo-numero numero-<?= $topico ?>"><?= $numero ?></span>
        <div>
          <h2><?= htmlspecialchars($titulo) ?></h2>
          <p><?= htmlspecialchars($explicacao) ?></p>
        </div>
      </div>
      <div class="codigo"><?= $codigoFormatado ?></div>
      <div class="saida">
        <div class="rotulo">Saída</div>
        <pre class="cor-<?= $topico ?>"><?= htmlspecialchars($saida) ?></pre>
      </div>
    </section>
    <?php
}
