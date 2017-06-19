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
                <h2 class="lk-content__title">Заказ 25</h2>
                <div class="lk-order-list">
                    <div class="lk-order-item">
                        <div class="lk-order-item__header">
                            <p class="lk-order-title text-bold">Заказ №25 </p>
                            <span>Дата заказа: <time>25.05.2017</time></span>
                            <a href="#" class="btn btn-link btn-caret"><span>Подробнее</span></a>
                        </div>
                        <div class="lk-order-item__content container-fluid">
                            <div class="col-sm-6 col-xs-12 lk-order-item__content--left">
                                    <p class="lk-order-title text-bold">Информация о заказе</p>
                                    <ul class="lk-order-item__content--list">
                                        <li>
                                            <span>Текущий статус заказа: </span>
                                            <span>новый</span>
                                        </li>
                                        <li>
                                            <span>Сумма к оплате: </span>
                                            <span class="text-bold">120 456 грн.</span>
                                        </li>
                                        <li>
                                            <span>Отменен: </span>
                                            <span>нет </span>
                                            <a href="#" class="link__red link-underline">Отменить</a>
                                        </li>
                                    </ul>

                                    <p class="lk-order-title text-bold">Личные данные</p>
                                    <ul class="lk-order-item__content--list">
                                        <li>
                                            <span>Имя: </span>
                                            <span>Александр</span>
                                        </li>
                                        <li>
                                            <span>Мобильный телефон: </span>
                                            <a href="tel:+38 (035) 345-56-89" class="text-bold lk-order-item__tel">+38 (035) 345-56-89</a>
                                        </li>
                                        <li>
                                            <span>E-mail: </span>
                                            <a href="mailto:boiko@example.com" class="link link-underline link--accent-hover">boiko@example.com</a>
                                        </li>
                                    </ul>
                                </div>
                            <div class="col-sm-6 col-xs-12 lk-order-item__content--right">
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
                            <div class="clearfix"></div>
                            <div class="col-sm-12 lk-order-item__content--bottom">
                                    <p class="lk-order-title text-bold">Содержимое заказа</p>
                                    <table class="order-table__item">
                                        <tbody>
                                        <tr>
                                            <td><img src="img/jpeg_files/cart-item-1.jpg" alt="photo"></td>
                                            <td><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable </a></td>
                                            <td>1 шт.</td>
                                            <td>
                                                <p class="old-price">121 789 грн</p>
                                                <p class="current-price text-bold text-accent"><a href="#">120 438 грн</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/jpeg_files/cart-item-2.jpg" alt="photo"></td>
                                            <td><a href="#" class="text-bold link__accent--hover">Canon i-SENSYS LBP6230DW with Wi-Fi (9143B003)</a></td>
                                            <td>1 шт.</td>
                                            <td>
                                                <p class="current-price text-bold text-accent"><a href="#">3 738 грн</a></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/jpeg_files/cart-item-1.jpg" alt="photo"></td>
                                            <td><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable </a></td>
                                            <td>1 шт.</td>
                                            <td>
                                                <p class="old-price">121 789 грн</p>
                                                <p class="current-price text-bold text-accent"><a href="#">120 438 грн</a></p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" class="btn btn-round btn--accent"><span>Повторить заказ</span></a>
                                    <a href="#" class="btn btn-link btn-with-accent-border">Отменить заказ</a>
                                </div>
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
