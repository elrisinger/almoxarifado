<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Almoxarifado</title>

    <!-- Bootstrap -->
    <link href="<?php echo asset_url("css/bootstrap.min.css")?>"rel="stylesheet">

    <link href="<?php echo asset_url("css/style.css")?>"rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo asset_url("js/jquery.min.js")?>"></script>
    <script src="<?php echo asset_url("js/bootstrap.min.js")?>"></script>
    <script src="<?php echo asset_url("js/script.js")?>"></script>

    <script src="<?php echo asset_url("js/chosen.jquery.min.js")?>"></script>
    <link rel="stylesheet" href="<?php echo asset_url("css/chosen.css")?>">
</head>

<body>
    <div id="dynamicModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <header class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url();?>">Almoxarifado</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estoque<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="<?php echo site_url("groups");?>">Grupos de produtos</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("providers");?>">Fornecedores</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("consumers");?>">Consumidores</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url("report");?>">Relatórios</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url("users");?>">Usuários</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo site_url("session/login");?>" data-toggle="modal" data-target="#dynamicModal">Login</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" >Sobre<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url("license");?>" data-toggle="modal" data-target="#dynamicModal"><span class="glyphicon glyphicon-file"></span> Licença</a>
                            </li>
                            <!--<li><a href="#"><span class="glyphicon glyphicon-usd"></span> Doar</a>
                            </li> -->
                            <li><a target="_blank" href="https://github.com/weslleih/almoxarifado"><span class="glyphicon glyphicon-globe"></span> Página</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </header>
    <div class="container">
