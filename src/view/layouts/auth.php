<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= $style ?>
    <title><?= $title ?></title>
</head>

<body>
<header class="mt-2 mb-2" role="banner" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 logotip">
                <a href="/recipe"><img width="150px" src="/public/image/logo-kulinaru-final.png"></a>
            </div>
            <div class="col-md-8 top-add" id="logout">
                <a rel="nofollow" href="/logout" target="_self"><img width="70px" src="/public/image/logout.png"><b>Logout</b></a>
            </div>
        </div>
    </div>
</header>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">


        <ul class="list-unstyled components">
            <li class="MenuRecipe">
                <a href="#">Recipe</a>
            </li>
            <li class="MenuIngredient">
                <a href="#">Ingredient</a>
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
<?= $script ?>
</body>

</html>