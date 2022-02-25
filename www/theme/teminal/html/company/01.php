<?php 	
	include "../../../../common.php";
	
	$tmenu_ = "회사소개"; // theme.menu.php 에서 세팅한 이 페이지의 대메뉴명을 입력합니다.
	$tmenu2_ = ""; //	이 페이지가 3차 메뉴일 경우 theme.menu.php 에서 세팅한 이 페이지의 2차메뉴명을 입력합니다. 3차메뉴가 아니라면 값을 입력하지 않습니다.
	$g5['title'] = "인사말"; //커스텀페이지의 타이틀을 입력합니다.
	$title_view = "no"; //항상 false 로 유지하십시오. 이 라인을 절대 수정,삭제 하지 마십시오.

	include_once(G5_THEME_PATH.'/head.php'); //그누보드의 공통 상단을 연결합니다.
	include_once('header.php'); //공통 상단을 연결합니다.

	
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


	<div class="scontents">


		

		<div class="bg_vline"></div>
		<p class="eng"><em>인 사 말</em></p>
<!--		<p class="stitle">고객을 가장 먼저 생각하는 기업, <br class="sview">고객이 먼저 자랑하는 기업이 되겠습니다.</p>-->

				

		<div class="company">
			<div class="ceo_img"><img src="<?php echo G5_THEME_URL;?>/html/company/image/01.jpg"></div>
			<div class="ceo_txt">
				<h2>
					안녕하십니까?<br>
					터미널산업건설에 오신 것을 진심으로 환영합니다.
				</h2>
				<p>
					<strong class="point_b1">여수지역과 함께 성장해온 터미널산업건설이, 여수지역의 안전한 철거공사를 선도하겠습니다. </strong>

                    2008년 창사 이래로 건축구조물해제와 석면해체제거업을 주 사업으로 하여 지역과 함께 성장해 왔습니다.<br>
                    특히 석면해체제거는 전국에서도 이른 시기에 시작하여 지역의 각종 석면 철거 현장에서 안전하고 신속한 석면철거 문화를 선도해 왔습니다.<br>
                    또한 지역의 수많은 건축물해체 현장에서 활동하면서 5층이상의 고층 건축물은 물론 다세대 주택의 중앙난방 연소탑과 같은 특수구조 건축물의 철거 등 지역의 각종 철거현장에서 신속하고 안전한 철거 문화를 선도해 왔습니다.<br>
                    최근에는 고객의 다양한 needs에 대응하기 위해서 조용하고 안전하고 신속하게 부분철거를 할 수 있는 장비를 도입하여 병원등의 부분철거 현장에 대응하고 있습니다.<br>

				</p>
				<p>
                    앞으로도 지역의 안전한 철거 문화를 선도하는 업체로서 지역과 함께 성장하는 터미널산업건설이 되겠습니다.<br>
					감사합니다.
				</p>
				<p class="ceo_sign">터미널산업건설 대표 <b>김 종 성</b></p>
			</div>

			<div class="summary">
				<div class="con_arrow">회사개요</div>
				<div class="lview">
					<table class="tbl_type1">
					<colgroup>
						<col width="15%" />
						<col width="35%" />
						<col width="15%" />
						<col width="35%" />
					</colgroup>

					<tbody>
					<tr>
						<th>회사명</th>
						<td>터미널산업건설</td>
						<th>대표</th>
						<td>김종성</td>
					</tr>
					<tr>
						<th>설립일</th>
						<td>2008년</td>
						<th>사업영역</th>
						<td>건축물구조 해체, 내부철거공사, 석면철거, 부분철거</td>
					</tr>
<!--					<tr>-->
<!--						<th>사업장규모</th>-->
<!--						<td>대지 00평 / 건평 00평</td>-->
<!--						<th>주거래처</th>-->
<!--						<td>(주)</td>-->
<!--					</tr>-->
					</tbody>
					</table>
				</div>
				<div class="sview">
					<table class="tbl_type1">
					<colgroup>
						<col width="30%" />
						<col width="70%" />
					</colgroup>

					<tbody>
					<tr>
						<th>회사명</th>
						<td>다온테마</td>
					</tr>
					<tr>
						<th>대표</th>
						<td>홍길동</td>
					</tr>
					<tr>
						<th>설립일</th>
						<td>2010년</td>
					</tr>
					<tr>
						<th>사업영역</th>
						<td></td>
					</tr>
					<tr>
						<th>사업장규모</th>
						<td>대지 00평 / 건평 00평</td>
					</tr>
					<tr>
						<th>주거래처</th>
						<td>(주)</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>



		
		</div>



	</div>

<?php 
	include_once('tail.php'); //공통 하단을 연결합니다.
	include_once(G5_THEME_PATH.'/tail.php'); //그누보드의 공통 상단을 연결합니다.
?>