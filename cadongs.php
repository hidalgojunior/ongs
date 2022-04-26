<?php
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="row">
        <nav>
            <div class="nav-wrapper blue ">
                <a href="#!" class="brand-logo"><img src="infointerface.png" class="responsive-img" width="70"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="cadongs.php">Ongs</a></li>
                    <li><a href="listarONGs.php">Listar Ongs</a></li>
                    <li><a href="restrito.php">Acesso Restrito</a></li>
                    <li><a href="faleconosco.php">Fale Conosco</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="cadongs.php">Ongs</a></li>
            <li><a href="listarONGs.php">Listar Ongs</a></li>
            <li><a href="restrito.php">Acesso Restrito</a></li>
            <li><a href="faleconosco.php">Fale Conosco</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="white-text">Cadastre sua ONG</h3>
                <div class="divider"></div>
            </div>
        </div>
        <form class="teal">
            <div class="row">
                <div class="col s12 m4">
                    <h5 class="white-text">Crie sua conta</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <label for="emailOng" class="text-white">E-mail</label>
                    <input type="email" name="emailOng" id="emailOng" class="white-text" />
                </div>
                <div class="col s12 m4">
                    <label for="senhaOng" class="text-white">Senha</label>
                    <input type="password" name="senhaOng" id="senhaOng" class="white-text" />
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 ">
                    <h5 class="white-text">Conta</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <label for="nomeOng">Nome da ONG</label>
                    <input type="text" name="nomeOng" id="nomeOng" />
                </div>
                <div class="col s12 m4">
                    <label for="nomeOng">Tipo de Ong</label>
                    <div class="colunadeformulario grow">
                        <select name="" id="">
                            <option value=""></option>
                            <option>Animais</option>
                            <option>Social</option>
                            <option>Ambiental</option>
                            <option>Crianças Carentes</option>
                            <option>Combate à Pobreza</option>
                            <option>Violencia Domestica</option>
                            <option>Moradores de Rua</option>
                            <option>Dependencia Quimica</option>
                            <option>Deficientes</option>
                            <option>Azilos</option>
                            <option>Doenças Crônicas</option>
                            <option>Outros</option>

                        </select>
                        <div class="row">
                            <div class="col s12 m4">
                                <label for="Logo da Ong">Logo da Ong</label>
                                <input type="file" name="Logo da Ong" id="Logo da Ong" />
                            </div>

                            <div class="row">
                            <div class="col s12 m4">
                                <label for="Descreva sua Ong/Do que ela precisa?">Descreva sua Ong/Do que ela precisa?</label>
                                <textarea></textarea>
                            </div>

                        </div>

                    </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript">
        M.AutoInit();
    </script>
</body>

</html>