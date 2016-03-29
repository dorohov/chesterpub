<div id="fullpage-second" class="fullpage-site">

<?
$this->tpl('_/top-nav', array());
?>

<div class="section menu-page__section section-grey-green page-section">
	<div class="_menuP__left-bg _menuP__bg "></div>
	<div class="_menuP__right-bg _menuP__bg _menuP__navbar-open"></div>
	<div class="_ps__rel">
		<header class="header-block _sgg__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sgg__btn" data-toggle="modal" data-target="#modal-navbar">
						<span class="_ps__btn-line _sgg__btn-line">
							<span></span>
							<span></span>
							<span></span>
						</span>					
						меню сайта
					</button>
				</div>
				<div class="_hb__logotip">
					<div>
						<a href="/"><img src="<?php echo $this->path('img');?>/index/logotip-green.png" alt=""></a>
					</div>				
				</div>
				<div class="_hb__phone _sgg__phone ">
					<div>Заказ столов <a href="tel:+74862543054"><span>+7 (4862)</span> 54-30-54</a></div>
					<button type="button" class="btn-order"></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sgg__inside-line">			
			<div class="_menuP__flex">
				<div class="_menuP__left-col">
					<button type="button" class="btn-menu hidden-sm _azbn_click-on-document-ready" data-toggle-nav="body">
						<span>Закажите у нас</span>
					</button>
					<button type="button" class="btn-menu visible-sm" data-toggle="modal" data-target="#modal-menu">
						<span>Меню</span>
					</button>
					<div class="_ps__heading-block _menuP__heading-block">
						<h1 class="_ps__heading _menuP__heading">Меню</h1>
					</div>
					
					<?
					$this->tpl('menu/productcat_item_list', array());
					?>



					<div class="_menuP__btn-block">
						<div class="_menuP__btn-green"><a href="#" class="btn-green _azbn_jscart-step-next hover-scale" data-jscart-step="1" >заказать доставку</a></div>
						<div class="_menuP__link-italic"><a href="<?=l(10);?>">Ознакомиться с условиями доставки</a></div>
					</div>
					<!-- <div class="_menuP__btn-step1">
						<div class="_menuP__green-text">выберите блюда из меню</div>

						<div class="_menuP__link-italic"><a href="#">Спасибо, я озвучу заказ по телефону</a></div>
					</div> -->
				</div>
				<div class="_menuP__right-col">
					
					<?
					$this->tpl('menu/_menuP__navbar', array());
					?>

					<div class="_menuP__delivery step1 _azbn_jscart-step " data-jscart-step="1" >
						<div id="overflow-step1" class="scroll-hide _menuP__scroll-hide" >
							<div class="overflow-container scroll-element _menuP__scroll-element">
								<div class="overflowed scroll-overflow _menuP__scroll-overflow">
									<div class="_menuP__delivery-heading">заявка на доставку</div>
									<div class="_menuP__delivery-step">Шаг 1 из 2</div>
									<div>
										<div class="_menuP__delivery-count mb">Вы заказали <a href="#" class="_azbn_jscart-step-next hover-scale " data-jscart-step="3" ><span class="jscart-amount" >0</span> блюд<span class="jscart-suffix" >а</span></a></div>
										<div class="_menuP__delivery-count">на сумму</div>
										<div class="_menuP__delivery-cost"><span class="jscart-sum" >0</span> рублей</div>
										</div>
									<div class="_menuP__delivery-edit"><a href="#" class="_azbn_jscart-step-next hover-scale" data-jscart-step="3" >Редактировать заказ</a></div>
									<div class="_menuP__delivery-btn"><button type="button" class="btn-deliv _azbn_jscart-step-next hover-scale " data-jscart-step="2" >продолжить</button></div>
									<div class="_menuP__delivery-close"><a href="#" class="_azbn_jscart-step-next hover-scale " data-jscart-step="0" >Отменить</a></div>
								</div>
							</div>
							<div class="scroll-container vertical right" data-target="#overflow-step1" >
								<div class="scroll-line" >
									<div class="scroll" ></div> 
								</div>
							</div>
						</div> 	
					</div>

					<div class="_menuP__delivery step2 _azbn_jscart-step " data-jscart-step="2" >
						<div id="overflow-step2" class="scroll-hide _menuP__scroll-hide" >
							<div class="overflow-container scroll-element _menuP__scroll-element">
								<div class="overflowed scroll-overflow _menuP__scroll-overflow">
									<div class="_menuP__delivery-heading">заявка на доставку</div>
									<div class="_menuP__delivery-step">Шаг 2 из 2</div>
									<div class="_menuP__delivery-text">Укажите ваш телефон, и наш менеджер<br> перезвонит Вам для уточнения деталей заказа</div>
									<div class="_menuP__delivery-input"><input class="_azbn_jscart-order-phone" type="tel" placeholder="Номер телефона"></div>
									<div class="_menuP__delivery-btn"><button type="button" class="btn-deliv jscart-create-order hover-scale ">отправить заявку</button></div>
									<div class="_menuP__delivery-close"><a href="#" class="_azbn_jscart-step-next hover-scale " data-jscart-step="1" >Отменить</a></div>
								</div>
							</div>
						</div>						
						<div class="scroll-container vertical right" data-target="#overflow-step2" >
							<div class="scroll-line" >
								<div class="scroll" ></div> 
							</div>
						</div>
					</div>

					<div class="_menuP__delivery editDev _azbn_jscart-step " data-jscart-step="3" >
					 	<button class="editDev__btn-close" type="button"></button>
						<div class="_menuP__delivery-heading editDev__heading">редактирование заказа</div>
						<div class="editDev__flex">
							<div id="overflow-edit" class="scroll-hide _menuP__scroll-hide" >
								<div class="overflow-container scroll-element _menuP__scroll-element">
									<div class="overflowed scroll-overflow _menuP__scroll-overflow _azbn_jscart-edit-order ">
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>
										<div class="editDev__item">
											<div class="editDev__item-close">
												<button class="editDev__close-btn" type="button"></button>
											</div>
											<div>
												<div>Кольца кальмара в кляре с чесночным соусом</div>
												<div class="editDev__price"><b>250 руб. х 2</b></div>
											</div> 
											<div class="_menuP__item-qty">
												<span class="qty-minus _menuP__item-qty-btn">-</span>
												<span>12</span>
												<span class="qty-plus _menuP__item-qty-btn">+</span>
											</div>
											<div class="editDev__item-cost"></div>
										</div>								
									</div>
								</div>
							</div>
							<div class="scroll-container vertical right" data-target="#overflow-edit" >
								<div class="scroll-line" >
									<div class="scroll" ></div> 
								</div>
							</div>
						</div>
						<div class="editDev__itog-flex"> 
							<div class="editDev__cost">Итого <span class="jscart-sum" >0</span> руб.</div>
							<div class="editDev__btn"><button type="button" class="btn-deliv _azbn_jscart-step-next hover-scale" data-jscart-step="1" >Сохранить</button></div>
						</div>
					</div>							
				</div> 
			</div> 
			<div class="_menuP__panel-bottom">
				<div class="_menuP-pb__inside-line sm-panel">
					
				</div>
			</div> 
		</div>		
	</div>
</div>


<!--
Шаблон для компонования записи в редакторе
-->

<div class="_azbn-jscart-editor-item-tpl hidden-xs hidden-sm hidden-md hidden-lg" >
	<div class="editDev__item" data-jscart-product="%id%" data-jscart-taste="0" data-jscart-cost="%cost%" >
		<div>
			<button class="editDev__close-btn" type="button"></button>
		</div>
		<div>
			<div>%title%</div>
			<div><b>%cost% руб. х %amount%</b></div>
		</div> 
		<div class="_menuP__item-qty">
			<span class="qty-minus _menuP__item-qty-btn jscart-remove-btn " data-jscart-amount="1" >-</span>
			<span class="jscart-item-amount"  >12</span>
			<span class="qty-plus _menuP__item-qty-btn jscart-add-btn " data-jscart-amount="1" >+</span>
		</div>
	</div>
</div>


<div class="modal fade _menuP__modal" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="menu-modal__section section-grey-green page-section">
		<div class="_mp-modal__bg-left modal-bg"></div>
		<div class="_mp-modal__bg-right modal-bg"></div>
		<div class="_ps__rel">
			<header class="header-block _sgg__header">
				<div class="_hb__flex">
					<div>
						<button type="button" class="_ps__btn _sgg__btn" data-toggle="modal" data-target="#modal-navbar">
							<span class="_ps__btn-line _sgg__btn-line">
								<span></span>
								<span></span>
								<span></span>
							</span>					
							меню сайта
						</button>
					</div>
					<div class="_hb__logotip">
						<div>
							<a href="/"><img src="<?php echo $this->path('img');?>/index/logotip-green.png" alt=""></a>
						</div>				
					</div>
					<div class="_hb__phone _sgg__phone ">
						<div>Заказ столов <a href="tel:+74862543054"><span>+7 (4862)</span> 54-30-54</a></div>
						<button type="button" class="btn-order"></button>
					</div>
				</div>
			</header>
			<div class="_ps__inside-line _sgg__inside-line _menuP__modal-content">
				<div class="_mp-modal__flex">
					
				</div>
			</div>
		</div>
	</div>
</div>