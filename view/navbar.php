<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-light bg-princ-escuro">
        <div class="dropdown">
            <button class="btn btn-primary btn-lg btn-bg-color" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <button class="dropdown-item" type="button">Item 1</button>
                <button class="dropdown-item" type="button">Item 2</button>
                <button class="dropdown-item" type="button">Item 3</button>
            </div>
        </div>
        <a class="navbar-brand justify-self-center" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4b/Webysther_20160310_-_Logo_USP.svg" width="106" height="auto" class="rounded mx-auto d-block" alt="">
        </a>
        <div class="btn-toolbar" role="toolbar">
            <div class="dropdown btn" role="group" aria-label="Notifications">
                <button class="btn btn-secondary btn-lg" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell" width="100" height="100"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="button">Item 1</button>
                    <button class="dropdown-item" type="button">Item 2</button>
                    <button class="dropdown-item" type="button">Item 3</button>
                </div>
            </div>
            <?php if(true){?>
            <form action="../Login/login.php" class="align-self-center">
                <input type="submit" class="btn-lg btn-bg-color text-white" name="submit" value="Login">
            </form>
            <?php }else{?>
            <form action="../Login/logout.php" class="align-self-center">
                <button type="submit" class="btn-lg btn-bg-color text-white" name="submit" value="Cadastro">
            </form>
            <?php }?>
            
        </div>
    </nav>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/1eaa5ac35a.js" crossorigin="anonymous"></script>
</html>