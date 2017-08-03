<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="row">
        <h1 class="page-title">Аренда и аутсорсинг</h1>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="template-orders">

            <p class="template-orders__text">Компания «ДСМ-Трейд» является поставщиком специализированных IT-решений в области автоматизации
                проектирования, подготовки производства и документооборота для авиастроения, автомобилестроения,
                судостроения, полиграфии, промышленного и гражданского строительства и многих других отраслей
                промышленности. Мы занимаемся автоматизацией проектно-конструкторских и технологических работ,
                дистрибьюцией, системной интеграцией программного и аппаратного обеспечения для государственных структур,
                банков, промышленных предприятий и проектных организаций.</p>

            <ul class="template-orders__list">
                <li>
                    <a href="#">
                        <span class="img"><img src="img/jpeg_files/step-one-1.jpg" alt="image"></span>
                        <span class=text-bold>Аренда и обслуживание принтеров</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="img"><img src="img/jpeg_files/step-one-2.jpg" alt="image"></span>
                        <span class=text-bold>Аренда и обслуживание многофункциональных устройств (МФУ)</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="img"><img src="img/jpeg_files/step-one-36.jpg" alt="image"></span>
                        <span class=text-bold>Программный продукт uniFLOW</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="img"><img src="img/jpeg_files/step-one-37.jpg" alt="image"></span>
                        <span class=text-bold>Запчасти (на первом этапе запуска  не планируется)</span>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>

            <div class="gray-form">
                <div class="template-orders__form">
                    <h2 class="template-orders__form--title text-uppercase">Подать заявку на аренду</h2>
                    <p class="template-orders__form--subtitle">
                        Наши менеджеры проконсультируют вас по всем вопросам.
                        Оставьте заявку или же позвоните по номеру:
                        <a href="tel:+38 (044) 592 19 22" class="text-bold">+38 (044) 592 19 22</a>
                    </p>

                    <div class="template-orders__form--wrapper">
                        <form action="#">
                            <fieldset>
                                <label for="gf-1" class="custom-input-label">Ваше имя<mark class="red-marker">*</mark></label>
                                <input type="text" id="gf-1" class="custom-input" placeholder="Введите ваше имя" autocomplete="off">
                            </fieldset>
                            <fieldset>
                                <label for="gf-2" class="custom-input-label">E-mail</label>
                                <input type="email" id="gf-2" class="custom-input" placeholder="Введите e-mail адрес">
                            </fieldset>
                            <fieldset>
                                <label for="gf-4" class="custom-input-label">Телефон<mark class="red-marker">*</mark></label>
                                <input type="tel" id="gf-4" class="custom-input" placeholder="Введите номер телефона">
                            </fieldset>
                            <fieldset>
                                <label for="gf-3" class="custom-textarea-label">Какая услуга вас интересует<mark class="red-marker">*</mark></label>
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
