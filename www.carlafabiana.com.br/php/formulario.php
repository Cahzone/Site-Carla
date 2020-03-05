<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/grayscale.min.css" rel="stylesheet">
</head>

<body>
    <form class="form-horizontal">
        <fieldset>

            <!-- Form Name -->
            <legend>Formulário de Mensagens</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="nome">Nome:</label>
                <div class="col-md-5">
                    <input id="nome" name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
                    <span class="help-block">Não esqueça de digitar seu nome</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email:</label>
                <div class="col-md-5">
                    <input id="email" name="email" type="text" placeholder="Digite seu email" class="form-control input-md" required="">
                    <span class="help-block">É obrigatório digitar seu e-mail</span>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="tel">Telefone:</label>
                <div class="col-md-4">
                    <input id="tel" name="tel" type="text" placeholder="Digite seu telefone" class="form-control input-md" required="">
                    <span class="help-block">Digitar apenas numeros</span>
                </div>
            </div>

            
            <!-- Textarea -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="mensagem">Mensagem:</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="mensagem" name="mensagem">Digite sua mensagem</textarea>
                </div>
            </div>
            
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="enviar"></label>
                <div class="col-md-4">
                    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </fieldset>
    </form>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/grayscale.min.js"></script>
    <script src="../js/formulario.js"></script>
</body>

</html>