<?php
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
                <li><a href="cadongs.php">ONGs</a></li>
                <li><a href="listarONGs.php">Listar</a></li>
                <li><a href="restrito.php">Acesso Restrito</a></li>
                <li><a href="faleconosco.php">Fale Conosco</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="cadongs.php">ONGs</a></li>
        <li><a href="listarONGs.php">Listar</a></li>
        <li><a href="restrito.php">Acesso Restrito</a></li>
        <li><a href="faleconosco.php">Fale Conosco</a></li>
    </ul>
</div>
<div class="container">
    <div style="min-height: 55vh">
        <div class="row center  valign-wrapper">
            <?php
            for ($i = 1; $i <=12; $i++){
                echo '
            
            <div class="col s1 center">
                <img src="icones/'.$i.'.svg" class="center circle responsive-img" width="100" height="100">
            </div>
            ';
                }?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
    <div class="col s4 offset-s4 center">
        <img src="frufru.png" class="center responsive-img " width="100%">
    </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    M.AutoInit();
</script>
</body>
</html>
