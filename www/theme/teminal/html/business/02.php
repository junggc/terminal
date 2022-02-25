<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "사업영역"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "Type02"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); // 공통 상단을 연결합니다.

	
?>


	<div id="sub_tit">
		<div class="path">
			<li><a href="/"><span class="ic-home"><i></i></span></a></li>
			<li><?php echo $tmenu_?></li>
			<?php if($tmenu2_){?><li><?php echo $tmenu2_?></li><?php }?>
			<li><?php echo $g5['title']?></li>
		</div>
		<div class="title"><?php echo $tmenu_?></div>
		<p class="normal_txt">
			홈페이지를 방문해주셔서 감사합니다.
		</p>
	</div>



	<section class="scontents">


		<div class="bg_vline"></div>
		<p class="eng"><em>BUSINESS</em> AREAS</p>
		<p class="stitle">주요사업내역을 안내해드립니다.</p>


		<div class="cross">
		<ul>
			<li class="wow fadeInLeft">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_1.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">건축구조물 해체</h3>
					<p class="cross_txt">
                        최근 건축공사의 화두는 단연 ‘안전’일 것입니다.<br>
                        터미널산업건설은 안전을 최우선 목표로 두고 해체공사에 임하고 있습니다.
					</p>
				</div>

			</li>
			<li class="other_type wow fadeInRight">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_2.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">내부철거공사</h3>
					<p class="cross_txt">
                        터미널산업건설은 지역의 각종 상가 및 특수 목적의 건물의<br>
                        내부 철거를 진행해 왔습니다.<br>
                        각종음식점은 물론, 수영장, 목욕탕, 피트니스센터 등 지역에서<br>
                        의뢰 받은 철거를 안전하고 신속하게 철거해 왔습니다.
					</p>
				</div>
			</li>
			<li class="wow fadeInLeft">
				<div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_3.jpg"></div>
				<div class="cross_right">
					<h3 class="cross_tit">석면철거</h3>
					<p class="cross_txt">
                        전국에서도 85번째 석면철거업 등록 업체로서 지역에서도<br>
                        독보적인 석면철거업체로 활약해 왔습니다.<br>
                        각종상가는 물론 지역의 단독 주택 석면, 창고, 축사 등 어떠한<br>
                        현장에서도 안전하고 신속하게 석면철거를 해오고 있습니다.
					</p>
				</div>

			</li>
            <li class="other_type wow fadeInRight">
                <div class="cross_img"><img src="<?php echo G5_THEME_URL;?>/html/business/image/02_3.jpg"></div>
                <div class="cross_right">
                    <h3 class="cross_tit">부분철거</h3>
                    <p class="cross_txt">
                        건물의 특정부분에 통로나 창문 등을 추가하기 위한 내력벽 부분철거가 가능한 장비를 보유하여, 현장의 소음과 분진을 최소화 하고 있습니다.
                    </p>
                </div>

            </li>
		</ul>
		</div>



	</section>



<?php 
	include_once('tail.php'); //회사소개의 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>