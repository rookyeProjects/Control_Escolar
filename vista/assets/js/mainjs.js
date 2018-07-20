var x;
x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
    loadUsers();        
}
function loadUsersList() {
    $('#contenido').html("");
    $.post("usuarios.php", function(response) {        
        $('#contenido').html(response);
        $('#contenido').fadeIn();
    });
}  