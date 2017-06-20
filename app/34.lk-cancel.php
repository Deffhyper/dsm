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
                <span class="icon icon-list"></span>
                <span class="text-bold">Ваши заказы</span>
                <span class="caret"></span>
            </a>

            <ul class="lk-navigate">
                <li class="lk-navigate__item">
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
                <li class="lk-navigate__item active">
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
                <h2 class="lk-content__title">Отмена заказа</h2>
                <div class="lk-cancel">
                    <div class="lk-cancel__back">
                        <a href="#" class="btn-round btn-gray-border btn-gray-border__caret left">
                            <span class="caret"></span>
                            Назад к списку
                        </a>
                    </div>
                    <p>Вы уверены, что хотите отменить заказ <b class="text-bold">№25 от 25.05.2017</b>? Отмена заказа необратима.</p>
                    <form action="#">
                        <label for="lk-c">Укажите, пожалуйста, причину отмены заказа:</label>
                        <textarea name="" id="lk-c" class="custom-textarea custom-textarea--gray" cols="30" rows="6"></textarea>
                        <div class="lk-cancel__bottom">
                            <button type="submit" class="btn btn-link btn-round btn--blue">Отменить заказ</button>
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
