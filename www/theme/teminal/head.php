<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
   
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

	 <?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}
    ?>

	<?php 
		/*
			반응형 모바일상단

			중간기기부터 모바일상단이 보여집니다.
			theme.menu.php에서 메뉴를 수정 및 추가해서 사용하세요. 
		*/
	?>
	<div id="mobile_header">
		<div class="inner">
			<h1><a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL;?>/html/image/top_logo_m.svg" alt="로고" title="로고"></a></h1>
			<ul class="m_gnb">
				<li class="category"><a href="#none" class="qbt" title="전체메뉴열기"><i class="fa fa-outdent" aria-hidden="true"></i></a></li>
				<li class="home"><!-- <a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=qa"><i class="fa fa-pencil-alt" aria-hidden="true"></i></a> --><a href="sms:01012345678" title="휴대폰 문자전송"><i class="fas fa-envelope-open"></i></a></li>
			</ul>
		</div>
	</div>
	<div id="sideMenu">
		<div class="side_title qbt"><?php echo $config['cf_title']?> <i class="fa fa-window-close" aria-hidden="true" style="float:right; margin-right:10px; margin-top:20px;"></i></div>		
		<div id="gnba">
			
				<?php 
					/*
						빠른메뉴

						회원을 사용하지 않으시는 경우는 theme.menu.php 에서 $member_menu_view를 false 처리하세요.						

					*/
				?>

				<?php if($member_menu_view == true){ // 회원메뉴를 사용할 경우?>			

				<i class="fas fa-user-circle"></i>
				<?php if ($is_member) {  ?><br><span style="color:#fff;"><?php echo $member['mb_name']?>님!</span><?php }?>
				<div style="margin-top:10px; margin-bottom:10px;">	
				<?php if ($is_member) {  ?>
					<a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a>
					<a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
				 <?php } else {  ?>
					<a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a>
					<a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a>					
				 <?php }?>
				 	</div>

				<?php } else{ // 회원메뉴를 사용하지 않을 경우?>		

				<div style="margin-top:10px; margin-bottom:10px;">					
					<a href="<?php echo G5_URL ?>/index.php">HOME</a>
					<a href="<?php echo get_pretty_url("notice")?>">공지사항</a>	
				</div>

				<?php }?>
		
		</div>		
		<div class="navi_bg">
			<div class="nav" >
				<ul class="subnav1">
					<?php 
						foreach($first_menu as $k => $v){

							$sco = isset($second_menu[$k]) ? @count($second_menu[$k]) : 0;
					?>
						
						<li class="navi_set" >
							<div><?php if($sco == 0){?><a href="<?php echo $first_menu[$k]?>" target="<?php echo $first_menu_target[$k]?>"><?php }?><?php echo $k?><?php if($sco != 0){?><i class="fas fa-angle-down" aria-hidden="true" style="float:right; margin-right:10px; margin-top:12px;"></i><?php }?><?php if($sco == 0){?></a><?php }?></div>
							<?php if($sco != 0){?>
							<ul class="subnav">
								<?php 
									// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
									if(isset($second_menu[$k])){
									foreach($second_menu[$k] as $kk => $vv){
								?>
									<li><a href="<?php echo $vv?>" target="<?php echo $second_menu_target[$k][$kk]?>">- <?php echo $kk?></a></li>

									<?php 
										// 3차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
										if(isset($third_menu[$k][$kk])){ 
										foreach($third_menu[$k][$kk] as $kkk => $vvv){
									?>
										<li class="dep3">											
											<a href="<?php echo $vvv?>" target="<?php echo $third_menu_target[$k][$kk][$kkk]?>">&nbsp;&nbsp;└ <?php echo $kkk?></a>
										</li>
									<?php } 
										}
									} 
									}									
								?>
							</ul>
							<?php }?>
						</li>					
					<?php } 
						
					?>	
				</ul>
			</div>
		</div>
	</div>
	<div id="back_cover"></div>


	
	<?php 
		/*
			PC형 상단

			큰기기는  PC형 상단이 보여집니다.
			메뉴를 원하시는대로 수정해서 사용하세요.

		*/
	?>
	
	<section id="header_wrap">

		
		<div id="header" >		
			

			<div class="header_top">
				<div class="inner">

					<!-- <ul class="Lang">
						<li class="on"><a href="">KR</a></li>
						<li class=""><a href="">EN</a></li>
					</ul> -->

					<?php 
						/*
							빠른메뉴

							회원을 사용하지 않으시는 경우는 theme.menu.php 에서 $member_menu_view를 false 처리하세요.						

						*/
					?>

					<?php if($member_menu_view == true){ // 회원메뉴를 사용할 경우?>

					<div id="gnbb">					
						<?php if ($is_member) {  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fas fa-lock-open" aria-hidden="true"></i> 로그아웃</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"><i class="fas fa-edit" aria-hidden="true"></i> 정보수정</a></li>
						 <?php } else {  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/login.php"><i class="fa fa-power-off" aria-hidden="true"></i> 로그인</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fa fa-user" aria-hidden="true"></i> 회원가입</a></li>						
						 <?php }?>				
					</div>

					<?php } else{	//회원메뉴를 사용하지 않을 경우 대체 ?>
					
					<div id="gnbb">					
						<li><a href="<?php echo G5_URL ?>/index.php"><i class="fas fa-home"></i> HOME</a></li>
						<li><a href="<?php echo get_pretty_url("notice")?>"><i class="fas fa-comment-dots"></i> 공지사항</a></li>						
					</div>

					<?php }?>

				</div>
			</div>


			<div class="wrap_box">			


				<div id="header_logo">
					<h1 class="logo_a"><a href="<?php echo G5_URL ?>/index.php"><img src="<?php echo G5_THEME_URL;?>/html/image/top_logo.svg" alt="로고" title="로고"></a></h1>
				</div>
				<div id="lnb">
					<div id="lnb_wrap">						
						<div class="lnb_area" style="position:relative;">						
							<ul class="ul_1st">								
								<?php 
									foreach($first_menu as $k => $v){
								?>
									
									<li>
										<a href="<?php echo $v?>" target="<?php echo $first_menu_target[$k]?>"><p><?php echo $k?></p> <!-- <i class="fas fa-angle-down"></i> --></a>
										<ul class="ul_2nd">										
											<?php 
												// 2차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
												if(isset($second_menu[$k])){
												foreach($second_menu[$k] as $kk => $vv){
											?>
												<li>											
													<a href="<?php echo $vv?>" target="<?php echo $second_menu_target[$k][$kk]?>"><?php echo $kk?></a>
													<ul class="ul_3rd">
													<?php 
														// 3차 메뉴는 /theme/스킨명/theme.menu.php 내에서 세팅합니다.
														if(isset($third_menu[$k][$kk])){
														foreach($third_menu[$k][$kk] as $kkk => $vvv){
													?>
														<li>											
															<a href="<?php echo $vvv?>" target="<?php echo $third_menu_target[$k][$kk][$kkk]?>"><?php echo $kkk?></a>
														</li>
													<?php }
														}													
													?>
													</ul>														
												</li>
											<?php } 
												}
												
											?>
										</ul>
									</li>

									<li></li>
								<?php } 
								
								?>									
							</ul>
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>





	<?php 

		/*
			게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결

			커스텀 페이지에서는 아래 소스를 출력하지 않습니다.
			theme.menu.php에서 메뉴를 수정 및 추가해서 사용하세요.

		*/

		$title_view = isset($title_view) ? $title_view : '';     if(!defined('_INDEX_') && $title_view != "no"){ // if문을 수정하지 마십시오.			

			// 게시판 타이틀 정비
			if($bo_table){
				$g5['title'] = $board['bo_subject'];
			}
			
			$fm_id = isset($fm_id) ? $fm_id : '';   //faq 타이틀 정비
			if($fm_id){
				$g5['title'] = "자주하시는 질문";
			}

			//게시판의 카테고리가 2차메뉴로 설정되었을때 타이틀 정비
			if($tmenu2_ && $sca){
				$g5['title'] = $sca;
			}
			
			
	?>


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

			<div id="sub_tit">
				<div class="path">
					<li><a href="<?php echo G5_URL ?>/index.php"><span class="ic-home"><i></i></span></a></li>
					<?php if($tmenu_ != $g5['title']){?><li><?php echo $tmenu_?></li><?php }?>
					<?php if($tmenu2_ != $g5['title']){?><li><?php echo $tmenu2_?></li><?php }?>
					<li><?php echo $g5['title']?></li>
				</div>
				<div class="title"><?php if($tmenu_) echo $tmenu_; else echo $g5['title'];?></div>
				<p class="normal_txt"><?php echo $g5['so_title']?>	</p>
			</div>

			<div class="scontents">


				<div class="bg_vline"></div>
				<p class="eng"><em></em> <?php echo $g5['title']?></p>
				<p class="stitle"><?php echo $g5['so_title']?></p>



	<?php }