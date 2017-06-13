<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Авторизация</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="registration col-md-4 col-sm-6 col-xs-12">
            <form action="#">
                <fieldset>
                    <label for="r-3" class="custom-input-label">E-mail</label>
                    <input type="email" id="r-3" class="custom-input" placeholder="Введите e-mail адрес">
                </fieldset>
                <fieldset>
                    <label for="r-4" class="custom-input-label">Пароль</label>
                    <input type="password" id="r-4" class="custom-input" placeholder="Введите ваш пароль">
                </fieldset>
                <fieldset>
                    <div class="pull-left">
                        <input type="checkbox" id="r-1" class="custom-checkbox">
                        <label for="r-1">Запомнить меня</label>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="link link-underline link__second-accent link--accent-hover">Забыли пароль?</a>
                    </div>

                </fieldset>
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-link btn-round btn--blue">Вход</button>
            </form>
        </div>
        <div class="already-registered col-md-4 col-sm-6 col-md-offset-1 col-sm-offset-0 col-xs-12">
            <p class="already-registered__title">Или зарегистрируйтесь на сайте</p>
            <a href="#" class="btn btn-round btn--accent"><span>Регистрация</span></a>
        </div>
    </div>


</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
