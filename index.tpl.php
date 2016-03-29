<div id="fullpage" class="fullpage-site">

<?
$this->tpl('_/top-nav', array());
?>

<div class="section index-header__section section-green page-section">
	<div class="_ps__rel">
		<header class="header-block _sg__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sg__btn" data-toggle="modal" data-target="#modal-navbar">
						<span class="_ps__btn-line">
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
					<button type="button" class="btn-order"></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sg__inside-line _ih__flex">
			<h1 class="_ih__heading">Chester pub</h1>
			<div class="_ih__heading-small">Кусочек старой Европы в историческом центре г. Орла</div>
			<div class="_ih__btn-box">
				<a href="#" class="btn-bron">Забронировать столик</a>
			</div>
			<div class="_ih__btn-scroll">Прокрутите вниз</div>
		</div>
	</div>
</div>





<div class="section index-restaurant__section section-grey page-section">
	<div class="_ps__rel">
		<header class="header-block _sgr__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sgr__btn" data-toggle="modal" data-target="#modal-navbar">
						<span class="_ps__btn-line _sgr__btn-line">
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
				<div class="_hb__phone _sgr__phone ">
					<div>Заказ столов <a href="tel:+74862543054"><span>+7 (4862)</span> 54-30-54</a></div>
					<button type="button" class="btn-order"></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sgr__inside-line ">
			<div class="_ps__heading-block"><h2 class="_ps__heading _ir__heading">о ресторане</h2></div>
			<div class="_ir__flex">
				<div class="_ir__left-col">
					<div id="carousel-example-generic" class="carousel _ir__carousel slides" data-ride="carousel">
						<div class="carousel-inner _ir__carousel-inner">
							<div class="item active">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0007.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0004.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0015.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0041.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0033.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0067.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0075.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0069.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							<div class="item ">
								<img src="http://chester.dorohovdesign.ru/wp-content/uploads/2016/03/ch_0092.jpg" alt="">			
								<div class="carousel-caption">
									<!--На фото: 2-ой этаж ресторана-->
								</div>
							</div>
							
						</div>
						<a class="left carousel-control " href="#carousel-example-generic" data-slide="prev"></a>
						<a class="right carousel-control " href="#carousel-example-generic" data-slide="next"></a>
					</div>
					<div class="_ir__fotogal-link">
						<a href="#">
							<img src="<?php echo $this->path('img');?>/index/img-fotogal.jpg" alt="">
						</a>
					</div>
					<div class="_ir__virt-link">
						<a class="" href="<?=l(14);?>">
							<img src="<?php echo $this->path('img');?>/index/virt-tour.jpg" class="hidden-sm hover-scale" alt="">
							<img src="<?php echo $this->path('img');?>/index/virt-tour-sm.jpg" class="visible-sm" alt="">
						</a>
					</div>
				</div>
				<div class="_ir__note">
					<div class="_ir__note-content">
						<? the_content();?>
					</div>
				</div>
			</div>
			<div class="_ps__btn-top _sgr__btn-top "></div>
		</div>
	</div>
</div>
		    


<div class="section index-beer__section section-green page-section">
	<div class="_ibm__left-bg _ibm__bg "></div>
	<div class="_ibm__right-bg _ibm__bg"></div>
	<div class="_ps__rel">
		<header class="header-block _sg__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sg__btn" data-toggle="modal" data-target="#modal-navbar">
						<span class="_ps__btn-line _sg__btn-line">
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
					<button type="button" class="btn-order"></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sg__inside-line ">
			<div class="_ibm__flex">
				<div class="_ibm__left-col">
					<div class="_ibm__col-inner">
						<h3 class="_ibm__heading _ibm__heading-beer">Наше пиво</h3>
						<div class="_ibm__note">
							Мы рады предложить Вам 4 сорта настоящего пива премиум класса высочайшего качества, сваренного на нашей собственной пивоварне.
						</div>
						<div class="_ibm__btn-block">
							<a href="<?=l(24);?>" class="btn-bron hover-scale">Подробнее</a>			
						</div>
					</div>
				</div>
				<div class="_ibm__right-col">
					<div class="_ibm__col-inner">
						<h3 class="_ibm__heading _ibm__heading-menu">Наше меню</h3>
						<div class="_ibm__note">
							Наши повара предлагают Вашему вниманию разнообразные блюда традиционной европейской кухни, которые оценят даже самые утонченные гурманы.
						</div>
						<div class="_ibm__btn-block">
							<a href="<?=l(7);?>" class="btn-bron hover-scale">Подробнее</a>			
						</div>
					</div>							
				</div>
			</div>
			<div class="_ps__btn-top _sg__btn-top "></div>
		</div>		
	</div>
</div>


<div class="section index-news__section section-grey page-section">
	<div class="_ps__rel">
		<header class="header-block _sgr__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sgr__btn" data-toggle="modal" data-target="#modal-navbar">
						<span class="_ps__btn-line _sgr__btn-line">
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
				<div class="_hb__phone _sgr__phone ">
					<div>Заказ столов <a href="tel:+74862543054"><span>+7 (4862)</span> 54-30-54</a></div>
					<button type="button" class="btn-order"></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sgr__inside-line ">
			<div class="_ps__heading-block _in__heading-block">
				<h2 class="_ps__heading _in__heading">Новости <span>и акции</span></h2>			
				<div class="_in__btn-block">
					<a href="<?=l(12);?>" class="btn-bron">Все новости и акции</a>	
				</div> 				
			</div>
			<div class="_in__flex">
				
				<?
				$per_page = 4;
				
				$query = new WP_Query(array(
					'post_type' => 'post',
					//'category_name' => 'club-actions',//$param['cat_slug'],
					'posts_per_page' => $per_page,
					//'paged' => $paged,
				));
				?>
				
				<?
				while ($query->have_posts()) {
					$query->the_post();
					$id = get_the_ID();
					$link = l($id);
					$img_sm = $this->Imgs->postImg($id, 'news-preview');
					//$d = get_the_date("j");
					//$m = get_the_date("F");
					$c_arr = explode('.', c($id));
						
					?>
					
					<article class="_in__item news__item">
						<div class="_in__item-preview news__item-preview">
							<a href="<?=$link;?>">
								<img src="<?=$img_sm;?>" alt="">
							</a>
						</div>
						<div class="_in__item-time news__item-time"><?=get_the_date();?></div>
						<h4 class="_in__item-heading news__item-heading"><a href="<?=$link;?>"><?=t($id);?></a></h4>
						<div class="_in__item-note news__item-note"><?=$c_arr[0];?></div>
						<div class="_in__item-link news__item-link"><a href="<?=$link;?>">подробнее</a></div>
					</article>
					
					<?
				}
				//pagination($query, $query->max_num_pages, $paged, $per_page);
				wp_reset_postdata();
				?>
				
			</div>

			<div class="_ps__btn-top _sgr__btn-top "></div>
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
	if(device.desktop()) {
		$('#fullpage').fullpage({
			navigation: true,
			navigationPosition: 'right',
			//scrollOverflow: true
		});
	}
</script>