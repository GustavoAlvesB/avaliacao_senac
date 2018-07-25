<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Avaliação</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .line {
        border-left: 6px solid orange;
        height: 37%;
        position: absolute;
        left: 50%;
        margin-left: -3px;
        top: 2%;
    }
    </style>
  </head>
  <body>
    <main>
        <section>
            <div class="container-fluid" style="margin-top: 2%">
                <div class="col-md-4 col-md-offset-1 pull-left text-center">
                <fieldset>
                        <legend>Localizar instrutor</legend>
                        <form>
                            <div class="form-group">
                                <label for="search_matricula">Informe a Matricula</label>
                                <input type="number" id="search_matricula" name="matricula" class="form-control" value="">
                            </div>
                            <button type="button" id="btn_buscar" class="btn btn-info btn-block">Buscar</button>
                        </form>
                    </fieldset>
                </div>
                <div class="line"></div>
                <div class="col-md-4 col-md-offset-right-1 pull-right">
                    <fieldset>
                        <legend>Dados do instrutor</legend>
                        <form>
                            <div class="form-group">
                                <label for="_matricula">Matricula</label>
                                <input type="number" id="matricula" name="matricula" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="_nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="_nota">Nota de Avaliação</label>
                                <input type="number" step="any" id="notaDeAvaliacao" name="nota" class="form-control" value="">
                            </div>
                        </form>
                    </fieldset>
                </div>
                <div class="col-md-10 col-md-offset-1" style="margin-top: 2%">
                <table class="table table-striped table-bordered table-hover" id="tb_instrutores">
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Nota</th>
                    </tr>
                </table>
                </div>
            </div>
        </section>
    </main>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Script JQuery para consumir as saídas json e carregar o formulário -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="js/json.js"></script>
  </body>
</html>