<div class="left-sidebar-wrapper">
    <p class="sidebar__title">Фильтры товаров</p>
    <a href="#" class="category-mob-title">Фильтры товаров<span class="caret"></span></a>

    <div class="sidebar__filter">
        <form action="#">
            <fieldset class="sidebar-range">
                <a href="#colapse-range" class="sidebar-range__title" data-toggle="collapse"
                   aria-controls="colapse-range">
                    Цена
                    <span class="caret"></span>
                </a>

                <div id="colapse-range" class="collapse in">
                    <div class="sidebar-range__val">
                        <div class="range-from">
                            <input type="text" id="amount-min">
                        </div>
                        <div class="range-to">
                            <input type="text" id="amount-max">
                        </div>
                    </div>
                    <div id="slider-range"></div>
                </div>
            </fieldset>
            <fieldset class="sidebar-checkboxes">
                <a href="#colapse-1" class="sidebar-range__title" data-toggle="collapse" aria-controls="collapse-1">Бренд
                    <span class="caret"></span></a>

                <div id="colapse-1" class="collapse in">

                    <ul class="sidebar-checkboxes__list">
                        <li>
                            <input type="checkbox" id="ch-1" class="custom-checkbox">
                            <label for="ch-1">Brother</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-2" class="custom-checkbox">
                            <label for="ch-2">Canon</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-3" class="custom-checkbox">
                            <label for="ch-3">Dymo</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-4" class="custom-checkbox">
                            <label for="ch-4">Epson</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-5" class="custom-checkbox">
                            <label for="ch-5">HP</label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-6" class="custom-checkbox">
                            <label for="ch-6">Konica-Minolta </label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-7" class="custom-checkbox">
                            <label for="ch-7">Kyocera-Mita</label>
                        </li>
                    </ul>
                    <ul id="filter-brand-spoiler" class="sidebar-checkboxes__list collapse">
                        <li>
                            <input type="checkbox" id="ch-17" class="custom-checkbox">
                            <label for="ch-17">brand-1 </label>
                        </li>
                        <li>
                            <input type="checkbox" id="ch-18" class="custom-checkbox">
                            <label for="ch-18">brand-2</label>
                        </li>
                    </ul>
                    <a href="#filter-brand-spoiler" id="filter-brand-spoiler-link" class="link__accent
                    link__accent--borderDotted link__accent--hover link__accent--withCaret" data-toggle="collapse"
                       aria-controls="filter-brand-spoiler">Смотреть еще</a>
                </div>

            </fieldset>
            <fieldset class="sidebar-checkboxes">
                <a href="#colapse-2" class="sidebar-range__title" data-toggle="collapse" aria-controls="collapse-2">Технология
                    печати <span class="caret"></a>
                <ul id="colapse-2" class="sidebar-checkboxes__list collapse in">
                    <li>
                        <input type="checkbox" id="ch-8" class="custom-checkbox">
                        <label for="ch-8">Струйная печать</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-9" class="custom-checkbox">
                        <label for="ch-9">Лазерная печать (ч/б) </label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-10" class="custom-checkbox">
                        <label for="ch-10">Лазерная печать (цветная)</label>
                    </li>
                </ul>
            </fieldset>
            <fieldset class="sidebar-checkboxes">
                <a href="#colapse-3" class="sidebar-range__title" data-toggle="collapse" aria-controls="collapse-3">Назначение
                    <span class="caret"></a>
                <ul id="colapse-3" class="sidebar-checkboxes__list collapse">
                    <li>
                        <input type="checkbox" id="ch-11" class="custom-checkbox">
                        <label for="ch-11">Назначение-1</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-12" class="custom-checkbox">
                        <label for="ch-12">Назначение-2</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-13" class="custom-checkbox">
                        <label for="ch-13">Назначение-3</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-14" class="custom-checkbox">
                        <label for="ch-14">Назначение-4</label>
                    </li>
                </ul>
            </fieldset>
            <fieldset class="sidebar-checkboxes">
                <a href="#colapse-4" class="sidebar-range__title" data-toggle="collapse" aria-controls="collapse-4">
                    Количество цветов <span class="caret"></span></a>
                <ul id="colapse-4" class="sidebar-checkboxes__list collapse">
                    <li>
                        <input type="checkbox" id="ch-15" class="custom-checkbox">
                        <label for="ch-15">чб</label>
                    </li>
                    <li>
                        <input type="checkbox" id="ch-16" class="custom-checkbox">
                        <label for="ch-16">4</label>
                    </li>
                </ul>
            </fieldset>
            <fieldset class="sidebar__filter--ctrl">
                <button type="reset" class="link__accent link__accent--borderDotted link__accent--hover">Сбросить
                    фильтры
                </button>
            </fieldset>
        </form>
    </div>
</div>
