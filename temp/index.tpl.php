<div id="fullpage-second" class="fullpage-site">

<?
$this->tpl('_/top-nav', array());
?>

<?

$wpq = new WP_Query;
$beer = $wpq->query(array(
	'post_type' => 'azbnbeer',
	'orderby' => 'menu_order title',
	'order' => 'ASC',
	'posts_per_page' => -1,
	'tax_query' => array(array(
		'taxonomy' => 'azbnbeer_taxonomies',
		'field' => 'slug',
		'terms' => array('pivo-s-soboy'),
	)),
));

if(count($beer)) { 
	$i = 0;
	foreach($beer as $index => $p) {
		$id = $p->ID;
		$heading = $p->post_title;
		$note = get_field('note', $id);					
		$preview = get_field('preview', $id);					
		$cost = get_field('cost', $id);					
		$abv = get_field('abv', $id);					
		$og = get_field('og', $id);					
?>
<div class="section beer-page__section section-grey page-section <?if ($index == 0) echo 'hell-beer__section'?>" id="section<?=$index;?>">
	<div class="_ps__rel">
		<header class="header-block _sgr__header">
			<div class="_hb__flex">
				<div>
					<button type="button" class="_ps__btn _sgg__btn" data-toggle="modal" data-target="#modal-navbar">
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
					<button type="button" class="btn-order" data-toggle="modal" data-target="#modal-contactme" ></button>
				</div>
			</div>
		</header>
		<div class="_ps__inside-line _sgr__inside-line">				
			<div class="_beer__inner">
				<div class="_ps__heading-block _beer__heading-block  <?if ($index != 0) echo 'is--hidden'?>">
					<h1 class="_ps__heading _beer__heading"><?the_title();?></h1>		
				</div>
				<div class="_beer__bg-text  is--long"><?=$heading;?></div>	
				<div class="_beer__flex">
					<div class="_beer__left-col  is--bg" style="background-image: url(<?=$preview;?>)">
						<?if($abv != ""){?>
						<div class="_beer__item-sort hidden-xs">
							Доля спирта <span><?=$abv;?></span>
						</div>
						<?}?>
						<?if($og != ""){?>
						<div class="_beer__item-sort hidden-xs">
							Плотность <span><?=$og;?></span>
						</div>
						<?}?>
					</div>
					<div class="_beer__right-col">
						<div id="overflow-container" class="scroll-hide _beer__scroll-hide" >
							<div class="overflow-container scroll-element _beer__scroll-element">
								<div class="overflowed scroll-overflow _beer__scroll-overflow">
									<h3 class="_beer__item-heading"><?=$heading;?></h3>
									<div class="_beer__flex-sort ">
										<?if($abv != ""){?>
										<div class="_beer__item-sort">
											Доля спирта <span><?=$abv;?></span>
										</div>
										<?}?>
										<?if($og != ""){?>
										<div class="_beer__item-sort">				
											Плотность <span><?=$og;?></span>
										</div>
										<?}?>
									</div>
									<div><?=$note;?></div>
									<?if($cost != ""){?>
									<div class="_beer__item-cost  is--big">
										<div><span><?=$cost;?></span> руб.</div>
									</div>
									<?}?>
								</div>
							</div>
						</div>
						<div class="scroll-container _beer__scroll-container vertical right" data-target="#overflow-container" >
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
<?					
		$i++;	
	}
?>
<?}?>

<?
$this->tpl('_/section-footer-block', array());
?>

</div>

<?
$this->tpl('_/menu-modal', array());

?>

<div class="right _beer__nav  is--sm">
	<ul>
		<?	
			$i = 0;
			foreach($beer as $index => $p) {
				$id = $p->ID;
				$heading = $p->post_title;				
		?>
		<li data-menuanchor="beer-item<?=$i;?>">
			<a href="#beer-item<?=$i;?>" <?if ($index == 0) echo 'class="active"'?>><i><?=$heading;?></i> <span></span></a>
		</li>
		<?$i++;}?>		
	</ul>
</div> 

<script>
	if(device.desktop()) {
		$('#fullpage-second').fullpage({
			navigation: true,
			navigationPosition: 'right',
			navigation: false,
			anchors: [
			<?				
				$i = 0;
				foreach($beer as $index => $p) {
					$heading = $p->post_title;				
			?>
			'beer-item<?=$i;?>',			
			<?$i++;}?> 
			'footer'],
			menu: '._beer__nav',
		});
	}
</script>