<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Header</title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/header.css');?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="message" style="font-size: .625rem; padding: 3px; text-align: center">This site is intended for healthcare</div>
    <div class="page-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                Edition :
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ENGLISH</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">DUTSCH</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">  ESPAÑOL</a> 
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> FRANÇAIS</a>     
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> PORTUGUÊS</a>  
                    </li>
                </ul>
                <div class="link-users">
                    <a href="<?php echo base_url();?>medscape/register">Register</a>
                    <a href="<?php echo base_url();?>medscape/login">Login</a>
                </div>
                <div class="header-search">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" autocomplete="off" autocorrect="off" name="q" maxlength="500" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            <i class="material-icons">search</i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <div class="midle-header">
            <a href="<?php echo base_url();?>medscape/index" class="header-logo"><img src="<?php echo base_url('assets/logo.png');?>" alt="Logo"></a>
        </div>
        <div class="container" style="max-resolution: left 120px; max-resolution: right 120px;">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" id="tab-header">
                    <a href="">news & perspective</a>
                    <a href="<?php echo base_url();?>medscape/drugs">drugs & diases</a>
                    <a href="">cme & education</a>
                    <a href="">academy</a>
                    <a href="">video</a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>   
</body>
</html>