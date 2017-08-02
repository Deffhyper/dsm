<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Оформление заказа</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="order">
            <div class="order-table">
                <h2 class="order-form__title">Товары в заказе</h2>
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
                </div>
            </div>
            <div class="order-form">
                <h2 class="order-form__title">Информация о покупателе</h2>
                <form action="#">
                    <fieldset class="order-form__input-inline">
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-1" class="custom-radio" name="st" checked>
                            <label for="of-1" class="custom-radio__label">Физическое лицо</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-2" class="custom-radio" name="st">
                            <label for="of-2" class="custom-radio__label">Юридическое лицо</label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <label for="of-3" class="custom-input-label">Ваше имя</label>
                        <input type="text" id="of-3" class="custom-input" placeholder="Введите ваше имя">
                    </fieldset>
                    <fieldset>
                        <label for="of-4" class="custom-input-label">E-mail</label>
                        <input type="email" id="of-4" class="custom-input input-error" value="sdasf" placeholder="Введите e-mail адрес">
                        <span class="input-error-message">Это поле должно быть заполнено</span>
                    </fieldset>
                    <fieldset>
                        <label for="of-5" class="custom-input-label">Телефон</label>
                        <input type="tel" id="of-5" class="custom-input" placeholder="Введите номер телефона">
                    </fieldset>
                    <fieldset>
                        <label for="smart-search-input" class="custom-input-label">Город</label>

                        <div class="search-input">
                            <select class="custom-select" title="Введите название города">
                                <option value="1">Киев</option>
                                <option value="2">Харьков</option>
                                <option value="3">Запорожье</option>
                                <option value="4">Донецк</option>
                                <option value="5">Луганск</option>
                                <option value="6">Винница</option>
                                <option value="7">Днепропетровск</option>
                                <option value="8">Чернигов</option>
                                <option value="9">Львов</option>
                                <option value="10">Одесса</option>
                            </select>
                        </div>
                    </fieldset>

                    <h3 class="order-form__title">Доставка</h3>

                    <fieldset class="order-form__input-block">
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-6" class="custom-radio" name="de" checked>
                            <label for="of-6" class="custom-radio__label">Самовывоз</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-7" class="custom-radio" name="de">
                            <label for="of-7" class="custom-radio__label">Курьером по Киеву</label>
                            <p class="custom-radio__label--tip">Доставка <span class="text-bold">бесплатна</span>
                                для заказов суммой от <span class="text-bold">2500 грн.</span>
                                Стоимость доставки для заказов на сумму
                                <span class="text-bold"> менее 2500 грн.</span> составляет
                                <span class="text-bold"> 45 грн.</span>
                            </p>
                        </div>
                    </fieldset>

                    <fieldset>
                        <label for="of-8" class="custom-input-label">Улица</label>
                        <input type="text" id="of-8" class="custom-input" placeholder="Введите название вашей улицы">
                    </fieldset>

                    <fieldset class="order-form__input-inline">
                        <div class="custom-input__wrapper">
                            <label for="of-9" class="custom-input-label">Дом</label>
                            <input type="text" id="of-9" class="custom-input" placeholder="Номер дома">
                        </div>
                        <div class="custom-input__wrapper">
                            <label for="of-10" class="custom-input-label">Квартира/офис</label>
                            <input type="text" id="of-10" class="custom-input" placeholder="Номер квартиры/офиса">
                        </div>
                    </fieldset>

                    <fieldset class="order-form__input-block">
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-11" class="custom-radio" name="po" checked>
                            <label for="of-11" class="custom-radio__label">Новая почта - до склада</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-12" class="custom-radio" name="po">
                            <label for="of-12" class="custom-radio__label">Новая почта - курьером</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-13" class="custom-radio" name="po">
                            <label for="of-13" class="custom-radio__label">Мист Экспресс - до склада</label>
                        </div>
                    </fieldset>

                    <h3 class="order-form__title">Способы оплаты</h3>

                    <fieldset class="order-form__input-block">
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-14" class="custom-radio" name="pay" checked>
                            <label for="of-14" class="custom-radio__label">Наличными</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-15" class="custom-radio" name="pay">
                            <label for="of-15" class="custom-radio__label">Безналичный расчет</label>
                        </div>
                        <div class="custom-input__wrapper">
                            <input type="radio" id="of-16" class="custom-radio" name="pay">
                            <label for="of-16" class="custom-radio__label">LiqPay</label>
                        </div>
                    </fieldset>

                    <h3 class="order-form__title">Комментарий к заказу</h3>

                    <fieldset>
                        <textarea name="" id="gf-3" class="custom-textarea" cols="30" rows="6" placeholder="Введите ваш комментарий"></textarea>
                    </fieldset>

                    <button type="submit" class="btn btn-link btn-round btn--blue">Оформить заказ</button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
