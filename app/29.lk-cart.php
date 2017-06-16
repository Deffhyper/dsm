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
                <span class="icon icon-shopping-cart"></span>
                <span class="text-bold">Ваша корзина</span>
                <span class="caret"></span>
            </a>

            <ul class="lk-navigate">
                <li class="lk-navigate__item">
                    <a href="#">
                        <span class="icon icon-user"></span>
                        <span class="text-bold">Личные данные</span>
                    </a>
                </li>
                <li class="lk-navigate__item active">
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
                <h2 class="lk-content__title">Корзина</h2>
                <div class="lk-cart-block">
                    <ul class="lk-cart-block__nav">
                        <li class="active"><a href="#">Готовые к заказу</a></li>
                        <li><a href="#">Отложенные <span class="deferred-goods-label">3</span></a></li>
                    </ul>

                    <table class="lk-cart-table__head">
                        <tbody>
                        <tr>
                            <td class="text-bold">Товар</td>
                            <td class="text-bold">Количество</td>
                            <td class="text-bold">Сумма</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="lk-cart-block__content">

                        <div class="lk-cart-table active">
                            <table class="lk-cart-table__body">
                                <tbody>
                                    <tr class="lk-cart-table__body--item">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="img"><img src="img/jpeg_files/cart-item-big-1.jpg" alt="image"></td>
                                                        <td class="text">
                                                            <ul>
                                                                <li><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable</a></li>
                                                                <li>Цена: </li>
                                                                <li>
                                                                    <span class="old-price">121 789 грн</span>
                                                                    <a href="#" class="current-price text-accent text-bold">120 438 грн</a>
                                                                </li>
                                                                <li><span class="discount">Скидка: <span class="text-bold">5%</span></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="goods-amount">
                                                <form action="#">
                                                    <button type="button" class="dec"><span class="caret"></span></button>
                                                    <input type="text" value="1 шт." class="goods-amount-input">
                                                    <button type="button" class="inc"><span class="caret"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="cart-total-item">
                                                <li><span class="mob text-bold">Сумма: </span><a href="#" class="text-bold text-accent">120 438 грн</a></li>
                                                <li><a href="#" class="btn btn-link btn-with-accent-border">Отложить товар</a></li>
                                            </ul>
                                        </td>
                                        <td class="delete-item"><a href="#"></a></td>
                                    </tr>
                                    <tr class="lk-cart-table__body--item">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="img"><img src="img/jpeg_files/cart-item-big-2.jpg" alt="image"></td>
                                                        <td class="text">
                                                            <ul>
                                                                <li><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable</a></li>
                                                                <li>Цена: </li>
                                                                <li>
                                                                    <a href="#" class="current-price text-accent text-bold">120 438 грн</a>
                                                                </li>
                                                                <li><span class="discount">Скидка: <span class="text-bold">5%</span></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="goods-amount">
                                                <form action="#">
                                                    <button type="button" class="dec"><span class="caret"></span></button>
                                                    <input type="text" value="1 шт." class="goods-amount-input">
                                                    <button type="button" class="inc"><span class="caret"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="cart-total-item">
                                                <li><span class="mob text-bold">Сумма: </span><a href="#" class="text-bold text-accent">120 438 грн</a></li>
                                                <li><a href="#" class="btn btn-link btn-with-accent-border">Отложить товар</a></li>
                                            </ul>
                                        </td>
                                        <td class="delete-item"><a href="#"></a></td>
                                    </tr>
                                    <tr class="lk-cart-table__body--item">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="img"><img src="img/jpeg_files/cart-item-big-3.jpg" alt="image"></td>
                                                        <td class="text">
                                                            <ul>
                                                                <li><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable</a></li>
                                                                <li>Цена: </li>
                                                                <li>
                                                                    <span class="old-price">121 789 грн</span>
                                                                    <a href="#" class="current-price text-accent text-bold">120 438 грн</a>
                                                                </li>
                                                                <li><span class="discount">Скидка: <span class="text-bold">5%</span></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="goods-amount">
                                                <form action="#">
                                                    <button type="button" class="dec"><span class="caret"></span></button>
                                                    <input type="text" value="1 шт." class="goods-amount-input">
                                                    <button type="button" class="inc"><span class="caret"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="cart-total-item">
                                                <li><span class="mob text-bold">Сумма: </span><a href="#" class="text-bold text-accent">120 438 грн</a></li>
                                                <li><a href="#" class="btn btn-link btn-with-accent-border">Отложить товар</a></li>
                                            </ul>
                                        </td>
                                        <td class="delete-item"><a href="#"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="lk-cart-table__footer">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-7 col-xs-12">
                                            <div class="lk-cart-table__footer--discountCode">
                                                <form action="#">
                                                    <label for="dc-1">Введите номер купона для скидки:</label>
                                                    <input type="text" id="dc-1">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-5 col-xs-12">
                                            <div class="order-table__total">
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td>Товаров на сумму:</td>
                                                        <td><span class="text-bold">120 438 грн</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="text-bold">Итого:</span></td>
                                                        <td><span class="text-bold text-accent">120 438 грн</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <a href="#" class="btn btn-link btn-round btn--blue">Оформить заказ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lk-cart-table">
                            <table class="lk-cart-table__body">
                                <tbody>
                                    <tr class="lk-cart-table__body--item">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="img"><img src="img/jpeg_files/cart-item-big-2.jpg" alt="image"></td>
                                                        <td class="text">
                                                            <ul>
                                                                <li><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable</a></li>
                                                                <li>Цена: </li>
                                                                <li>
                                                                    <a href="#" class="current-price text-accent text-bold">120 438 грн</a>
                                                                </li>
                                                                <li><span class="discount">Скидка: <span class="text-bold">5%</span></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="goods-amount">
                                                <form action="#">
                                                    <button type="button" class="dec"><span class="caret"></span></button>
                                                    <input type="text" value="1 шт." class="goods-amount-input">
                                                    <button type="button" class="inc"><span class="caret"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="cart-total-item">
                                                <li><span class="mob text-bold">Сумма: </span><a href="#" class="text-bold text-accent">120 438 грн</a></li>
                                                <li><a href="#" class="btn btn-link btn-with-accent-border">Отложить товар</a></li>
                                            </ul>
                                        </td>
                                        <td class="delete-item"><a href="#"></a></td>
                                    </tr>
                                    <tr class="lk-cart-table__body--item">
                                        <td>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="img"><img src="img/jpeg_files/cart-item-big-3.jpg" alt="image"></td>
                                                        <td class="text">
                                                            <ul>
                                                                <li><a href="#" class="text-bold link__accent--hover">Epson Stylus Photo P50 (C11CA45341) + USB cable</a></li>
                                                                <li>Цена: </li>
                                                                <li>
                                                                    <span class="old-price">121 789 грн</span>
                                                                    <a href="#" class="current-price text-accent text-bold">120 438 грн</a>
                                                                </li>
                                                                <li><span class="discount">Скидка: <span class="text-bold">5%</span></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                        <td>
                                            <div class="goods-amount">
                                                <form action="#">
                                                    <button type="button" class="dec"><span class="caret"></span></button>
                                                    <input type="text" value="1 шт." class="goods-amount-input">
                                                    <button type="button" class="inc"><span class="caret"></span></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <ul class="cart-total-item">
                                                <li><span class="mob text-bold">Сумма: </span><a href="#" class="text-bold text-accent">120 438 грн</a></li>
                                                <li><a href="#" class="btn btn-link btn-with-accent-border">Отложить товар</a></li>
                                            </ul>
                                        </td>
                                        <td class="delete-item"><a href="#"></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>

            </section>
        </div>


    </div>
</div>

<!--svn is great -->

<?php include_once "parts/footer.php" ?>
</body>
</html>
