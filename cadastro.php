<?php include("views/partials/header.php"); ?>
<body style="background-color: #585858;">
    <?php include("views/partials/navbar.php"); ?>
    <div class="container">
        <div class="card text-white bg-dark mt-2 mb-2">
            <div class="card-body">
                <h1>Cadastrar Usuário</h1>
                <form method="POST" action="cadastro.php">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Digite o nome completo">
                    </div>
                    <div class="form-group">
                        <label>Informe seu email:</label>
                        <input type="email" name="email" class="form-control" placeholder="email@email.com.br">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</body>
<?php include("views/partials/footer.php"); ?>