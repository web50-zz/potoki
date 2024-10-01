<?php
/**
 * The header.
 *
 */
$pageID = get_the_ID();
$THEME_VERSION =  wp_get_theme()->get( 'Version' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(); ?></title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body class="body">
	<header>
		<section class="top-screen <?= !is_front_page()?'page':'home';?> <?=($pageID == '19'||$pageID == '26')?'products-page':'';?> <?=($pageID == '8')?'contacts-page':'';?>">
			<div class="top-screen__pic">
				<?if(is_front_page()){?>
					<img class="top-screen__pic_1" alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/top_pic_1_v4.webp?v=<?=$THEME_VERSION?>'/>
					<img class="top-screen__pic_2"  alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/top_pic_2_v2.webp?v=<?=$THEME_VERSION?>'/>
				<?}else if($pageID == '19' || $pageID == '26'){?>
					<img class="top-screen__pic_1" alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/top_pic_4.webp?v=<?=$THEME_VERSION?>'/>
					<img class="top-screen__pic_2" alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/products/top_pic_products_mobile.webp?v=<?=$THEME_VERSION?>'/>
					<img class="top-screen__pic_3" alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/products/top_pic_products_mobile2.webp?v=<?=$THEME_VERSION?>'/>
				<?}else{?>
					<img class="top-screen__pic_1" alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/top_pic_3.webp?v=<?=$THEME_VERSION?>'/>
					<img class="top-screen__pic_2"  alt="" width="auto" height="auto" src='<?=get_template_directory_uri()?>/assets/images/top_pic_5.webp?v=<?=$THEME_VERSION?>'/>
				<?}?>
			</div>
			<div class="top-screen__content">
				<div class="container top-screen__grid">
					<div class="top-screen__grid-first">
						<div class="top-screen__main-title" data-aos="fade-down" data-aos-delay="2500">
						<?if(is_front_page()){?>
							Рациональность <br>
							в повседневности
						<?}else if($pageID == '19' || $pageID == '26'){?>
							Питьевая вода <br>
							в твоём кармане
						<?}else{?>
							Мы открыты <br>
							к сотрудничеству
						<?}?>
						</div>
						<?if(is_front_page()){?>
						<div class="top-screen__second"  data-aos="fade-left" data-aos-delay="2800">
							<svg>
								<use href="#blue_arrow"></use>
							</svg>
							Cохраняя и развивая <br>
							качество жизни
						</div>
						<?}else if($pageID == '19' || $pageID == '26'){?>
							<?/*
							<div class="top-screen__second dark"  data-aos="fade-left" data-aos-delay="2800">
								Вода бренда Стилл это инновация, которая сделает рынок питьевой воды рациональнее. Вода в приятной на ощупь упаковке дойпак, которую удобно брать с собой
							</div>
							*/?>
							<div class="top-screen__second dark"  data-aos="fade-left" data-aos-delay="2800">
								<div class="top-screen__still_logo">
									<a href="https://stillpack.ru/" target="_blank">
										<img class="top-screen__still_logo_pic" alt="" width="324" height="144" src='<?=get_template_directory_uri()?>/assets/images/products/products_pic2.webp?v=<?=$THEME_VERSION?>'/>
									</a>
								</div>
							</div>
						<?}?>
						<div class="top-screen__potoki">
							<a href="/" title="На главную">
								<svg>
									<use href="#potoki"></use>
								</svg>
							</a>
							<div class="top-screen__contacts-mobile">
								<a href="tel:+78124002020">+7 (812) 400-20-20</a>
								<a href="mailto:inbox@potoki.ru">inbox@potoki.ru</a>
							</div>
						</div>
					</div>
					<div class="top-screen__grid-second">
					<?if(is_front_page()|| ($pageID == '19' || $pageID == '26')){?>
						<div class="top-screen__contacts " data-aos="fade-left" data-aos-delay="2800">
							<a href="tel:+78124002020">+7 (812) 400-20-20</a>
							<a href="mailto:inbox@potoki.ru">inbox@potoki.ru</a>
						</div>
						<?if(is_front_page()){?>
						<div class="top-screen__potoki-image-one" >
							<svg>
								<use href="#potoki_vertical_top_2"></use>
							</svg>
						</div>
						<?}?>
					<?}?>
					</div>
					<div class="top-screen__grid-third">
					<?if(is_front_page()){?>
						<div class="top-screen__potoki-image-two"  >
							<svg>
								<use href="#potoki_vertical_top_2"></use>
							</svg>
						</div>
					</div>
					<?}?>
				</div>
			</div>
		</section>
		<section class="main-nav">
			<div class="main-nav__close"></div>
			<div class="container">
				<div class="main-nav__potoki1">
					<svg>
						<use href="#potoki_menu"></use>
					</svg>
				</div>
				<div class="main-nav__potoki2">
					<svg class="">
						<use href="#potoki_menu"></use>
					</svg>
				</div>
				<div class="main-nav__list">
					<a href="/" class="">Главная</a>
					<?/*
					<a href="#">Компания</a>
					<a href="#">рациональность</a>
					*/?>
					<a href="/products/">Продукты</a>
					<?/*
					<a href="#">качество</a>
					<a href="#">карьера</a>
					*/?>
					<a href="/contacts/">Контакты</a>
					<?/*
					<a href="#">поставщикам</a>
					*/?>
				</div>
			</div>
		</section>
		<div class="buter">
			<div id="buter_btn" class="buter_btn"  data-aos="flip-left" data-aos-delay="2900">
				<svg>
					<use href="#buter_btn_icon"></use>
				</svg>
			</div>
		</div>
		
		<?php 
			if(!is_front_page()){
				get_template_part('template-parts/breadcrumbs','',array());
			};
		?>
	</header>
