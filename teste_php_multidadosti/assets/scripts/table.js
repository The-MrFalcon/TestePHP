//Clientes
var tabela = document.getElementById('tabela');
function clientes() {
    removeLast();
    tabela.classList.add('blue');
    var value = "clientes";
    callTable(value);
}

//Usuários
function usuarios() {
    removeLast();
    tabela.classList.add('green');
    var value = "usuarios";
    callTable(value);
}

//Fornecedores
function fornecedores() {
    removeLast();
    tabela.classList.add('purple');
    var value = "fornecedores";
    callTable(value);
}

//Removedor de classe da tabela
function removeLast(tabela) {
    var classes = tabela.classList;
    if (classes.length > 0) {
        var ultimaClasse = classes[classes.length - 1];
        tabela.classList.remove(ultimaClasse);
    }
}

//Função AJAX que chama a tabela
function callTable(value){
    $.ajax({
        url: 'tabela.php',
        type: 'POST',
        data: {
            id: value
        },
        beforeSend: function () {
            $("#table").html('<tr><td colspan="4">Carregando...</td></tr>');
        },
        // Mostrar erro ou sucesso
        success: function (data) {
            $("#table").html(data);
        },
        error: function () {
            $("#table").html('<tr><td colspan="4">Houve um erro ao carregar a tabela.</td></tr>');
        }
    });
}