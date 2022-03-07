<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php 
	if(!preg_match("/index\.php/",$_SERVER['PHP_SELF']) && $title_view != "no"){ // if문을 수정하지 마십시오.
?>
	</div>
</section>

<?php }?>



	<footer>
		<section id="footer">	
			<div class="copy_warp">
				<!-- <div class="copy_logo"><img src="<?php echo G5_THEME_URL;?>/html/image/top_logo2.png" alt="로고" title="로고"></div> -->

				<ul class="copyright">
					<h4>터미널산업건설</h4>
					<li>대표 : 김종성</li>
					<li>주소 : 전라남도 여수시 오림1길 3</li>
					<li>사업자등록번호 : 000-00-00000</li>
					<br class="txt-block">
					<li>TEL : 02-1234-5678</li>
					<li>FAX : 02-1234-5679</li>
					<li>개인정보책임관리자 : 김종성</li>
					<li>E-MAIL : <a href="mailto:email@email.com">email@email.com</a></li>
					<br class="txt-block">
					<li class="pT15">Copyright 2022 터미널산업건설 All Rights Reserved.</li>
				</ul>

				<div id="copy_info">
					<div class="copy_sns">
					<ul>
						<li class="blog"><a href="#none" target="_blank"><i class="fab fa-blogger-b"></i></a></li>
						<li class="kakao"><a href="#none" target="_blank"><i class="fab fa-kickstarter-k"></i></a></li>
						<li class="facebook"><a href="#none" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li class="instagram"><a href="#none" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
					</div>

					<div class="copy_inquiry">
						<span>빠른상담</span>
						<strong lang="en">02-123-4567</strong>
					</div>

					<div class="family_site">
						<select id="" name="fsSelect">
							<option value="">관련사이트</option>
							<option value="#none">관련사이트1</option>
							<option value="#none">관련사이트2</option>
							<option value="#none">관련사이트3</option>
							<option value="#none">관련사이트4</option>
							<option value="#none">관련사이트5</option>
						</select>
					</div>
				</div>


			</div>
		</section>
	</footer>




	<div class="q-menu" id="backtotop">
		<nav>
			<div><a href="<?php echo G5_URL ?>/index.php"><i class="fa fa-home"></i><span>Home</span></a></div>
			<div><a href="<?php echo G5_THEME_URL;?>/html/company/01.php"><i class="fa fa-building"></i><span>About</span></a></div>
			<div><a href="<?php echo G5_THEME_URL;?>/html/company/04.php"><i class="fas fa-map-marker-alt"></i><span>Location</span></a></div>
			<div><a href="#top"><i class="fa fa-angle-up"></i><span>Top</span></a></div>
		</nav>
	</div>
	<script src="<?php echo G5_THEME_URL;?>/html/css_js/common.js"></script>




    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
	<script>

	$(function() {
		$("#top_btn").on("click", function() {
			$("html, body").animate({scrollTop:0}, '500');
			return false;
		});
	});
	</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");