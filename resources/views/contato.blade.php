<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<style>
.terceira-sessao {
    margin-bottom: 40px;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a class="img" href="#">
                    <img class="logo" src="img/logo-etec.jpg" alt="logo-etec" style="width:70px; height:auto;">
                </a>
            </div>
            <a class="navbar-brand">ETEC da Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">quem-somos</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="row">
            <div class="col">
                <section class="" id="">
                    <img src="img/etec.jpg" class="img-fluid" alt="img/etec.jpg">

                    <div class="">
                        <div class="">
                            <div class="text-center">
                                <h1> <strong>ETEC Zona Leste </strong></h1>
                                <h2><strong>contato</strong></h2>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-1">
                        &nbsp;
                    </div>
                    <div class="col">
                        <div class="container">
                            <h2 class="mt-4">Formulário de Contato</h2>
                            <form method="POST" action="{{ route('enviar-contato') }}">
                                        @csrf
                            <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" id="nome" name="nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="tel" id="telefone" name="telefone" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" id="endereco" name="endereco" class="form-control" required>
                            </div>
                            <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <select id="sexo" name="sexo" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            </select>
                            </div><br>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                            </div>
                    </div>
                    <div class="col-1">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col-1">
                        &nbsp;
                    </div>
                    <div class="col">
                        <footer class="container text-center">
                            © 2024 Etec Zona Leste. Todos os direitos reservados.<br><br>
                            Desenvolvido por Thiago Farias da Silva 3° DS Manhã
                        </footer>
                    </div>
                    <div class="col-1">
                        &nbsp;
                    </div>
                </div>
            </div>

</body>

</html>