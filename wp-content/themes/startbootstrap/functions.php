<?php
// Função para adicionar suporte a imagens destacadas
function meu_tema_suporte_imagens_destacadas() {
    add_theme_support('post-thumbnails');
}
// Hook para a função
add_action('after_setup_theme', 'meu_tema_suporte_imagens_destacadas');
?>
