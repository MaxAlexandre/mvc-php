<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php if (isset($_SESSION['logado'])): ?>
    <nav class="navbar navbar-dark bg-dark mb-2">
        <a class="navbar-brand" href="/listar-cursos">Home</a>

        <ul class="navbar-nav ml-auto">
            <li class="navbar-item active">
                <a class="nav-link" href="/logout">Sair</a>
            </li>
        </ul>
    </nav>
<?php endif; ?>
<div class="container">
    <div class="jumbotron">
        <h1><?= $titulo; ?></h1>
    </div>

    <?php if (isset($_SESSION['mensagem'])): ?>
        <div class="alert alert-<?= $_SESSION['tipo_mensagem']; ?>">
            <?= $_SESSION['mensagem']; ?>
        </div>
        <?php
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo_mensagem']);
        ?>
    <?php endif; ?>
