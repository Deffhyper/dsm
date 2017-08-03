<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Регистрация</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="registration col-md-4 col-sm-6 col-xs-12">
            <form action="#">
                <fieldset>
                    <label for="r-1" class="custom-input-label">Ваше имя</label>
                    <input type="text" id="r-1" class="custom-input" placeholder="Введите ваше имя" autocomplete="off">
                </fieldset>
                <fieldset>
                    <label for="r-2" class="custom-input-label">Фамилия</label>
                    <input type="text" id="r-2" class="custom-input" placeholder="Введите фамилию" autocomplete="off">
                </fieldset>
                <fieldset>
                    <label for="r-3" class="custom-input-label">E-mail</label>
                    <input type="email" id="r-3" class="custom-input" placeholder="Введите e-mail адрес">
                </fieldset>
                <fieldset>
                    <label for="r-4" class="custom-input-label">Пароль</label>
                    <input type="password" id="r-4" class="custom-input" placeholder="Введите ваш пароль">
                </fieldset>
                <fieldset>
                    <label for="r-5" class="custom-input-label">Подтверждение пароля</label>
                    <input type="password" id="r-5" class="custom-input" placeholder="Введите пароль еще раз">
                </fieldset>
                <fieldset>
                    <img src="img/jpeg_files/recaptcha.jpg" alt="rec">
                </fieldset>

                <button type="submit" class="btn btn-link btn-round btn--blue">Регистрация</button>
            </form>
        </div>
        <div class="already-registered col-md-4 col-sm-6 col-md-offset-1 col-sm-offset-0 col-xs-12">
            <p class="already-registered__title">Уже зарегистрированы?</p>
            <a href="#" class="btn btn-round btn--accent"><span>Авторизация</span></a>
        </div>
    </div>


</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
