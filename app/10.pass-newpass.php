<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Восстановление пароля</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="pass-recovery">
            <form action="#">
                <fieldset>
                    <label for="np-1" class="custom-input-label">Новый пароль</label>
                    <input type="password" id="np-1" class="custom-input" placeholder="Введите новый пароль">
                </fieldset>
                <fieldset>
                    <label for="np-2" class="custom-input-label">Повторите новый пароль</label>
                    <input type="password" id="np-2" class="custom-input" placeholder="Введите новый пароль еще раз">
                </fieldset>

                <button type="submit" class="btn btn-link btn-round btn--blue">Отправить</button>
            </form>
        </div>
    </div>


</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
