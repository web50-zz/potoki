<?php
/**
 * The main template file
 */

get_header(); ?>
<? $THEME_VERSION =  wp_get_theme()->get( 'Version' );?>


<section class="home-block-one">
    <div class="container">
        <div class="home-block-one__content">
            <div class="home-block-one__content_1" data-aos="fade-up" data-aos-delay="200">
                <p>
                <strong>ПЕРВЫЙ В РОССИИ</strong> <br>
                производитель воды <br>
                в мягкой упаковке
                </p>
                <?/*
                <h3>
                    в мягкой упаковке 
                </h3>
                */?>
            </div>
            <div class="home-block-one__content_2">
                <div class="home-block-one__double" data-aos="fade-up" data-aos-delay="300">
                    <div><img src='<?=get_template_directory_uri()?>/assets/images/pic1.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/></div>
                    <div>
                        <p>
                        Новое предприятие в Гатчинском <br>
                        районе Ленинградской области.<br><br>
                        Запуск – сентябрь 2024
                        </p>
                    </div>
                </div>
            </div>
            <div class="home-block-one__content_3" data-aos="fade-up" data-aos-delay="400">
                <svg>
                    <use href="#blue_arrow"></use>
                </svg>
                <p>
                    <strong>
                ДОЙПАКИ<br>
                ПИТЬЕВАЯ ВОДА <br>
                КОНТРАКТНОЕ ПР-ВО<br>
                </strong>
                <?/*
                <p>
                    Мы производим упаковку, 
                </p>
                <h3>питьевую воду </h3>
                <p>и б/а напитки, <br>
                    а также оказываем услуги контрактного производства 
                </p>
                */?>
            </div>
        </div>
    </div>
</section>
<section class="marquee ticker-wrapper">
    <div class="ticker-wrapper__first-half">
        <span>Потоки</span> — продукты рационального потребления
    </div>
    <div class="ticker-wrapper__second-half">
        <span>Потоки</span> — продукты рационального потребления
    </div>
</section>
<section class="home-block-two">
    <div class="home-block-two__pic">
		<img src='<?=get_template_directory_uri()?>/assets/images/pic2.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
	</div>
	<div class="home-block-two__content">
            <div class="container">
                <div class="home-block-two__one" data-aos="fade-down" data-aos-delay="400">
                    <div class="home-block-two__potoki" data-aos="fade-up" data-aos-delay="100">
                        <svg>
                            <use href="#potoki_vertical_top_2"></use>
                        </svg>
                    </div>          
                </div>
                <div class="home-block-two__two" data-aos="fade-up" data-aos-delay="100">
                    <p>
                    Мы не считаем человека <br>
                    ответственным за излишнее <br>
                    использование пластиков.<br>
                    МЫ — РЕАЛИСТЫ <br>
                    и нашли решение проблемы.
                    </p>
                </div>
                <div class="home-block-two__three" data-aos="fade-up" data-aos-delay="600">
                    <p>
                    Используя дойпак <br>
                    вместо ПЭТ-бутылки, <br>
                    ТЫ ПОМОГАЕШЬ ОБЩЕСТВУ <br>
                    сократить потребление пластика <br>
                    в 2 раза, а объем отходов в 7 раз.
                    </p>
                </div>
            </div>
    </div>
</section>
<section class="faq">
    <div class="container">
        <div class="faq__header">
            Вопрос-ответ
        </div>
        <div class="faq-list">
            <div class="faq-message faq-to" data-aos="fade-in" data-aos-delay="100">
                Дойпак труднее переработать, чем обычную бутылку?
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="300">
                Привет!
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="500">
                Да, ПЭТ-бутылка целиком состоит из одного материала
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="700">
                Дойпак сделан из трехслойной пленки и просто «переплавить» его не получится
            </div>
            <div class="faq-message faq-to" data-aos="fade-in" data-aos-delay="800">
                А пластиковая бутылка экологичнее?
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="1000">
                ПЭТ-бутылка перерабатывается
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="1300">
                Но, без раздельного сбора мусора, его сортировки и переработки – это бесполезно
            </div>
            <div class="faq-message faq-to" data-aos="fade-in" data-aos-delay="1700">
                Хм. Тогда в чем плюсы дойпака?
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="2000">
                Дойпак, в среднем, содержит в 2 раза меньше пластика
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="2300">
                А ещё полностью сжимается по мере потребления продукта
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="2600">
                Что позволяет сократить объем отходов примерно в 7 раз!
            </div>
            <div class="faq-message" data-aos="fade-in" data-aos-delay="2900">
                А ещё, он просто приятный на ощупь )
            </div>
        </div>
    </div>
</section>
<?/*
<section class="home-block-three">
    <div class="container">
        <div class="home-block-three__one">
            <div class="home-block-three__one-one" data-aos="fade-up" data-aos-delay="200">
                <h3>А разве дойпак не труднее <br> переработать, скажем, <br> чем обычную бутылку?</h3>
            </div>
            <div class="home-block-three__one-two">
                <p>
                Да, труднее. Бутылка, как правило, целиком состоит <br>
                из ПЭТ полиэтилентерефталата Дойпак же сделан <br>
                из двух слоев пленки, где каждый слой – разный <br>
                пластик потому «переплавить» пустой дойпак <br>
                не получится. Увы, но сейчас такова технология <br>
                производства нашей упаковки 
                </p>
            </div>
            <div class="home-block-three__one-three" data-aos="fade-down" data-aos-delay="200">
                    <div class="home-block-three__img-wrapper">
                        <img src='<?=get_template_directory_uri()?>/assets/images/pic3.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                    </div>
            </div>
        </div>
        <div class="home-block-three__two">
            <div class="home-block-three__two-one">
                <div class="home-block-three__img-wrapper">
                    <img src='<?=get_template_directory_uri()?>/assets/images/pic4.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                </div>
            </div>
            <div class="home-block-three__two-two" data-aos="fade-up" data-aos-delay="300">
                <h3>Так значит <br> бутылка экологичнее?</h3>
                <div class="home-block-three__img-wrapper">
                    <img src='<?=get_template_directory_uri()?>/assets/images/pic4.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                </div>
                <p>
                    О, лучше сказать – ПЭТ-бутылка намного легче <br> 
                    перерабатывается и это факт! НО, в условиях <br>
                    безраздельного сбора мусора, отсутствия его <br>
                    сортировки и системной переработки сегодня <br>
                    этот параметр – перерабатываемость, <br>
                    практически бесполезен 
                </p>
            </div>
            <div class="home-block-three__two-three">
                    
            </div>
        </div>
        <div class="home-block-three__three">
            <div class="home-block-three__three-one">
            <h3>
                Дойпак компактнее и меньше <br>
                полимеров, а бутылку можно <br>
                переработать. Хммм… <br>
                И что же мне выбрать?</h3>
            </div>
            <div class="home-block-three__three-two">
                <p>
                Выбирай дойпак! <br>
                Российские компании уже создают <br>
                монополимерную пленку для дойпаков <br>
                и мы внедрим её в производство, <br>
                как только она станет доступной <br>
                А, о других плюсах дойпака – <br>
                ты теперь в курсе 😉 
                </p>
            </div>
            <div class="home-block-three__three-three">
                    <div class="home-block-three__img-wrapper">
                        <img src='<?=get_template_directory_uri()?>/assets/images/pic5.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                    </div>
            </div>
        </div>
    </div>
</section>
*/?>
<?/*
<section class="home-block-four">
    <div class="container">
        <div class="home-block-four__content">
            <img src='<?=get_template_directory_uri()?>/assets/images/pic6v1.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
        </div>
    </div>
</section>
*/?>
<section class="home-products">
    <div class="container">
        <div class="home-products__header">
            Продукты 
        </div>
        <div class="home-products__content">
            <div class="home-products__content_1" data-aos="fade-up" data-aos-delay="200">
                <div>
                    
                        <img src='<?=get_template_directory_uri()?>/assets/images/potoki_products.webp?v=<?=$THEME_VERSION?>' alt="" width="auto" height="auto"/>

                </div>
            </div>
            <div class="home-products__content_2" data-aos="fade-up" data-aos-delay="200">
                <h3>
                    Питьевая вода <br>
                    СТИЛЛ 
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </h3>
                <div class="home-products__img-wrapper">
                    <a href="/products/">
                        <img src='<?=get_template_directory_uri()?>/assets/images/pic7.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                    </a>
                </div>
            </div>
            <div class="home-products__content_3" data-aos="fade-down" data-aos-delay="300">
                <div class="home-products__img-wrapper">
                    <a href="/products/#block_pack">
                        <img src='<?=get_template_directory_uri()?>/assets/images/pic8.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                    </a>
                </div>
                <h3>
                    Упаковка
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </h3>
            </div>
            <div class="home-products__content_4">
            
                <h3>
                Контрактное <br>
                производство <br>
                (СТМ)
                    <svg>
                        <use href="#blue_arrow"></use>
                    </svg>
                </h3>
                <div class="home-products__img-wrapper">
                    <a href="/products/#stm">
                        <img src='<?=get_template_directory_uri()?>/assets/images/pic9.webp?v=<?=$THEME_VERSION?>'  alt="" width="auto" height="auto"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?
get_footer();
?>