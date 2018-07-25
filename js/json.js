//============================================================================================
// JQuery / JSON - Script responsável por encapsular todos os tratamentos em JSON para o HTML
//============================================================================================

$(function () {
    //-----------------------------------------------------
    // Load List
    //-----------------------------------------------------

    /**
     * Função JQuery usando o recurso $.getJSON para 
     * resgatar o resultado de uma URL e com isso
     * montarmos a lista da tabela instrutores
     */
    $(document).ready(function () {

        var url = 'http://localhost/avaliacao/consultas.php?instrutores';

        $.getJSON(url, function (json) {

            // String de estrutura da table
            var instrutores = '';

            // Carregando a string
            $.each(json, function (key, value) {
                instrutores += '<tr>';
                instrutores += '<td>' + value.matricula + '</td>';
                instrutores += '<td>' + value.nome + '</td>';
                instrutores += '<td>' + parseFloat(value.notaDeAvaliacao) + '</td>';
                instrutores += '</tr>';
            });

            $('#tb_instrutores').append(instrutores);

            //Usamos o método fail, caso não retorne nada
        }).fail(function () {
            //Não retornando um valor válido, ele mostra a mensagem
            toastr.error("Ocorreu um erro!");
        });
    });
    //-----------------------------------------------------
    // Load onclick
    //-----------------------------------------------------

    /**
     * Atribui ao elemento #btn_buscar, o evento click
     * Click, dispara uma ação, quando o elemento
     * é clicado, no nosso caso o botão(btn_buscar)
     */
    $("#btn_buscar").click(function () {
        /**
         * Resgatamos o valor do campo #search_matricula
         * usamos o replace, pra remover tudo que não for numérico,
         * com uma expressão regular
         */
        var matricula = $("#search_matricula").val().replace('.', '');
        matricula = matricula.replace('-', '');

        //Verifica se não está vazio
        if (matricula !== "") {

            //Cria variável com a URL da consulta, passando a matricula
            var url = 'http://localhost/avaliacao/consultas.php?instrutores=' + matricula;

            /**
              * Fazemos uma requisição a URL, como o retorno é em json, 
              * usamos o método $.getJSON;
              * Que é composta pela URL, e uma função anonima que vai preencher
              * os inputs com os dados que vieram do resultado json
              */
            $.getJSON(url, function (json) {
                //Atribuimos o valor aos inputs
                $("#matricula").val(json.matricula);
                $("#nome").val(json.nome);
                $("#notaDeAvaliacao").val(json.notaDeAvaliacao);

                //Usamos o método fail, caso não retorne nada
            }).fail(function () {
                //Não retornando um valor válido, ele mostra a mensagem
                $("#matricula").val("");
                $("#nome").val("");
                $("#notaDeAvaliacao").val("");
                toastr.error("Matricula incorreta ou inexistente!");
            });
        }
    });
});
