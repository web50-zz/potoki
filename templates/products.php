<?php
 /* 
Template Name: Продукты
*/
get_header(); 
$THEME_VERSION =  wp_get_theme()->get( 'Version' );
?>
<section class="products-block-one">
    <div class="container">
        <div class="products-block-one__grid">
                <div class="products-block-one__grid-one" data-aos="fade-up" data-aos-delay="300"> 
                    <h3>РАЦИОНАЛЬНОСТЬ</h3>
                    <p>
                    На производство пакета СТИЛЛ  затрачивается<br>
                    в 2 раза меньше пластика,<br>
                    а объем образующихся отходов в 7 раз меньше <br>
                     (в сравнении с ПЭТ-бутылкой)
                    </p>
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                    <?/*<div class="button lk-modal-show" data-lk-modal="lk-modal-personal-data">Подробнее</div>*/?>
                </div>
                <div class="products-block-one__grid-two" data-aos="fade-up" data-aos-delay="100">
                    <div class="products-block-one__pic-one">
                            <img src="<?=get_template_directory_uri()?>/assets/images/products/products_pic_1.webp" alt="" />
                    </div>
                </div>
                <div class="products-block-one__grid-three" data-aos="fade-up" data-aos-delay="600">
                    <h3>КАЧЕСТВО</h3>
                    <p>Современные условия производственной <br>
                    среды, строгое соблюдение <br>
                    технологического процесса, безопасность <br>
                    и качество готовой продукции.</p>
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </div>
                <div class="products-block-one__grid-four" data-aos="fade-up" data-aos-delay="800">
                    <h3>НОВИЗНА</h3>
                    <p>
                    Рынок питьевой бутилированной <br>
                    воды консервативен, бутылками <br>
                    из ПЭТ и стекла уставлены торговые <br>
                    полки. Мы предлагаем новый подход<br>
                     к обыденной потребности
                    </p>
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </div>
                <div class="products-block-one__grid-five" data-aos="fade-up" data-aos-delay="1000">
                    <h3>КОМПАКТНОСТЬ</h3>
                    <p>
                        СТИЛЛ легко поместится в портфеле или <br>
                        рюкзаке, а пустой дойпак легко сложить <br>
                        в карман!
                    </p>
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </div>
        </div>        
    </div>
</section>
<section class="products-block-two">
    <div class="products-block-two__pic">
		<img class="products-block-two__pic_1" src='<?=get_template_directory_uri()?>/assets/images/products/products_big_2.webp?v=<?=$THEME_VERSION?>'  alt="" width="1680px" height="1321px"/>
        <img class="products-block-two__pic_2" src='<?=get_template_directory_uri()?>/assets/images/products/products_big_2_mobile.webp?v=<?=$THEME_VERSION?>'  alt="" width="1680px" height="1321px"/>
	</div>
	<div class="products-block-two__content">
            <div class="container">
                <div class="products-block-two__one">
                     <div class="products-block-two__header" data-aos="fade-right" data-aos-delay="200">
                        питьевая вода
                    </div>
                    <div class="products-block-two__subheader">
                        Вода питьевая негазированная очищенная первой категории "Потоки Стилл"
                    </div>
                    <div class="products-block-two__description" data-aos="fade-in" data-aos-delay="300">
                    Изготовлена по ТУ 11.07.11-001-55257312-2024. Обработана с применением фильтрации, обратного осмоса, озона и УФ-облучения. Минеральный состав (мг/л): Ca &lt;50; Mg &lt;50; Na &lt;100; К &lt;10; HCO3 &lt;150; Cl &lt;100; SO4 &lt;100. Общая минерализация: 0,05-0,6 г/л. Общая жесткость: 1,5-7,0 мг-экв/л. Хранить при температуре от 2 до 20°С и относительной влажности воздуха &lt;85%, вдали от солнечных лучей. Срок годности: 12 месяцев с даты изготовления (см. на упаковке).
                    <br><br>
                    <strong>Объемы: 0,3 и 0,5 л</strong>
                    </div>
                </div>
                <div class="products-block-two__two">
                        <div class="products-block-two__two-item" data-aos="fade-in" data-aos-delay="200">
                                <div class="image">
                                    <svg><use href="#product_01"></use></svg>
                                </div>
                                <div class="title">
                                ОЧИСТКА И ПОДГОТОВКА
                                </div>
                                <p>
                                Исходная вода проходит через дисковый, сорбционные и мешочные фильтры, установку обратного осмоса, УФ-облучателии станцию проточного озонирования. Качество продукта на всех этапах контролируется собственной испытательной лабораторией
                                </p>
                        </div>
                        <div class="products-block-two__two-item" data-aos="fade-in" data-aos-delay="400">
                                <div class="image">
                                    <svg><use href="#product_02"></use></svg>
                                </div>
                                <div class="title">
                                        Минерализация
                                </div>
                                <p>
                                После установки обратного осмоса очищенная вода (пермеат) проходит через фильтры-минерализаторы и доводится до необходимых значений путем дозирования минерального концентрата добываемого из природных компонентов
                                </p>
                        </div>
                        <div class="products-block-two__two-item" data-aos="fade-in" data-aos-delay="600">
                                <div class="image">
                                    <svg><use href="#product_03"></use></svg>
                                </div>
                                <div class="title">
                                ДОЙПАК И РОЗЛИВ 
                                </div>
                                <p>
                                    Упаковочные автоматы поэтапно формируют дойпак из рулона пленки. Далее, парные дозаторы разливают питьевую воду и производят укупорку. На всех этапах формирования пакета работают облучатели-рециркуляторы
                                </p>
                        </div>
                        <div class="products-block-two__two-item" data-aos="fade-in" data-aos-delay="800">
                                <div class="image">
                                    <svg><use href="#product_04"></use></svg>
                                </div>
                                <div class="title">
                                МАРКИРОВКА И УПАКОВКА
                                </div>
                                <p>
                                После выхода из упаковочного автомата готовая продукция сканируется и отбраковывается системой обязательной маркировки «Честный знак». Дойпаки лёжа укладываются в гофрокороба, которые затем заклеиваются и направляются на автоматический паллетайзер
                                </p>
                        </div>
                </div>
            </div>
    </div>
</section>
<section class="products-block-three">
    <div class="container">
        <div class="products-block-three__grid">
            <div class="products-block-three__title" data-aos="fade-in" data-aos-delay="200">
                КОНТРАКТНОЕ <br>
                ПРОИЗВОДСТВО (СТМ)
            </div>
            <div class="products-block-three__pic-wrap" data-aos="fade-up" data-aos-delay="300">
                <div class="products-block-three__pic">
                    <img src='<?=get_template_directory_uri()?>/assets/images/products/products_pic3.webp?v=<?=$THEME_VERSION?>'  alt="" width="612px" height="428px"/>
                </div>
            </div>
            <div class="products-block-three__description" data-aos="fade-right" data-aos-delay="400">
                <p>Контрактное производство питьевой воды <br> под вашей торговой маркой объемом до 1 л</p>

                <p>Персонал с обширным опытом по производству питьевой воды, <br>
                    соков, пива и крепкого алкоголя</p>

                <p>Производство б/а напитков возможно только по холодным технологиям <br>
                    (без варки и настаивания)</p>

                <p>Возможно производство продуктов, подлежащих обязательной маркировке <br>
                ГИС МТ «Честный знак»</p>
            </div>
            <div class="products-block-three__description-two" data-aos="fade-right" data-aos-delay="400">
                <div class="products-block-three__description-two-title">Кратко о предприятии:</div>
                <p>Производственная мощность – до 50 млн дойпаков в год</p>
                <p>Около 2 500 кв.м производственно-складских площадей и собственная испытательная лаборатория, соответствующие стандарту ISO 22000</p>
                <p>Новейшее автоматическое оборудование от ведущих производителей России, Италии, КНР, США и других стран</p>
                <p>Строгий санитарно-гигиенический режим на предприятии – залог безопасности и высокого качества готовой продукции</p>
                <p>Открытость предприятия для партнерских аудитов</p>
            </div>
            
        </div>
    </div>
</section>
<section class="products-block-four">
    <div class="container">
            <div class="products-block-four__title" data-aos="fade-in" data-aos-delay="200">
                упаковка
            </div>
            <div class="products-block-four__grid">
                <div class="products-block-four__one">
                    <div class="products-block-four__subtitle">
                    Мы готовы производить упаковку дойпак <br>
                    из дуплексной пленки разных объемов, <br>
                    от 25 миллилитров до 1 литра
                    </div>
                    <div class="products-block-four__pic1" data-aos="fade-up" data-aos-delay="300">
                        <img src='<?=get_template_directory_uri()?>/assets/images/products/products_pac1.svg?v=<?=$THEME_VERSION?>'  alt="" width="275px" height="415px"/>
                    </div>
                    <div class="products-block-four__pic2" data-aos="fade-up" data-aos-delay="600">
                        <img src='<?=get_template_directory_uri()?>/assets/images/products/products_pac2.svg?v=<?=$THEME_VERSION?>'  alt="" width="370px" height="633px"/>
                    </div>
                    <div class="products-block-four__pic3" data-aos="fade-up" data-aos-delay="900">
                        <img src='<?=get_template_directory_uri()?>/assets/images/products/products_pac3.svg?v=<?=$THEME_VERSION?>'  alt="" width="425px" height="635px"/>
                    </div>
                </div>
                <div class="products-block-four__two-one" data-aos="fade-up" data-aos-delay="100">
                    <div class="products-block-four__two-description">
                        <p>Производим упаковку из многослойной пленки любых термосвариваемых структур общей толщиной материала до 160 мкм</p>
                        <p>Дизайнеры работающие с нами на постоянной основе помогут разработать упаковку и ТМ с «0»</p>
                        <p>Возможно использование пленки с предварительно нанесенной печатью или с нанесением самоклеящихся этикеток</p>
                        <p>При крупном единовременном заказе и/или постоянном контракте возможен выпуск дойпаков уникальной формы</p>
                    </div>
                </div>
                <div class="products-block-four__two-two" data-aos="fade-up" data-aos-delay="200">
                    <div class="products-block-four__two-description">
                   <p>Упаковка предназначена для пищевых продуктов</p>
                   <p>Пустой дойпак отпускается с накрученным колпачком,  в целях предотвращения загрязнения при транспортировке </p>
                   <p>Может поставляется навалом в коробах или мешках </p>
                   <p>В комплекте с готовыми дойпаками поставляются колпачки <br>
                    для укупорки продукции покупателем после наполнения </p>
                   <p>Срок хранения пустых дойпаков: 12 месяцев </p>
                    </div>
                </div>
            </div>
    </div>
</section>
<svg style="display: none;">
    <symbol id="product_01" viewBox="0 0 101 130">
        <g style="mix-blend-mode:plus-lighter">
            <mask id="mask0_129_2333" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101" height="130">
                <rect width="101" height="130" fill="#9F9F9F"/>
            </mask>
            <g mask="url(#mask0_129_2333)">
                <path class="produc_num_path" d="M26.0625 58.6875V74.0625C26.0625 81.0208 25.4375 86.9792 24.1875 91.9375C22.9375 96.8958 21.1667 100.958 18.875 104.125C16.625 107.25 13.9167 109.562 10.75 111.062C7.58333 112.521 4.08333 113.25 0.25 113.25C-2.79167 113.25 -5.64583 112.792 -8.3125 111.875C-10.9792 110.917 -13.3958 109.458 -15.5625 107.5C-17.6875 105.5 -19.5208 102.958 -21.0625 99.875C-22.5625 96.7917 -23.7292 93.125 -24.5625 88.875C-25.3542 84.5833 -25.75 79.6458 -25.75 74.0625V58.6875C-25.75 51.6875 -25.125 45.7292 -23.875 40.8125C-22.5833 35.8958 -20.7917 31.875 -18.5 28.75C-16.2083 25.625 -13.4792 23.3542 -10.3125 21.9375C-7.14583 20.4792 -3.64583 19.75 0.1875 19.75C3.22917 19.75 6.08333 20.2083 8.75 21.125C11.4167 22.0417 13.7917 23.4792 15.875 25.4375C18 27.3542 19.8333 29.8542 21.375 32.9375C22.9167 35.9792 24.0833 39.6458 24.875 43.9375C25.6667 48.1875 26.0625 53.1042 26.0625 58.6875ZM10.0625 76.3125V56.25C10.0625 52.8333 9.91667 49.8333 9.625 47.25C9.33333 44.6667 8.91667 42.5 8.375 40.75C7.83333 38.9583 7.14583 37.5 6.3125 36.375C5.52083 35.25 4.60417 34.4375 3.5625 33.9375C2.52083 33.3958 1.39583 33.125 0.1875 33.125C-1.35417 33.125 -2.72917 33.5417 -3.9375 34.375C-5.14583 35.1667 -6.1875 36.4792 -7.0625 38.3125C-7.9375 40.1042 -8.60417 42.4792 -9.0625 45.4375C-9.52083 48.3958 -9.75 52 -9.75 56.25V76.3125C-9.75 79.7708 -9.60417 82.8125 -9.3125 85.4375C-8.97917 88.0208 -8.54167 90.2292 -8 92.0625C-7.41667 93.8958 -6.72917 95.3958 -5.9375 96.5625C-5.14583 97.6875 -4.22917 98.5208 -3.1875 99.0625C-2.14583 99.6042 -1 99.875 0.25 99.875C1.79167 99.875 3.16667 99.4583 4.375 98.625C5.625 97.75 6.66667 96.3958 7.5 94.5625C8.33333 92.7292 8.95833 90.3125 9.375 87.3125C9.83333 84.2708 10.0625 80.6042 10.0625 76.3125ZM65.885 20.75V112H49.8225V40.625L32.0725 47.6875V34.0625L64.01 20.75H65.885Z"/>
            </g>
        </g>
    </symbol>
    <symbol  id="product_02"  viewBox="0 0 101 130">
        <g style="mix-blend-mode:plus-lighter">
            <mask id="mask0_129_2336" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101" height="130">
                <rect width="101" height="130" fill="#9F9F9F"/>
            </mask>
            <g mask="url(#mask0_129_2336)">
                <path class="produc_num_path" d="M26.0625 58.6875V74.0625C26.0625 81.0208 25.4375 86.9792 24.1875 91.9375C22.9375 96.8958 21.1667 100.958 18.875 104.125C16.625 107.25 13.9167 109.562 10.75 111.062C7.58333 112.521 4.08333 113.25 0.25 113.25C-2.79167 113.25 -5.64583 112.792 -8.3125 111.875C-10.9792 110.917 -13.3958 109.458 -15.5625 107.5C-17.6875 105.5 -19.5208 102.958 -21.0625 99.875C-22.5625 96.7917 -23.7292 93.125 -24.5625 88.875C-25.3542 84.5833 -25.75 79.6458 -25.75 74.0625V58.6875C-25.75 51.6875 -25.125 45.7292 -23.875 40.8125C-22.5833 35.8958 -20.7917 31.875 -18.5 28.75C-16.2083 25.625 -13.4792 23.3542 -10.3125 21.9375C-7.14583 20.4792 -3.64583 19.75 0.1875 19.75C3.22917 19.75 6.08333 20.2083 8.75 21.125C11.4167 22.0417 13.7917 23.4792 15.875 25.4375C18 27.3542 19.8333 29.8542 21.375 32.9375C22.9167 35.9792 24.0833 39.6458 24.875 43.9375C25.6667 48.1875 26.0625 53.1042 26.0625 58.6875ZM10.0625 76.3125V56.25C10.0625 52.8333 9.91667 49.8333 9.625 47.25C9.33333 44.6667 8.91667 42.5 8.375 40.75C7.83333 38.9583 7.14583 37.5 6.3125 36.375C5.52083 35.25 4.60417 34.4375 3.5625 33.9375C2.52083 33.3958 1.39583 33.125 0.1875 33.125C-1.35417 33.125 -2.72917 33.5417 -3.9375 34.375C-5.14583 35.1667 -6.1875 36.4792 -7.0625 38.3125C-7.9375 40.1042 -8.60417 42.4792 -9.0625 45.4375C-9.52083 48.3958 -9.75 52 -9.75 56.25V76.3125C-9.75 79.7708 -9.60417 82.8125 -9.3125 85.4375C-8.97917 88.0208 -8.54167 90.2292 -8 92.0625C-7.41667 93.8958 -6.72917 95.3958 -5.9375 96.5625C-5.14583 97.6875 -4.22917 98.5208 -3.1875 99.0625C-2.14583 99.6042 -1 99.875 0.25 99.875C1.79167 99.875 3.16667 99.4583 4.375 98.625C5.625 97.75 6.66667 96.3958 7.5 94.5625C8.33333 92.7292 8.95833 90.3125 9.375 87.3125C9.83333 84.2708 10.0625 80.6042 10.0625 76.3125ZM89.065 98.625V112H36.065V100.5L60.815 68.75C63.315 65.3333 65.2733 62.3333 66.69 59.75C68.1067 57.1667 69.1067 54.8542 69.69 52.8125C70.2733 50.7292 70.565 48.7292 70.565 46.8125C70.565 44.1042 70.2108 41.7292 69.5025 39.6875C68.7942 37.6042 67.7525 36 66.3775 34.875C65.0442 33.7083 63.3983 33.125 61.44 33.125C58.9817 33.125 56.9608 33.8125 55.3775 35.1875C53.7942 36.5625 52.6067 38.4583 51.815 40.875C51.065 43.2917 50.69 46.0417 50.69 49.125H34.6275C34.6275 43.7917 35.69 38.8958 37.815 34.4375C39.9817 29.9375 43.065 26.3542 47.065 23.6875C51.1067 21.0208 55.9608 19.6875 61.6275 19.6875C67.0442 19.6875 71.6067 20.7292 75.315 22.8125C79.0233 24.8958 81.8358 27.8333 83.7525 31.625C85.7108 35.4167 86.69 39.9375 86.69 45.1875C86.69 48.1042 86.2942 50.9792 85.5025 53.8125C84.7108 56.6458 83.6067 59.4583 82.19 62.25C80.7733 65.0417 79.0442 67.875 77.0025 70.75C74.9608 73.5833 72.69 76.5 70.19 79.5L56.44 98.625H89.065Z" />
            </g>
        </g>
    </symbol>

    <symbol  id="product_03"  viewBox="0 0 101 130" >
        <g style="mix-blend-mode:plus-lighter">
            <mask id="mask0_129_2339" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101" height="130">
                <rect width="101" height="130" fill="#9F9F9F"/>
            </mask>
            <g mask="url(#mask0_129_2339)">
                <path class="produc_num_path" d="M26.0625 58.6875V74.0625C26.0625 81.0208 25.4375 86.9792 24.1875 91.9375C22.9375 96.8958 21.1667 100.958 18.875 104.125C16.625 107.25 13.9167 109.562 10.75 111.062C7.58333 112.521 4.08333 113.25 0.25 113.25C-2.79167 113.25 -5.64583 112.792 -8.3125 111.875C-10.9792 110.917 -13.3958 109.458 -15.5625 107.5C-17.6875 105.5 -19.5208 102.958 -21.0625 99.875C-22.5625 96.7917 -23.7292 93.125 -24.5625 88.875C-25.3542 84.5833 -25.75 79.6458 -25.75 74.0625V58.6875C-25.75 51.6875 -25.125 45.7292 -23.875 40.8125C-22.5833 35.8958 -20.7917 31.875 -18.5 28.75C-16.2083 25.625 -13.4792 23.3542 -10.3125 21.9375C-7.14583 20.4792 -3.64583 19.75 0.1875 19.75C3.22917 19.75 6.08333 20.2083 8.75 21.125C11.4167 22.0417 13.7917 23.4792 15.875 25.4375C18 27.3542 19.8333 29.8542 21.375 32.9375C22.9167 35.9792 24.0833 39.6458 24.875 43.9375C25.6667 48.1875 26.0625 53.1042 26.0625 58.6875ZM10.0625 76.3125V56.25C10.0625 52.8333 9.91667 49.8333 9.625 47.25C9.33333 44.6667 8.91667 42.5 8.375 40.75C7.83333 38.9583 7.14583 37.5 6.3125 36.375C5.52083 35.25 4.60417 34.4375 3.5625 33.9375C2.52083 33.3958 1.39583 33.125 0.1875 33.125C-1.35417 33.125 -2.72917 33.5417 -3.9375 34.375C-5.14583 35.1667 -6.1875 36.4792 -7.0625 38.3125C-7.9375 40.1042 -8.60417 42.4792 -9.0625 45.4375C-9.52083 48.3958 -9.75 52 -9.75 56.25V76.3125C-9.75 79.7708 -9.60417 82.8125 -9.3125 85.4375C-8.97917 88.0208 -8.54167 90.2292 -8 92.0625C-7.41667 93.8958 -6.72917 95.3958 -5.9375 96.5625C-5.14583 97.6875 -4.22917 98.5208 -3.1875 99.0625C-2.14583 99.6042 -1 99.875 0.25 99.875C1.79167 99.875 3.16667 99.4583 4.375 98.625C5.625 97.75 6.66667 96.3958 7.5 94.5625C8.33333 92.7292 8.95833 90.3125 9.375 87.3125C9.83333 84.2708 10.0625 80.6042 10.0625 76.3125ZM51.44 59H59.69C62.065 59 64.0442 58.4583 65.6275 57.375C67.2108 56.25 68.3775 54.6875 69.1275 52.6875C69.8775 50.6875 70.2525 48.375 70.2525 45.75C70.2525 43.2083 69.8983 41 69.19 39.125C68.4817 37.2083 67.4192 35.7292 66.0025 34.6875C64.6275 33.6458 62.8567 33.125 60.69 33.125C58.9817 33.125 57.3983 33.5833 55.94 34.5C54.4817 35.4167 53.3358 36.75 52.5025 38.5C51.6692 40.2083 51.2525 42.2292 51.2525 44.5625H35.2525C35.2525 39.6458 36.3358 35.3333 38.5025 31.625C40.7108 27.875 43.7108 24.9583 47.5025 22.875C51.2942 20.75 55.565 19.6875 60.315 19.6875C65.44 19.6875 69.94 20.6667 73.815 22.625C77.7317 24.5833 80.7733 27.5 82.94 31.375C85.1483 35.2083 86.2525 39.9583 86.2525 45.625C86.2525 48.375 85.7317 51.0833 84.69 53.75C83.69 56.4167 82.1692 58.8542 80.1275 61.0625C78.0858 63.2292 75.565 64.9583 72.565 66.25C69.6067 67.5417 66.1692 68.1875 62.2525 68.1875H51.44V59ZM51.44 72.125V63.125H62.2525C66.7108 63.125 70.5233 63.7083 73.69 64.875C76.8983 66.0417 79.5025 67.6875 81.5025 69.8125C83.5442 71.9375 85.0233 74.4167 85.94 77.25C86.8983 80.0833 87.3775 83.1667 87.3775 86.5C87.3775 90.75 86.69 94.5417 85.315 97.875C83.9817 101.167 82.065 103.958 79.565 106.25C77.1067 108.542 74.2317 110.292 70.94 111.5C67.69 112.667 64.1483 113.25 60.315 113.25C56.9817 113.25 53.7525 112.729 50.6275 111.688C47.5442 110.604 44.7733 109 42.315 106.875C39.8983 104.708 37.9817 102 36.565 98.75C35.19 95.4583 34.5025 91.625 34.5025 87.25H50.5025C50.5025 89.7083 50.94 91.8958 51.815 93.8125C52.69 95.6875 53.8775 97.1667 55.3775 98.25C56.8775 99.3333 58.6275 99.875 60.6275 99.875C62.8358 99.875 64.7317 99.3333 66.315 98.25C67.94 97.1667 69.1692 95.625 70.0025 93.625C70.8775 91.5833 71.315 89.1667 71.315 86.375C71.315 83 70.8567 80.2708 69.94 78.1875C69.0233 76.1042 67.69 74.5833 65.94 73.625C64.2317 72.625 62.1483 72.125 59.69 72.125H51.44Z" "/>
            </g>
        </g>
    </symbol>

    <symbol  id="product_04">
        <mask id="mask0_129_2345" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="101" height="130">
            <rect width="101" height="130" fill="#9F9F9F"/>
        </mask>
        <g mask="url(#mask0_129_2345)">
            <g style="mix-blend-mode:plus-lighter">
                <path class="produc_num_path" d="M26.0625 58.6875V74.0625C26.0625 81.0208 25.4375 86.9792 24.1875 91.9375C22.9375 96.8958 21.1667 100.958 18.875 104.125C16.625 107.25 13.9167 109.562 10.75 111.062C7.58333 112.521 4.08333 113.25 0.25 113.25C-2.79167 113.25 -5.64583 112.792 -8.3125 111.875C-10.9792 110.917 -13.3958 109.458 -15.5625 107.5C-17.6875 105.5 -19.5208 102.958 -21.0625 99.875C-22.5625 96.7917 -23.7292 93.125 -24.5625 88.875C-25.3542 84.5833 -25.75 79.6458 -25.75 74.0625V58.6875C-25.75 51.6875 -25.125 45.7292 -23.875 40.8125C-22.5833 35.8958 -20.7917 31.875 -18.5 28.75C-16.2083 25.625 -13.4792 23.3542 -10.3125 21.9375C-7.14583 20.4792 -3.64583 19.75 0.1875 19.75C3.22917 19.75 6.08333 20.2083 8.75 21.125C11.4167 22.0417 13.7917 23.4792 15.875 25.4375C18 27.3542 19.8333 29.8542 21.375 32.9375C22.9167 35.9792 24.0833 39.6458 24.875 43.9375C25.6667 48.1875 26.0625 53.1042 26.0625 58.6875ZM10.0625 76.3125V56.25C10.0625 52.8333 9.91667 49.8333 9.625 47.25C9.33333 44.6667 8.91667 42.5 8.375 40.75C7.83333 38.9583 7.14583 37.5 6.3125 36.375C5.52083 35.25 4.60417 34.4375 3.5625 33.9375C2.52083 33.3958 1.39583 33.125 0.1875 33.125C-1.35417 33.125 -2.72917 33.5417 -3.9375 34.375C-5.14583 35.1667 -6.1875 36.4792 -7.0625 38.3125C-7.9375 40.1042 -8.60417 42.4792 -9.0625 45.4375C-9.52083 48.3958 -9.75 52 -9.75 56.25V76.3125C-9.75 79.7708 -9.60417 82.8125 -9.3125 85.4375C-8.97917 88.0208 -8.54167 90.2292 -8 92.0625C-7.41667 93.8958 -6.72917 95.3958 -5.9375 96.5625C-5.14583 97.6875 -4.22917 98.5208 -3.1875 99.0625C-2.14583 99.6042 -1 99.875 0.25 99.875C1.79167 99.875 3.16667 99.4583 4.375 98.625C5.625 97.75 6.66667 96.3958 7.5 94.5625C8.33333 92.7292 8.95833 90.3125 9.375 87.3125C9.83333 84.2708 10.0625 80.6042 10.0625 76.3125ZM89.8775 78.5625V91.9375H34.315L33.69 81.625L65.315 21H78.0025L65.065 45.75L49.7525 78.5625H89.8775ZM81.6275 21V112H65.565V21H81.6275Z"/>
            </g>
        </g>
    </symbol>
</svg>
<div id="lk-modal-personal-data" class="lk-modal__wrap">
    <div class="lk-modal__window">
        <div class="lk-modal__close lk-modal__close-btn">&#x2715;</div>
        <div class="lk-modal__content">
            <div class="lk-modal__msg"></div>
            <p>
                Текст в модальном окне
            </p>
            </form>
        </div>
    </div>
</div>
<?get_footer();?>