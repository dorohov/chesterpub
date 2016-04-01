<div id="fullpage-second" class="fullpage-site ">

<?
$this->tpl('_/top-nav', array());
?>

<div class="section vacancy-page__section section-grey-green page-section">
	<div class="_vacP__left-bg _vacP__bg "></div>
	<div class="_vacP__right-bg _vacP__bg"></div>
	<div class="_ps__rel _vacP__rel">
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
						<button type="button" class="btn-order" data-toggle="modal" data-target="#modal-contactme" ></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sgg__inside-line">			
			<div class="_vacP__flex">
				<div class="_vacP__left-col">
					<div>
						<div class="_ps__heading-block _vacP__heading-block">
							<h1 class="_ps__heading _vacP__heading">вакансии</h1>
						</div>	
						<div class="_vacP__flex-scroll">
							<div id="overflow-container" class="scroll-hide _vacP__scroll-hide" >
								<div class="overflow-container scroll-element _vacP__scroll-element">
									<div class="overflowed scroll-overflow _vacP__scroll-overflow">
										<div>
											<? the_content();?>
										</div>
									</div>
								</div>
							</div>
							<div class="scroll-container _vacP__scroll-container vertical right" data-target="#overflow-container" > 
								<div class="scroll-line" >
									<div class="scroll" ></div>
								</div>
							</div>
						</div>
						<div class="_vacP__btn-green hidden-sm hidden-xs">
							<a href="#" class="btn-green _azbn_vacancy-get-form ">отправить резюме</a>
						</div>	
						<div class="_vacP__btn-green visible-sm visible-xs">
							<a href="#" class="btn-green" data-toggle="modal" data-target="#modal-rev">отправить резюме</a>
						</div>	
					</div>
					<div class="_vacP__note-small">
						Также Вы можете заполнить анкету в ресторане по адресу : ул. Комсомольская, 36,<br> или выслать резюме на <a href="mailto:ele009@mail.ru">ele009@mail.ru</a>
					</div>	
				</div>
				<div class="_vacP__right-col">
					<div class="_contP__rev _azbn_vacancy-form-cont">
						<!--<button type="button" class="btn-close-xs _azbn_cancel"></button>-->
						<div id="overflow-container-rev" class="scroll-hide _s__scroll-hide" >
							<div class="overflow-container scroll-element _s__scroll-element">
								<div class="overflowed scroll-overflow _s__scroll-overflow">
									<h3 class="_contP__rev-heading">заполнение анкеты</h3>
									<div class="_vacP__rev-note">Пожалуйста, заполните все поля анкеты.</div> 
									<form class="vacancy-form _contP__rev-form">
										<div class="icon-user _icon"><input type="text" placeholder="Ваше имя"></div>
										<div class="icon-mail _icon"><input type="text" placeholder="Ваш e-mail"></div>
										<div class="icon-commit _icon"><input type="text" placeholder="Немного о себе"></div>
										<div class="file-block">
											<input type="file" >
											<div class="file-visible">
												<span class="file-btn">Прикрепить</span> Ваше резюме (не более 10 Mb)
											</div>					
										</div>
										<div class="_vacP__rev-btn-green">
											<button type="submit" class="btn-deliv _azbn_cancel">Отправить</button> 
										</div>
									</form>
									<div class="_contP__link-italic">
										<a class="_azbn_cancel" href="#">Отмена</a>
									</div>	
								</div>
							</div>
						</div>
						<div class="scroll-container _s__scroll-container vertical right" data-target="#overflow-container-rev" > 
							<div class="scroll-line" >
								<div class="scroll" ></div>
							</div>
						</div>
					
					</div>
				</div> 
			</div> 
		</div>		
	</div>
</div>

<div class="modal fade _vacP__modal" id="modal-rev" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class=" section-green _nbmodal__dialog _vacP__dialog">
		<div class="_ps__rel">
			<header class="header-block _sg__header">
				<div class="_hb__flex">
					<div>
						<button type="button" class="_ps__btn _sg__btn" data-toggle="modal" data-target="#modal-navbar">
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
					<div class="_hb__phone _sg__phone ">
						<div>Заказ столов <a href="tel:+74862543054"><span>+7 (4862)</span> 54-30-54</a></div>
						<button type="button" class="btn-order" data-toggle="modal" data-target="#modal-contactme" ></button>
					</div>
				</div>
			</header>
			<nav class="navbar navbar-fixed-top navbar-xs">
				<div class="container-fluid">
					<div class="navbar-header">
						<!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> -->
						<button type="button" class="navbar-toggle" data-toggle="modal" data-target="#modal-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="_nbxs__logotip">
							<a href="/"><img src="<?php echo $this->path('img');?>/index/logotip-green.png" alt=""></a>
						</div>
						<button type="button" class="btn-order"></button>
					</div>
				</div> 
			</nav>
			<div class="_ps__inside-line _sg__inside-line _nbmodal__inside-line _vacP__inside-line">
				<div class="_vacP__modal-inner">				
					<button type="button" class="btn-close-xs _azbn_cancel" data-dismiss="modal"></button>	
					<h3 class="_contP__rev-heading">заполнение анкеты</h3>
					<div class="_vacP__rev-note">Пожалуйста, заполните все поля анкеты.</div> 
					<form action="" class="_contP__rev-form vacancy-form">
						<div class="icon-user _icon"><input type="text" placeholder="Ваше имя"></div>
						<div class="icon-mail _icon"><input type="text" placeholder="Ваш e-mail"></div>
						<div class="icon-commit _icon"><input type="text" placeholder="Немного о себе"></div>
						<div class="file-block">
							<input type="file" >
							<div class="file-visible">
								<span class="file-btn">Прикрепить</span> Ваше резюме (не более 10 Mb)
							</div>					
						</div>
						<div class="_vacP__rev-btn-green">
							<button type="submit" class="btn-deliv _azbn_cancel">Отправить</button> 
						</div>
					</form>
					<div class="_contP__link-italic">
						<a href="#" data-dismiss="modal _azbn_cancel">Отмена</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?
$this->tpl('_/section-footer-block', array());
?>

</div>

<?
$this->tpl('_/menu-modal', array());

?>
		<script>
			/*
			if(device.desktop()) {
				$('#fullpage-second').fullpage({
					navigation: true,
					navigationPosition: 'right',
					navigation: false,
				});
			}
			*/
		</script>