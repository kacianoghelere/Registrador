function mostrarTabela(id) {
    if ($('#tabela').is(':visible')) {
        $('#tabela').fadeOut();
    } else {
        $('#tabela').fadeIn();
    }
};