<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Ремонт и обслуживание принтеров</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="left-sidebar">
            <div class="sidebar__list-wrapper">
                <a href="#" class="category-mob-title category-mob-title--gray">Выбрать категорию<span
                        class="caret"></span></a>
                <ul class="sidebar__list">
                    <li class="active"><a href="#">Ремонт и обслуживание принтеров</a></li>
                    <li><a href="#">Ремонт и обслуживание многофункциональных устройств (МФУ)</a></li>
                    <li><a href="#">Ремонт и обслуживание широкоформатных принтеров (плоттеров)</a></li>
                    <li><a href="#">Ремонт и обслуживание копировальных аппаратов (КМА)</a></li>
                    <li><a href="#">Ремонт и обслуживание сканеров</a></li>
                    <li><a href="#">Программный продукт uniFLOW</a></li>
                    <li><a href="#">Запчасти (на первом этапе запуска не планируется)</a></li>
                </ul>
            </div>
        </div>

        <div class="right-block">
            <div class="sub-category__wrapper">
                <a href="#" class="category-mob-title">Выбрать подкатегорию<span class="caret"></span></a>
                <ul class="sub-category service-subcategory">
                    <li class="sub-category__item">
                        <a href="#" class="link__second-accent link__accent--hover">Ремонт
                            и обслуживание лазерных принтеров Canon в сервисном центре / в офисе (с выездом мастера)</a>
                    </li>
                    <li class="sub-category__item">
                        <a href="#" class="link__second-accent link__accent--hover">Ремонт и обслуживание струйных
                            принтеров Canon в сервисном центре / в офисе (с выездом мастера)</a>
                    </li>
                    <li class="sub-category__item">
                        <a href="#" class="link__second-accent link__accent--hover">Ремонт и замена печатающей головки Canon</a>
                    </li>
                    <li class="sub-category__item">
                        <a href="#" class="link__second-accent link__accent--hover">Гарантийный ремонт принтеров Canon</a>
                    </li>

                </ul>
            </div>

            <div class="bottom-padding-md">
                <p>Компания «ДСМ-Трейд» является поставщиком специализированных IT-решений в области автоматизации
                    проектирования, подготовки производства и документооборота для авиастроения, автомобилестроения,
                    судостроения, полиграфии, промышленного и гражданского строительства и многих других отраслей
                    промышленности. Мы занимаемся автоматизацией проектно-конструкторских и технологических работ,
                    дистрибьюцией, системной интеграцией программного и аппаратного обеспечения для государственных
                    структур, банков, промышленных предприятий и проектных организаций.</p>
            </div>


            <div class="gray-form">
                <div class="template-orders__form">
                    <h2 class="template-orders__form--title text-uppercase">Подать заявку на обслуживание</h2>

                    <p class="template-orders__form--subtitle">Напишите название услуги или задайте Ваш вопрос</p>

                    <div class="template-orders__form--wrapper">
                        <form action="#">
                            <fieldset>
                                <label for="gf-1" class="custom-input-label">Ваше имя
                                    <mark class="red-marker">*</mark>
                                </label>
                                <input type="text" id="gf-1" class="custom-input" placeholder="Введите ваше имя" autocomplete="off">
                            </fieldset>
                            <fieldset>
                                <label for="gf-2" class="custom-input-label">E-mail</label>
                                <input type="email" id="gf-2" class="custom-input" placeholder="Введите e-mail адрес">
                            </fieldset>
                            <fieldset>
                                <label for="gf-4" class="custom-input-label">Телефон
                                    <mark class="red-marker">*</mark>
                                </label>
                                <input type="tel" id="gf-4" class="custom-input" placeholder="Введите номер телефона">
                            </fieldset>
                            <fieldset>
                                <label for="gf-3" class="custom-textarea-label">Какая услуга вас интересует
                                    <mark class="red-marker">*</mark>
                                </label>
                            <textarea name="" id="gf-3" class="custom-textarea" cols="30" rows="6"
                                      placeholder="Напишите название услуги или задайте Ваш вопрос"></textarea>
                            </fieldset>
                            <button type="submit" class="btn btn-link btn-round btn--blue">Отправить</button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
