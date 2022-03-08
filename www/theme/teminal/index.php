<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<div id="container">


		<section id="main_visual">
			<div class="swiper-container" >
				<div class="swiper-wrapper">			
					<?php				

						if(!$youtube_idx) $youtube_idx = ""; //유투브동영상 아이디를 넣으세요. 유투브영상 링크의 v값이 아이디입니다. https://www.youtube.com/watch?v=유투브아이디

						/*
							
							유투브 동영상 삽입 주의사항
							1. 유투브 동영상을 첫번째 컷, 마지막 컷으로 사용하실 경우	/html/css_js/main.js 의 4번째 라인 loop: true, 를 loop: false, 로 바꾸셔야 합니다.	
							2. 유투브 동영상은 여러개 불가능하며 1개만 가능합니다.

							유투브 배경이미지 안내
							1. 유투브영상은 로딩되는 시간이 필요합니다. 이는 조절할 수 있는 시간이 아닙니다.
							2. 로딩시간이 길어져 동영상이 느리게 뜰 경우를 대비해 유투브 영상의 첫 프레임을 이미지화하여 배경이미지로 사용하면 좋습니다.							
						 
						*/

						if(!$youtube_bg) $youtube_bg = ""; //유투브 배경이미지 : 직접 만드신 이미지가 있다면 이미지경로를 입력하세요.
						if(!$youtube_bg || $_OS_ == "mobile") $youtube_bg = "https://img.youtube.com/vi/{$youtube_idx}/0.jpg"; // 수정삭제 하지 마세요. 배경이미지 경로를 입력하지 않으면 유투브영상의 썸네일을 자동으로 가져옵니다. 이미지가 깨져보일 수 있으며, 첫 프레임이미지가 아닐 수 있습니다.	
						
						$youtube_position = "center,right"; //유투브 영상의 위치를 정렬합니다. 상하,좌우  로 설정하며 상하 는 top center bottom  좌우는 left center right  center,right 라면 상하중간,우측 으로 정렬
						if($_OS_ == "mobile") $youtube_position = "center,center"; //모바일일때 상하중간,좌우중간 으로 정렬

						$youtube_optimize = "true"; // true 이면 슬라이드 전체화면에 유투브를 띄우며, 이경우 영상의 상하,좌후가 잘려보일수 있습니다.   false 이면 유투브를 화면에 꽉차게 띄우지 않고 영상이 전체 보이도록 조정합니다.


					?>
					<div class="swiper-slide swiper-lazy" data-swiper-autoplay="5000"> <?php  //data-swiper-autoplay="5000" 5초후 다음컷 ?>
						<div class="sliderkit-text wow fadeIn">
<!--							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s">심플하지만 다 갖춘 다온테마</h1>-->
<!--							<h1 class="sviewa animated" data-swiper-animation="fadeInUp"   data-duration="1.2s" data-delay="0.7s">홈페이지, 쇼핑몰 전체제작<br>제작관련 궁금하신 사항은 언제든지 연락부탁드립니다.  </h1>-->
<!--							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2>상담문의 : daontheme@daum.net</h2></span></div>-->
						</div>
						<div class="backgroundimg">
                            <div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/1212.png"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual01_m.jpg"></div>
						</div>
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>					

					<div class="swiper-slide swiper-lazy"  data-swiper-autoplay="5000" > <?php  //data-swiper-autoplay="31000" 31초후 다음컷 동영상 시간만큼 설정 1초 = 1000 ?>
						<div class="sliderkit-text" style="z-index:99999999;">
<!--							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s">YOUTUBE 백그라운드</h1>-->
<!--							<h1 class="sviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.7s">심플하지만 다 갖춘 테마<br>테마에 사용된 동영상은 사용이 불가능합니다.</h1>-->
<!--							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2>상담문의 : daontheme@daum.net</h2></span></div>-->
						</div>
						<div id="bgndVideo1" style="width:100%; height:100%; background:url('<?php echo $youtube_bg;?>') no-repeat center center; background-size:cover;"></div>
						<div id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/<?php echo $youtube_idx?>',containment:'#bgndVideo1',showControls:false,startAt:0,stopAt:0,mute:true,autoPlay:true,loop:true,opacity:1,quality:'highres',anchor:'<?php echo $youtube_position?>',optimizeDisplay:<?php echo $youtube_optimize?>}"></div>
						<?php

							/*
								유투브 backgroundimg 는
								다른 메인슬라이드 이미지와 같은 크기의 투명이미지를 올립니다.
							*/

						?>
						<div class="backgroundimg">
<!--							<div class="pc_only"><img src="--><?php //echo G5_THEME_URL;?><!--/html/image/main_visual_transparent.png"></div>-->
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual_m_transparent.png"></div>
						</div>
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>

					<div class="swiper-slide swiper-lazy" data-swiper-autoplay="5000"> <?php  //data-swiper-autoplay="5000" 5초후 다음컷 ?>
						<div class="sliderkit-text">
<!--							<h1 class="lviewa animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="0.5s">심플하지만 다 갖춘 다온테마</h1>-->
<!--							<h1 class="sviewa animated" data-swiper-animation="fadeInUp"   data-duration="1.2s" data-delay="0.7s">심플하지만 다 갖춘 테마<br>홈페이지제작관련 궁금하신 사항은 언제든지 연락부탁드립니다.  </h1>-->
<!--							<div class="animated" data-swiper-animation="fadeInUp" data-duration="1.2s" data-delay="1s"><span><h2>상담문의 : daontheme@daum.net</h2></span></div>-->
						</div>
						<div class="backgroundimg">
							<div class="pc_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual02.jpg"></div>
							<div class="mobile_only"><img src="<?php echo G5_THEME_URL;?>/html/image/main_visual02_m.jpg"></div>
						</div> 
						<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
					</div>


				</div>
				<div class="swiper-pagination"></div>

				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<script src="<?php echo G5_THEME_URL;?>/html/css_js/main.js"></script>
			<script>
				if($('#bgndVideo').length) {
					$("#bgndVideo").YTPlayer();
					$("#bgndVideo").YTPPause();
				}
			</script>
		</section>			

		
		
		<section id="m_bnr">
		<ul>
			<li class="wow fadeInUp">
				<a href="<?php echo G5_THEME_URL;?>/html/company/01.php">
					<div class="img_box"><img src="<?php echo G5_THEME_URL;?>/html/image/m_bnr1.jpg" title="배너이미지1"></div>
					<dl>
						<dt>
							<em>INTRODUCTION</em>
							<p>회사소개</p>
						</dt>
						<dd>터미널산업건설을 소개합니다.</dd>
					</dl>
				</a>
			</li>
			<li class="wow fadeInDown">
				<a href="<?php echo G5_THEME_URL;?>/html/company/02.php">
					<div class="img_box"><img src="<?php echo G5_THEME_URL;?>/html/image/m_bnr2.jpg" title="배너이미지2"></div>
					<dl>
						<dt>
							<em>HISTORY</em>
							<p>Since 2008</p>
						</dt>
						<dd>지난 00년간 걸어온 발자취입니다.</dd>
					</dl>
				</a>
			</li>
			<li class="wow fadeInUp">
				<a href="<?php echo get_pretty_url("gallery")?>">
					<div class="img_box"><img src="<?php echo G5_THEME_URL;?>/html/image/m_bnr3.jpg" title="배너이미지3"></div>
					<dl>
						<dt>
							<em>INTERIOR</em>
							<p>내부전경</p>
						</dt>
						<dd>내부전경 갤러리입니다.</dd>
					</dl>
				</a>
			</li>
		</ul>
		</section>


		<section id="business_wrap">
			<div class="inner">
				<div class="con_title wow fadeInUp">
					<h3>BUSINESS INFO</h3>
					<p>터미널산업건설의 다양한 사업영역을 만나보세요.</p>
				</div>
				<div class="con_box">
				<ul>
					<li class="bg1 hvr-bob">
						<a href="/theme/teminal/html/business/02.php">
							<h4>건축구조물해체</h4>
							<p>최근 건축공사의 화두는 단연 ‘안전’일 것입니다.
                                터미널산업건설은 안전을 최우선 목표로 두고 해체공사에 임하고 있습니다.</p>
						</a>
					</li>
					<li class="bg2 hvr-bob">
						<a href="/theme/teminal/html/business/02.php">
							<h4>내부철거공사</h4>
							<p>
                                터미널산업건설은 지역의 각종 상가 및 특수 목적의 건물의
                                내부 철거를 진행해 왔습니다.
                                각종음식점은 물론, 수영장, 목욕탕, 피트니스센터 등 지역에서
                                의뢰 받은 철거를 안전하고 신속하게 철거해 왔습니다.
							</p>
						</a>
					</li>
					<li class="bg3 hvr-bob">
						<a href="/theme/teminal/html/business/02.php">
							<h4>석면철거</h4>
							<p>전국에서도 85번째 석면철거업 등록 업체로서 지역에서도
                                독보적인 석면철거업체로 활약해 왔습니다.
                                각종상가는 물론 지역의 단독 주택 석면, 창고, 축사 등 어떠한
                                현장에서도 안전하고 신속하게 석면철거를 해오고 있습니다.</p>
						</a>
					</li>
					<li class="bg4 hvr-bob">
						<a href="/theme/teminal/html/business/02.php">
							<h4>부분철거</h4>
							<p>
                                건물의 특정부분에 통로나 창문 등을 추가하기 위한 내력벽 부분철거가 가능한 장비를 보유하여, 현장의 소음과 분진을 최소화 하고 있습니다.
							</p>
						</a>
					</li>
				</ul>
				</div>
			</div>
		</section>



		<?php 			

				//슬라이드형 갤러리는 5개이상 진열 되면 슬라이드 됩니다.			

		?>
<!--		<section id="rolling_box">	-->
<!--			<div class="inner">-->
<!---->
<!--				<div class="con_title wow fadeInUp">-->
<!--					<h3>GALLERY</h3>-->
    <!--					<p>다양한 소식을 이미지로 만나보세요.</p>-->
<!--				</div>-->
<!---->
<!--				<div class="swiper-btn-wrap">-->
<!--					<div class="swiper-scrollbar-wrap2">-->
<!--						<div class="swiper-button-next2" ></div>-->
<!--						<div class="swiper-button-prev2" ></div>				-->
<!--					</div>-->
<!--					<div class="swiper-pagination2"></div>-->
<!--				</div>-->
<!--				<div class="swiper-container2">-->
<!--					<div class="swiper-wrapper" >-->
<!--						--><?php //
//							$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
//							echo daontheme_lastest('theme/daon_product_slide', "gallery", 10, 24); //daontheme_lastest("theme/daon_product_slide", "게시판테이블명", 출력개수, 타이틀길이);
//						?><!--					-->
<!--					</div>-->
<!--					<div class="swiper-scrollbar-wrap1">-->
<!--						<div class="swiper-scrollbar2"></div>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--			</div>-->
<!--		</section>-->
		<script src="<?php echo G5_THEME_URL;?>/html/css_js/g_slide.js"></script>	
		
		

				
		<section id="comm_wrap">
			<div class="board_area">
				<div class="dleft">
					<div class="notice_area">
						<div class="tit">
							<strong>공지사항</strong>
							<p>새로운 소식을 알려드립니다.</p>
						</div>
						<?php 
							$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
							echo daontheme_lastest('theme/daon_simple', "notice", 4, 18);	//daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이); 
						?>								
					</div>	
				</div>
				<div class="dcenter">
					<div class="notice_area">
						<div class="tit">
							<strong>질문과 답변</strong>
							<p>궁금한 점이 있으시면 언제든지 물어보세요.</p>
						</div>
						<?php
							$daon_category = "";		//카테고리명 카테고리를 사용하지 않고 전체 출력하실때는  값을 비웁니다.
							echo daontheme_lastest('theme/daon_simple', "qa", 4, 18);	//daontheme_lastest("theme/daon_simple", "게시판테이블명", 출력개수, 타이틀길이);
						?>
					</div>
				</div>
				<div class="dright">
					<div class="notice_area">	
						<div class="tit">
							<strong>고객센터</strong>
							<p>전화주시면 친절히 상담해드리겠습니다.</p>
						</div>
						<div class="cs_tel">
							<p>010.1234.5678</p>
							<span>평일 : 09시-18시 (토,일,공휴일 휴무)</span>
							<a href="<?php echo get_pretty_url("online")?>" class="btnGo">온라인 상담문의 <span>GO</span></a>
						</div>
					</div>
				</div>
			</div>
		</section>


</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');