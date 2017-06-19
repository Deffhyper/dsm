<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Личный кабинет</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="lk-left">
            <!--/////////////// mobile trigger menu /////////////////////////////-->
            <a href="#" class="lk-navigate__mob">
                <span class="icon icon-user"></span>
                <span class="text-bold">Личные данные</span>
                <span class="caret"></span>
            </a>

            <ul class="lk-navigate">
                <li class="lk-navigate__item active">
                    <a href="#">
                        <span class="icon icon-user"></span>
                        <span class="text-bold">Личные данные</span>
                    </a>
                </li>
                <li class="lk-navigate__item">
                    <a href="#">
                        <span class="icon icon-shopping-cart"></span>
                        <span class="text-bold">Ваша корзина</span>
                    </a>
                </li>
                <li class="lk-navigate__item">
                    <a href="#">
                        <span class="icon icon-list"></span>
                        <span class="text-bold">Ваши заказы</span>
                    </a>
                </li>
                <li class="lk-navigate__item">
                    <a href="#">
                        <span class="icon icon-history"></span>
                        <span class="text-bold">История заказов</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="lk-right">
            <section class="lk-content">
                <h2 class="lk-content__title">Личные данные</h2>
                <div class="lk-form">
                    <form action="#">
                        <div class="lk-form__left">
                            <fieldset>
                                <label for="r-1" class="custom-input-label">Ваше имя</label>
                                <input type="text" id="r-1" class="custom-input" placeholder="Введите ваше имя">
                            </fieldset>
                            <fieldset>
                                <label for="r-2" class="custom-input-label">Фамилия</label>
                                <input type="text" id="r-2" class="custom-input" placeholder="Введите фамилию">
                            </fieldset>
                            <fieldset>
                                <label for="r-3" class="custom-input-label">Отчество</label>
                                <input type="text" id="r-3" class="custom-input" placeholder="Введите отчество">
                            </fieldset>
                        </div>
                        <div class="lk-form__right">
                            <fieldset>
                                <label for="r-4" class="custom-input-label">E-mail</label>
                                <input type="email" id="r-4" class="custom-input" placeholder="Введите e-mail адрес">
                            </fieldset>
                            <fieldset>
                                <label for="r-5" class="custom-input-label">Новый пароль</label>
                                <input type="password" id="r-5" class="custom-input" placeholder="Введите новый пароль">
                            </fieldset>
                            <fieldset>
                                <label for="r-6" class="custom-input-label">Повторите пароль</label>
                                <input type="password" id="r-6" class="custom-input"
                                       placeholder="Повторите новый пароль">
                            </fieldset>
                        </div>

                        <div class="lk-form__bottom">
                            <button type="submit" class="btn btn-link btn-round btn--blue">Регистрация</button>
                            <button type="reset" class="btn btn-link btn-round btn--gray">Сбросить</button>
                        </div>
                    </form>
                </div>

            </section>
        </div>
    </div>
</div>


<?php include_once "parts/footer.php" ?>
</body>
</html>
