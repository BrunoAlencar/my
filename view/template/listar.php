<?php
include '../../control/UsuarioController.php';
include 'header.html';
$usuarioController = new UsuarioController();
$usuarioController->delete();
?>
<!DOCTYPE html>
<html>
    
    <head></head>
    
    <body>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
        rel="stylesheet" type="text/css">
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title  text-primary">Usuarios</h3>
                            </div>
                            <div class="panel-body">
                                <div class="section section-default">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-11 col-sm-11 col-lg-11 col-xs-11">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th><h3>Nome Completo</h3></th>
                                                            <th><h3>Email</h3></th>
                                                            <th><h3>Editar</h3></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr></tr>
                                                        <tr></tr>
                                                      <?php foreach ($usuarioController->findAll() as $usuario) { ?>
                                                        <tr>
                                                            <td>
                                                                <h4><?php echo $usuario->nome;?></h5></td>
                                                            <td>
                                                                <h4><?php echo $usuario->email;?></h5></td>
                                                            <td>
                                                                <?php echo "<a href='editar.php?acao=atualizar&id=". $usuario->id ."' class='btn btn-primary' role='button'>
                                                                <span class='glyphicon glyphicon-cog'
                                                                aria-hidden='true'></span>";?>
                                                                <?php echo "<a href='listar.php?acao=deletar&id=" . $usuario->id . "' class='btn btn-danger' role='button'>
                                                                <span class='glyphicon glyphicon-remove'
                                                                aria-hidden='true'></span>";?></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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
<?php include './footer.html';?>