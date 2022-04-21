<?php
$acao = 'recuperar';
require "pessoa_controller.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/records.css">
    <!-- <link rel="stylesheet" href="css/modal.css"> -->


    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="main.js" defer></script>
    <title>Listagem</title>
</head>

<body>
    <header>
        <!-- <h1 class="header-title">Cadastro de pessoas</h1> -->
    </header>
    <main>
        <button type="button" class="button blue mobile" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Cadastrar pessoa
        </button>
        <table class="records">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data nascimento</th>
                    <th>Data/hora criação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pessoas as $indice => $pessoa) { ?>
                    <tr>
                        <td><?= $pessoa->id ?></td>
                        <td><?= $pessoa->name ?></td>
                        <td><?= $pessoa->email ?></td>
                        <td><?= $pessoa->idade ?></td>
                        <td><?= $pessoa->createdAt ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Novo Cliente</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form class="modal-form">
                    <input type="text" class="modal-field" placeholder="Nome do Cliente">
                    <input type="email" class="modal-field" placeholder="e-mail do Cliente">
                    <input type="text" class="modal-field" placeholder="Celular do Cliente">
                    <input type="text" class="modal-field" placeholder="Cidade do Cliente">
                </form>
                <footer class="modal-footer">
                    <button class="button green">Salvar</button>
                    <button class="button blue">Cancelar</button>
                </footer>
            </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="pessoa_controller.php?acao=inserir" class="mu-contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Cadastrar pessoa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label>Nome:</label>
                            <input name="name" class="" type="text" />
                            </p>
                            <label>Email:</label>
                            <input name="email" class="" type="text" />
                            </p>
                            <label>Idade:</label>
                            <input name="idade" type="date" class="" type="text" />

                        </div>
                        <div class="modal-footer">
                            <button class="button blue mobile">Cadastar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>