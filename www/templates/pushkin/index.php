<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.12.0.min.js"></script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/common.js"></script>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/main.css" type="text/css" />
</head>
<body>
	<div class="wrapper">
		<div class="top_slider_wrap">
			<div class="top">
				<div class="w_1200">
					<div class="col-lg-5 col-md-7 col-sm-7 col-xs-12 col-logo nopadding"> 
						<a href="/" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo.png" alt=""></a>
					</div>
					<div class="col-lg-7 col-md-5 col-sm-5 col-xs-12 col-contacts nopadding">
						<jdoc:include type="modules" name="herbs" style="xhtml" />				
						<jdoc:include type="modules" name="top_contacts" style="xhtml" />				
					</div>
				</div>
			</div><!--top-->
			<div class="menu_wrap">
				<div class="w_1200">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-mnu nopadding">
						<div class="hidden-lg">
							<a href="#" class="toggle-mnu"><span></span></a>
						</div>
						<jdoc:include type="modules" name="top_mnu" style="xhtml" />
						<!--div class="top_mnu main-mnu">
							<ul>
								<li class="active"><a href="#">Санкт-Петербург</a></li>
								<li><a href="#">Екатеринбург</a></li>
								<li><a href="#">Зарубежные туры</a></li>
								<li><a href="#">Российские туры</a></li>
								<li><a href="#">Доп. услуги</a></li>
								<li><a href="#">О нас</a></li>							
							</ul>
						</div-->
					</div>
				</div>
			</div>
		</div><!--top_slider_wrap-->
		<div class="main-wrap">
			<div class="slider">
				<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/slide1.jpg" alt="">
				<div class="slider-text">
					<a href="#">Экскурсии
						по Питеру!</a>
					</div>
				</div>
				<div class="main_content">				
					<div class="content">
						<div class="news2 w_1200">
							<div class="news">
								<h2>Новости</h2>
								<ul>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
								</ul>
							</div>
							<div class="news promo">
								<h2>Акции</h2>
								<ul>
									<li>
										<span class="date">14.06.2016</span>
										<a href="#">Изменения в круизе с 20.06 на т/х «Михаил Кутузов»</a>
									</li>
								</ul>
							</div>
						</div><!--news2-->
						<div class="hot">
							<h2>Горячие предложения</h2>
							<ul>
								<li>
									<a href="#">
										<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hot1.jpg" alt="">
										<span> РОССИЯ. СОЧИ
											Отель: 1*-5*
											Вылет из Екатеринбурга
											от 6 - 27 ночей
											От 18236 руб.</span>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hot1.jpg" alt="">
											<span> РОССИЯ. СОЧИ
												Отель: 1*-5*
												Вылет из Екатеринбурга
												от 6 - 27 ночей
												От 18236 руб.</span>
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hot1.jpg" alt="">
												<span> РОССИЯ. СОЧИ
													Отель: 1*-5*
													Вылет из Екатеринбурга
													от 6 - 27 ночей
													От 18236 руб.</span>
												</a>
											</li>
											<li>
												<a href="#">
													<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/hot1.jpg" alt="">
													<span> РОССИЯ. СОЧИ
														Отель: 1*-5*
														Вылет из Екатеринбурга
														от 6 - 27 ночей
														От 18236 руб.</span>
													</a>
												</li>
											</ul>
										</div><!--hot-->
										<div class="module w_1200">
											<h1>Пять причин почему выбирают нас:</h1>
											<ul>
												<li>Мы делаем вашу жизнь ярче и интереснее уже более 20 лет. С 1993 года официальный туроператор.</li>
												<li>Реагируем на любые запросы в течение 10 минут в рабочее время компании.</li>
												<li>Офисы в Екатеринбурге и Санкт-Петербурге.</li>
												<li>Консультации бесплатно для всех!</li>
												<li>Подарки и скидки всем – мы ценим и любим своих клиентов.</li>
											</ul>												
										</div><!--module w_1200-->
										<div class="module_partners w_1200">
											<h3>Наши партнеры</h3>
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/NASA_logo.png" alt="">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/Starbucks.png" alt="">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/rostelecom.png" alt="">
										</div>
									</div><!--content-->
								</div><!--main_content-->
							</div>
							<div class="footer">
								<div class="w_1200">
									<div class="bot-mnu1">
										<ul>
											<li><a href="#">Помощь в оформлении визы</a></li>
											<li><a href="#">Поиск Ж/Д билетов</a></li>
											<li><a href="#">Забронировать отель</a></li>
											<li><a href="#">Оформить страховку</a></li>											
										</ul>
									</div>										
									<div class="bot-mnu2">
										<h2>Информация</h2>
										<ul>
											<li><a href="#">Купить авиабилеты онлайн</a></li>
											<li><a href="#">Что такое электронный билет</a></li>
											<li><a href="#">Как купить билет</a></li>
											<li><a href="#">Возврат и обмен билета</a></li>
											<li><a href="#">Путеводитель по странам</a></li>
											<li><a href="#">Правила оформления билета</a></li>
											<li><a href="#">Как оплатить билет</a></li>
											<li><a href="#">Необходимые документы</a></li>
											<li><a href="#">О компании</a></li>
											<li><a href="#">Контактная информация</a></li>
											<li><a href="#">Задать вопрос</a></li>
											<li><a href="#">Вопросы и ответы</a></li>
										</ul>
									</div>
								</div>
								<div class="footer2">
									<div class="first-block">
										<div class="bot-adress">
											<span>Пушкин тур</span>
											Россия, 620000, Екатеринбург <br>                             +7 (343) 323 34 54                  
											ул.  Ленина, 5
										</div>
										<div class="bot-phones">
											<p>телефоны: <span>8 800 2000 600</span> </p>
											<div>+7 (343) 323 34 54</div>
										</div>	
										<div class="bot-mail">
											<a href="mailto:mail@pushkin.ru">Email: mail@pushkin.ru</a>
										</div>
										<div class="bot-social"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/social.png" alt=""></div>
									</div>
									<div class="second-block">
										<div class="logo-copy">
											<a class="bot-logo" href="/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/logo2.png" alt=""></a>
											<div class="copy">© 2016</div>
										</div>
										<div class="bot-partners module_partners">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/NASA_logo.png" alt="">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/Starbucks.png" alt="">
											<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/rostelecom.png" alt="">
										</div>
									</div>
								</div><!--footer2-->
							</div><!--footer-->								
						</div><!--wrapper-->
					</body>
					</html>