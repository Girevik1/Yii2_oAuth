<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

?>
<!-- контейнер для 3х столбцов -->
<div class="container">
    <div class="row">
        <div class="col-md-4" style="background-color: #0b72b8; ">first</div>
        <div class="col-md-4" style="background-color: #ffff00; ">second</div>
        <div class="col-md-4" style="background-color: #7d7d7d; ">third</div>
    </div>
</div>
<br>
<br>
<!-- бар для сайта-->
<nav class="navbar navbar-expand-lg navbar-default bg-dark">
    <a class="navbar-brand" href="#">ITPROGER</a>
    <div>
        <ul class="nav navbar-nav">
            <li class="active">
                <a class="nav-link" href="#">Главная </a>
            </li>
            <li>
                <a class="nav-link" href="#">О нас</a>
            </li>
            <li>
                <a class="nav-link" href="#">Обратная связь</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<br>


<!--применение таблицы-->
<div class="table-responsive">
    <table class=" table table-bordered table-hover">
        <thead>
        <tr class="success">
            <th>name</th>
            <th>surename</th>
            <th>thirdname</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="active">Artur</td>
            <td>Timerkhanov</td>
            <td>Damirovich</td>
        </tr>
        <tr>
            <td class="warning">Artur2</td>
            <td>Timerkhanov2</td>
            <td>Damirovich2</td>
        </tr>
        <tr>
            <td>Artur3</td>
            <td>Timerkhanov3</td>
            <td>Damirovich3</td>
        </tr>
        </tbody>
    </table>
</div>

<hr>
<!--кнопки bootstrap-->
<button class="btn btn-dark">Standart</button>
<input type="submit" class="btn btn-primary" value="Main">
<input type="button" class="btn btn-success" value="Enter">
<a href="#" class="btn btn-info" role="button">Info</a>
<button class="btn btn-warning"> Warning</button>
<button class="btn btn-danger"> Danger</button>
<button class="btn btn-link"> Link</button>
<br><br>
<button class="btn btn-dark btn-lg">Button</button>
<button class="btn btn-dark btn-md">Button</button>
<button class="btn btn-dark btn-sm"><i class="glyphicon glyphicon-apple" style="color: forestgreen;"></i>all ok</button>
<br><br>
<button class="btn btn-success btn-md btn-block">Button</button>
<br><br>
<button class="btn btn-dark btn-lg active">Button</button>
<button class="btn btn-dark btn-lg disable">Button</button>
<br><br>
<div lass="btn-group btn-group-justified" role="group">
    <div class="btn-group btn-group-md" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="checkbox">Tool 1
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">Tool 2
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">Tool 3
        </label>
    </div>
    <div class="btn-group btn-group-md" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="checkbox">Tool 1
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">Tool 2
        </label>
        <label class="btn btn-primary">
            <input type="checkbox">Tool 3
        </label>
    </div>
    <br><br>
    <div class="btn-group-vertical btn-group-md" data-toggle="buttons">
        <label class="btn btn-primary">
            <input type="radio">Tool 1
        </label>
        <label class="btn btn-primary">
            <input type="radio">Tool 2
        </label>
        <label class="btn btn-primary">
            <input type="radio">Tool 3
        </label>
    </div>
</div>
<br>
<br>
<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label class="btn btn-secondary active">
        <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
    </label>
    <label class="btn btn-secondary">
        <input type="radio" name="options" id="option2" autocomplete="off"> Radio
    </label>
</div>
<br>
<br>
<br>

<!--Шапка с выпадающими списками-->
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Навигация</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">itProger</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Ссылка</a></li>
                <li><a href="#">Ссылка</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Действие</a></li>
                        <li><a href="#">Другое действие</a></li>
                        <li><a href="#">Что-то еще</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Отдельная ссылка</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Еще одна отдельная ссылка</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Поиск">
                </div>
                <button type="submit" class="btn btn-default">Отправить</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Ссылка</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Действие</a></li>
                        <li><a href="#">Другое действие</a></li>
                        <li><a href="#">Что-то еще</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Отдельная ссылка</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="dropdown">
    <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Список <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li class="dropdown-header">Заголовок 1</li>
        <li><a href="#">CSS</a></li>
        <li class="disabled"><a href="#">HTML</a></li>
        <li><a href="#">jQuery</a></li>
        <li class="divider"></li>
        <li class="dropdown-header">Заголовок 2</li>
        <li><a href="#">Javascript</a></li>
    </ul>
</div>
<br>

<a data-toggle="collapse" href="#hide">JS Collapse</a>
<div class="collapse in" id="hide">
    Какой-либо скрытый текст!
</div>

<div class="panel-group" id="collapse-group">
    <div class="panel panel-info">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#collapse-group" href="#el1">Первый</a>
        </div>
        <div id="el1" class="collapse in">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
    </div>

    <div class="panel panel-danger">
        <div class="panel-heading">
            <a data-toggle="collapse" data-parent="#collapse-group" href="#el2">Второй</a>
        </div>
        <div id="el2" class="collapse">
            <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
        </div>
    </div>
</div>

<br>
                 <!-- Bootstrap 4: -->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <!-- Required meta tags -->-->
<!--    <meta charset="utf-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
<!---->
<!--    <!-- Bootstrap CSS -->-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
<!---->
<!--    <title>Hello, world!</title>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<div class="container">-->
<!--    <br>-->
<!--    <!-- Панель навигации -->-->
<!--    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-top">-->
<!--        <a href="#" class="navbar-brand">Project</a>-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--            <ul class="navbar-nav mr-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="#" class="nav-link">Link</a>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a href="#" class="dropdown-item">Action</a>-->
<!--                        <a href="#" class="dropdown-item">Another action</a>-->
<!--                        <div class="dropdown-divider"></div>-->
<!--                        <a href="#" class="dropdown-item">Something else here</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a href="#" class="nav-link disabled">Disabled</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="form-inline my-2 my-lg-0">-->
<!--                <input type="search" class="form-control mr-sm-2" placeholder="" aria-label="search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Искать</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </nav>-->
<!---->
<!--    <!-- Конец панели навигации -->-->
<!---->
<!--    <!-- Джумботрон -->-->
<!---->
<!--    <div class="jumbotron">-->
<!--        <h1 class="display-4">Привет, мир!</h1>-->
<!--        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis minus ratione iure id nisi laborum architecto sit quibusdam commodi, quidem itaque ea ad in, doloremque voluptatem nesciunt labore ipsa cumque dignissimos minima. Modi illo nobis ducimus reiciendis ipsum itaque voluptatum error hic ex, fuga, dolore ad fugiat laboriosam. Optio, ipsum?</p>-->
<!--        <hr class="my-4">-->
<!--        <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>-->
<!--        <p class="lead">-->
<!--            <a class="btn btn-primary btn-lg" href="#" role="button">Узнать больше</a>-->
<!--        </p>-->
<!--    </div>-->
<!---->
<!--    <!-- Конец джумботрона -->-->
<!---->
<!--    <!-- Карточки -->-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-sm-4">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Специальный заголовок</h5>-->
<!--                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--                    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Специальный заголовок</h5>-->
<!--                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--                    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-4">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Специальный заголовок</h5>-->
<!--                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
<!--                    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <!-- Конец карточек -->-->
<!---->
<!--    <hr class="my-4">-->
<!---->
<!---->
<!--</div>-->
<!---->
<!---->
<!--<!-- Optional JavaScript -->-->
<!--<!-- jQuery first, then Popper.js, then Bootstrap JS -->-->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
<!--</body>-->
<!--</html>-->