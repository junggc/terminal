<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "사업영역"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "Type01"; //커스텀페이지의 타이틀을 입력합니다.
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


		<div class="business">
		<ul>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_1.jpg" alt="사업영역">
				<strong>건축구조물 해체</strong>
				<span>
					최근 건축공사의 화두는 단연 ‘안전’일 것입니다.<br>
                    터미널산업건설은 안전을 최우선 목표로 두고 해체공사에 임하고 있습니다.<br>
				</span>
				<br>
<!--				<table class="tbl">-->
<!--					<tbody>-->
<!--						<tr>-->
<!--							<th>방식</th>-->
<!--							<td>전후진입형</td>-->
<!--						</tr>					-->
<!--						<tr>-->
<!--							<th>펌프</th>-->
<!--							<td>130 w</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>구동모터</th>-->
<!--							<td>220 V / 400 W</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>탱크</th>-->
<!--							<td>50 L</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>정격 소비전력<br>(히타3Kw 제외시)</th>-->
<!--							<td>1.6Kw</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>제품규격(LxWxH)</th>-->
<!--							<td>850 x 500 x 1,420</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>사용전력</th>-->
<!--							<td>단상 220 V / 60 Hz</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<td colspan="2" style="text-align:center;"><a href="--><?php //echo G5_BBS_URL;?><!--/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>-->
<!--						</tr>-->
<!--					</tbody>-->
<!--				</table>-->
				
			</li>
			<li class="wow fadeInDown">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_2.jpg" alt="사업영역">
				<strong>내부철거공사</strong>
				<span>
					터미널산업건설은 지역의 각종 상가 및 특수 목적의 건물의 내부 철거를 진행해 왔습니다.<br>
					각종음식점은 물론, 수영장, 목욕탕, 피트니스센터 등 지역에서 의뢰 받은 철거를 안전하고 신속하게 철거해 왔습니다.
				</span>
				<br>
<!--				<table class="tbl">-->
<!--					<tbody>-->
<!--						<tr>-->
<!--							<th>방식</th>-->
<!--							<td>전후진입형</td>-->
<!--						</tr>					-->
<!--						<tr>-->
<!--							<th>펌프</th>-->
<!--							<td>130 w</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>구동모터</th>-->
<!--							<td>220 V / 400 W</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>탱크</th>-->
<!--							<td>50 L</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>정격 소비전력<br>(히타3Kw 제외시)</th>-->
<!--							<td>1.6Kw</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>제품규격(LxWxH)</th>-->
<!--							<td>850 x 500 x 1,420</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>사용전력</th>-->
<!--							<td>단상 220 V / 60 Hz</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<td colspan="2" style="text-align:center;"><a href="--><?php //echo G5_BBS_URL;?><!--/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>-->
<!--						</tr>-->
<!--					</tbody>-->
<!--				</table>-->
			</li>
			<li class="wow fadeInUp">
				<img src="<?php echo G5_THEME_URL;?>/html/business/image/01_3.jpg" alt="사업영역">
				<strong>석면철거</strong>
				<span>
					전국에서도 85번째 석면철거업 등록 업체로서 지역에서도 독보적인 석면철거업체로 활약해 왔습니다.<br>
					각종상가는 물론 지역의 단독 주택 석면, 창고, 축사 등 어떠한 현장에서도 안전하고 신속하게 석면철거를 해오고 있습니다.
				</span>
				<br>
<!--				<table class="tbl">-->
<!--					<tbody>-->
<!--						<tr>-->
<!--							<th>방식</th>-->
<!--							<td>전후진입형</td>-->
<!--						</tr>					-->
<!--						<tr>-->
<!--							<th>펌프</th>-->
<!--							<td>130 w</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>구동모터</th>-->
<!--							<td>220 V / 400 W</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>탱크</th>-->
<!--							<td>50 L</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>정격 소비전력<br>(히타3Kw 제외시)</th>-->
<!--							<td>1.6Kw</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>제품규격(LxWxH)</th>-->
<!--							<td>850 x 500 x 1,420</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<th>사용전력</th>-->
<!--							<td>단상 220 V / 60 Hz</td>-->
<!--						</tr>-->
<!--						<tr>-->
<!--							<td colspan="2" style="text-align:center;"><a href="--><?php //echo G5_BBS_URL;?><!--/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>-->
<!--						</tr>-->
<!--					</tbody>-->
<!--				</table>-->
			</li>
            <li class="wow fadeInUp">
                <img src="<?php echo G5_THEME_URL;?>/html/business/image/01_3.jpg" alt="사업영역">
                <strong>부분철거</strong>
                <span>
					건물의 특정부분에 통로나 창문 등을 추가하기 위한 내력벽 부분철거가 가능한 장비를 보유하여, 현장의 소음과 분진을 최소화 하고 있습니다.
				</span>
                <br>
                <!--				<table class="tbl">-->
                <!--					<tbody>-->
                <!--						<tr>-->
                <!--							<th>방식</th>-->
                <!--							<td>전후진입형</td>-->
                <!--						</tr>					-->
                <!--						<tr>-->
                <!--							<th>펌프</th>-->
                <!--							<td>130 w</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<th>구동모터</th>-->
                <!--							<td>220 V / 400 W</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<th>탱크</th>-->
                <!--							<td>50 L</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<th>정격 소비전력<br>(히타3Kw 제외시)</th>-->
                <!--							<td>1.6Kw</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<th>제품규격(LxWxH)</th>-->
                <!--							<td>850 x 500 x 1,420</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<th>사용전력</th>-->
                <!--							<td>단상 220 V / 60 Hz</td>-->
                <!--						</tr>-->
                <!--						<tr>-->
                <!--							<td colspan="2" style="text-align:center;"><a href="--><?php //echo G5_BBS_URL;?><!--/board.php?bo_table=product1"><span class="btn_go">제품바로가기</span></a></td>-->
                <!--						</tr>-->
                <!--					</tbody>-->
                <!--				</table>-->
            </li>
		</ul>
		</div>
		


	</section>



<?php 
	include_once('tail.php'); // 공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>