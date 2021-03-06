	<?php
		//서브페이지 css 를 연결합니다. 코드를 수정하지 마세요. css 파일은 이 파일(header.php)과 같은 폴더안에 있습니다.
		$css_file_url = preg_replace("'\/[^/]*\.php$'i", "/", $_SERVER['PHP_SELF']);
		$css_file_url = preg_replace("'\/[^/]*\.htm$'i", "/", $css_file_url);
		$css_file_url = preg_replace("'\/[^/]*\.html$'i", "/", $css_file_url);
		$css_file_url = preg_replace("'\/[^/]*\.php3$'i", "/", $css_file_url);
	?>
	<link rel="stylesheet" type="text/css" href="<?php echo G5_THEME_URL;?>/html/css_js/css.php?fname=<?php echo base64_encode("style")?>&type=css&token=<?php echo base64_encode(str_replace(" ","",date('l jS \of F Y h:i:s A')."_".time()))?>&url=<?php echo urlencode($css_file_url)?>" />

	<?php 
		/*
			서브 상단 이미지 theme.subtop.php 에서 설정합니다.
		*/
	?>
	<section id="sub_visual">
		<div class="backgroundimg">
			<div class="visual_area" style="<?php if($SUB_BACKGROUND[$tmenu_]){?>background:url('<?php echo $SUB_BACKGROUND[$tmenu_]?>') no-repeat top center;<?php }?>"></div>
		</div>
	</section>

	<section id="sub_wrapper">
		<div id="sub_menu">		
			<div class="sub_location">
				<div>
					<div class="cen"><a href="<?php echo G5_URL ?>/index.php"><i class="fa fa-home" aria-hidden="true"></i></a></div>
					<ul class="">
						<li>
							<span><?php echo $tmenu_?></span>
							<ul>
								<?php 
									// 1차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.

									foreach($first_menu as $k => $v){
								?>
									<li><a href="<?php echo $v?>" target="<?php echo $first_menu_target[$k]?>"><?php echo $k?></a></li>
								<?php } 
									
								?>
							</ul>
						</li>
					</ul>
					<ul class="dep2">
						<li>
							<span><?php echo $g5['title']?></span>
							<ul>
								<?php 
									// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
									if(isset($second_menu[$tmenu_])){ 
									foreach($second_menu[$tmenu_] as $k => $v){
								?>
									<li><a href="<?php echo $v?>" target="<?php echo $second_menu_target[$tmenu_][$k]?>"><?php echo $k?></a></li>

										<?php 
											// 3차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
											if(isset($third_menu[$tmenu_][$k])){
											foreach($third_menu[$tmenu_][$k] as $kkk => $vvv){
										?>
											<li class="dep3">											
												<a href="<?php echo $vvv?>" target="<?php echo $third_menu_target[$tmenu_][$k][$kkk]?>">└ <?php echo $kkk?></a>
											</li>
										<?php } 
											}
										} 
									}
								?>
							</ul>
						</li>
					</ul>						
					
				</div>
			</div>
		</div>