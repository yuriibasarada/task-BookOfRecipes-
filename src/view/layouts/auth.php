<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/layouts/auth.css">
    <?= $style ?>
    <title><?= $title ?></title>
</head>

<body>
<header class="mt-2 mb-2" role="banner" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 logotip">
                <a href="/recipe?token=<?=session_id()?>"><img width="150px" src="/public/image/logo-kulinaru-final.png"></a>
            </div>
            <div class="col-md-8 top-add" id="logout">
                <a rel="nofollow" onclick="logout()" href="#" target="_self"><img width="70px" src="/public/image/logout.png"><b>Logout</b></a>
            </div>
        </div>
    </div>
</header>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">


        <ul class="list-unstyled components">
            <li class="MenuRecipe">
                <a href="/recipe?token=<?=session_id()?>">Recipe</a>
            </li>
            <li class="MenuIngredient">
                <a href="/ingredient?token=<?=session_id()?>">Ingredient</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Menu</span>
                </button>

            </div>
        </nav>
    </div>
    <?php echo $content; ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/public/js/layouts/auth/toggleMenu.js"></script>
<script src="/public/js/layouts/auth/logout.js"></script>
<?= $script ?>
</body>

</html>