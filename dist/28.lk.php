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
        <ul class="lk">
            <li class="lk__item">
                <a href="#">
                    <span class="icon icon-user"></span>
                    <span class="lk__item--text">Личные данные</span>
                </a>
            </li>
            <li class="lk__item">
                <a href="#">
                    <span class="icon icon-shopping-cart"></span>
                    <span class="lk__item--text">Ваша корзина</span>
                </a>
            </li>
            <li class="lk__item">
                <a href="#">
                    <span class="icon icon-list"></span>
                    <span class="lk__item--text">Ваши заказы</span>
                </a>
            </li>
            <li class="lk__item">
                <a href="#">
                    <span class="icon icon-history"></span>
                    <span class="lk__item--text">История заказов</span>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
