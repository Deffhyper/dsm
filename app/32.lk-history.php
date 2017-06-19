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
                <span class="icon icon-history"></span>
                <span class="text-bold">История заказов</span>
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
                <li class="lk-navigate__item">
                    <a href="#">
                        <span class="icon icon-list"></span>
                        <span class="text-bold">Ваши заказы</span>
                    </a>
                </li>
                <li class="lk-navigate__item active">
                    <a href="#">
                        <span class="icon icon-history"></span>
                        <span class="text-bold">История заказов</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="lk-right">
            <section class="lk-content">
                <h2 class="lk-content__title">История заказов</h2>
                <div class="lk-order-list">
                    <div class="lk-order-item">
                        <div class="lk-order-item__header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12"><p class="lk-order-title text-bold">Заказ №25 </p></div>
                                    <div class="col-sm-4 col-xs-12"><span>Дата заказа: <time>25.05.2017</time></span></div>
                                    <div class="col-sm-4 col-xs-12"><a href="#" class="btn btn-link btn-caret pull-right"><span>Подробнее</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="lk-order-item__content container-fluid">
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--left">
                                <p class="lk-order-title text-bold">Оплата</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ оплаты: </span>
                                        <span>наличные</span>
                                    </li>
                                    <li>
                                        <span>Статус оплаты: </span>
                                        <span>оплачен</span>
                                    </li>
                                    <li>
                                        <span>Сумма к оплате: </span>
                                        <span class="lk-order-title text-bold">120 456 грн.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--right">

                                <p class="lk-order-title text-bold">Доставка</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ доставки: </span>
                                        <span>Новая почта</span>
                                    </li>
                                    <li>
                                        <span>Статус доставки: </span>
                                        <span>отгружен</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <a href="#" class="btn btn-round btn--accent pull-right"><span>Повторить заказ</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="lk-order-item">
                        <div class="lk-order-item__header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12"><p class="lk-order-title text-bold">Заказ №25 </p></div>
                                    <div class="col-sm-4 col-xs-12"><span>Дата заказа: <time>25.05.2017</time></span></div>
                                    <div class="col-sm-4 col-xs-12"><a href="#" class="btn btn-link btn-caret pull-right"><span>Подробнее</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="lk-order-item__content container-fluid">
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--left">
                                <p class="lk-order-title text-bold">Оплата</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ оплаты: </span>
                                        <span>наличные</span>
                                    </li>
                                    <li>
                                        <span>Статус оплаты: </span>
                                        <span>оплачен</span>
                                    </li>
                                    <li>
                                        <span>Сумма к оплате: </span>
                                        <span class="lk-order-title text-bold">120 456 грн.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--right">

                                <p class="lk-order-title text-bold">Доставка</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ доставки: </span>
                                        <span>Новая почта</span>
                                    </li>
                                    <li>
                                        <span>Статус доставки: </span>
                                        <span>отгружен</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <a href="#" class="btn btn-round btn--accent pull-right"><span>Повторить заказ</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="lk-order-item">
                        <div class="lk-order-item__header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12"><p class="lk-order-title text-bold">Заказ №25 </p></div>
                                    <div class="col-sm-4 col-xs-12"><span>Дата заказа: <time>25.05.2017</time></span></div>
                                    <div class="col-sm-4 col-xs-12"><a href="#" class="btn btn-link btn-caret pull-right"><span>Подробнее</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="lk-order-item__content container-fluid">
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--left">
                                <p class="lk-order-title text-bold">Оплата</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ оплаты: </span>
                                        <span>наличные</span>
                                    </li>
                                    <li>
                                        <span>Статус оплаты: </span>
                                        <span>оплачен</span>
                                    </li>
                                    <li>
                                        <span>Сумма к оплате: </span>
                                        <span class="lk-order-title text-bold">120 456 грн.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--right">

                                <p class="lk-order-title text-bold">Доставка</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ доставки: </span>
                                        <span>Новая почта</span>
                                    </li>
                                    <li>
                                        <span>Статус доставки: </span>
                                        <span>отгружен</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <a href="#" class="btn btn-round btn--accent pull-right"><span>Повторить заказ</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="lk-order-item">
                        <div class="lk-order-item__header">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12"><p class="lk-order-title text-bold">Заказ №25 </p></div>
                                    <div class="col-sm-4 col-xs-12"><span>Дата заказа: <time>25.05.2017</time></span></div>
                                    <div class="col-sm-4 col-xs-12"><a href="#" class="btn btn-link btn-caret pull-right"><span>Подробнее</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="lk-order-item__content container-fluid">
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--left">
                                <p class="lk-order-title text-bold">Оплата</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ оплаты: </span>
                                        <span>наличные</span>
                                    </li>
                                    <li>
                                        <span>Статус оплаты: </span>
                                        <span>оплачен</span>
                                    </li>
                                    <li>
                                        <span>Сумма к оплате: </span>
                                        <span class="lk-order-title text-bold">120 456 грн.</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12 lk-order-item__content--right">

                                <p class="lk-order-title text-bold">Доставка</p>
                                <ul class="lk-order-item__content--list">
                                    <li>
                                        <span>Способ доставки: </span>
                                        <span>Новая почта</span>
                                    </li>
                                    <li>
                                        <span>Статус доставки: </span>
                                        <span>отгружен</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <a href="#" class="btn btn-round btn--accent pull-right"><span>Повторить заказ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
