<?php 
include '/home/u250789947/public_html/control/UsuarioController.php';

$usuarioController = new UsuarioController();

if(isset($_POST['salvar'])){
    $usuarioController->insertControl();
}

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
        rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center text-primary">Cadastro</h3>
                            </div>
                            <div class="panel-body">
                                <div class="section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class="form-horizontal" role="form" method="POST">
                                                    <div class="form-group" >
                                                        <div class="col-sm-2">
                                                            <label class="control-label" for="nome">Nome Completo</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" placeholder="Nome completo" name="nome"
                                                            id="nome">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-2">
                                                            <label for="email" class="control-label">Email</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="email" class="form-control" id="email" placeholder="Email"
                                                            name="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-2">
                                                            <label for="password" class="control-label">Senha</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control" id="password" placeholder="senha"
                                                            name="senha">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-2">
                                                            <label for="rePassword" class="control-label">Repetir Senha</label>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control" id="rePassword" placeholder="Repetir senha"
                                                            name="rePassword">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12  text-center">
                                                            <button type="reset" class="btn btn-danger btn-xs">Limpar</button>
                                                            <input type="submit" class="btn btn-success" name="salvar" value="Cadastrar">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>