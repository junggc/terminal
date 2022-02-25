<?php
/**************************************
	
	메뉴설정 설명입니다.
	메뉴설정은 2가지로 선택이 가능합니다.

	1. 관리자모드의 메뉴설정 사용	: $daon_admin_menu = true; 로 설정 단, 큰타이틀 하단의 짧은 설명문구 는 사용이 불가능합니다.		
		1-1. 관리자모드 > 메뉴관리가 미등록 상태라면 다온테마 데모의 메뉴가 관리자모드에 자동으로 등록됩니다.
		1-2. 만약 관리자모드 > 메뉴관리가 이미 등록된 상태라면 그대로 유지합니다.

	2. 직접설정						: $daon_admin_menu = false; 로 설정 후 아래쪽의 메뉴설정대로 입력

	3. 게시판은 직접 생성하셔야 합니다. ( 관리자모드 > 게시판관리 /adm/board_list.php )


	자주하시는질문(FAQ) 과 게시판의 타이틀은 head.php 에서 재정비 합니다.  
	head.php 에서 " 게시판, faq, 회원관련 등 그누보드 내부 프로그램 페이지 상단연결 " 로 검색하세요.
	

	짧은주소 사용안내(그누보드 5.4용 이하버전 지원안됨)
	
	1. 짧은주소 사용은 관리자 모드에서 설정이 가능합니다. (관리자모드 > 기본환경설정 : /adm/config_form.php#anc_cf_url )	
		짧은주소는 내용관리에서 등록한 페이지와 게시판에 한해 적용됩니다.
		짧은주소는 테마디자인과 상관이 없는 그누보드 고유 기능으로 서버에 따라 직접 설정하셔야 할 수 있으며,(관리자모드 > 기본환경설정에  안내되어 있음)
		100% 적용을 확신할 수 없으며, 무료, 유료 수정 지원대상이 아닙니다.

	2. 설정된 짧은주소는 관리자모드 게시판관리에서 게시판 코드를 누르시거나, 내용관리 페이지에서 보기 버튼을 누르시면 주소 확인이 가능합니다.
	    FTP를 통해 직접 작업하시는 커스텀 페이지는  theme.shorturl.php 에서 세팅합니다.
	
	3. 메뉴세팅을 짧은주소가 아닌 기존 긴주소로 세팅하시더라도, 짧은주소를 설정하면 자동으로 메뉴 링크가 짧은주소로 변경됩니다. 
		3-1. 예외사항
			3-1-1. 커스텀페이지는 자동변환되지 않으므로, 변환된 짧은주소로 세팅하셔야 합니다. ( theme.shorturl.php 로 세팅및확인 )
			3-1-2. 내용관리에서 등록한 페이지와 게시판에 한해 자동 변경됩니다.	

**************************************/


$daon_admin_menu = false; //관리자모드의 메뉴관리를 사용하시려면 true 로, 아니면 false로 변경하세요. 
$second_menu_view = true; //2차메뉴가 필요없으시면 false 로 바꾸세요.	false 로 설정하시면 2차메뉴가 세팅되어 있어도 출력되지 않으며, 2차메뉴 삭제로 인해 전체 css파일에서 메뉴 배경과 높이를 조정하셔야 합니다.(전체css파일명은 설명서 pdf 파일에서 확인가능)
$third_menu_view = true;		//3차메뉴가 필요없으시면 false 로 바꾸세요. false 로 설정하시면 3차메뉴가 세팅되어 있어도 출력되지 않습니다.
$member_menu_view = true;	// 비회원 홈페이지로 운영하여 회원관련 메뉴가 필요없으시면 false 로 바꾸세요. false 로 설정하시면 대체메뉴가 나타납니다.

$first_menu = array(); $first_menu_target = array(); $first_menu_so_title = array();
$second_menu = array(); $second_menu_target = array(); $second_menu_so_title = array();
$third_menu = array(); $third_menu_target = array(); $third_menu_so_title = array();



/*
	메뉴직접설정 예제

	1차 메뉴는 아래와 같이 입력합니다.

	$first_menu["1차메뉴명"] = "링크주소";
	$first_menu_target["1차메뉴명"] = "타겟";
	$first_menu_so_title["1차메뉴명"] = "서브페이지 타이틀 아래 문구입니다.";


		2차 메뉴는 아래와 같이 입력합니다.
		
		$second_menu["1차메뉴명"]["2차메뉴명"] = "링크주소";
		$second_menu_target["1차메뉴명"]["2차메뉴명"] = "타겟";
		$second_menu_so_title["1차메뉴명"]["2차메뉴명"] = "서브페이지 타이틀 아래 문구입니다.";


			3차 메뉴는 아래와 같이 입력합니다.
			
			$third_menu["1차메뉴명"]["2차메뉴명"]["3차메뉴명"] = "링크주소";
			$third_menu_target["1차메뉴명"]["2차메뉴명"]["3차메뉴명"] = "타겟";
			$third_menu_so_title["1차메뉴명"]["2차메뉴명"]["3차메뉴명"] = "서브페이지 타이틀 아래 문구입니다.";

	------------------------------------------------------------------------------------------------

	ex)	회사소개 > 인사말 > CEO메세지		를 세팅한다면

	1차메뉴 설정($first_menu)
	
		$first_menu["회사소개"] = G5_THEME_URL."/html/company/01.php";
		$first_menu_target["회사소개"] = "_self";
		$first_menu_so_title["회사소개"] = "서브페이지 타이틀 아래 문구입니다.";	

	
		2차메뉴 설정($second_menu)

			$second_menu["회사소개"]["인사말"] = G5_THEME_URL."/html/company/01.php";
			$second_menu_target["회사소개"]["인사말"] = "_self";
			$second_menu_so_title["회사소개"]["인사말"] = "서브페이지 타이틀 아래 문구입니다.";	
			

			3차메뉴 설정($third_menu)

			$third_menu["회사소개"]["인사말"]["CEO메세지"] = G5_THEME_URL."/html/company/01.php";
			$third_menu_target["회사소개"]["인사말"]["CEO메세지"] = "_self";
			$second_menu_so_title["회사소개"]["인사말"]["CEO메세지"] = "서브페이지 타이틀 아래 문구입니다.";	


	G5_THEME_URL : 관리자모드에서 선택한 테마의 기본경로
	G5_BBS_URL : 선택한 테마에 맞는 게시판 경로		

*/




//1차 대메뉴
$first_menu["회사소개"] = G5_THEME_URL."/html/company/01.php";
$first_menu_target["회사소개"] = "_self";
$first_menu_so_title["회사소개"] = "";	//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$first_menu["사업영역"] = G5_THEME_URL."/html/business/01.php";
$first_menu_target["사업영역"] = "_self";
$first_menu_so_title["사업영역"] = "";	//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$first_menu["제품소개"] = G5_BBS_URL."/board.php?bo_table=product1";
$first_menu_target["제품소개"] = "_self";
$first_menu_so_title["제품소개"] = "보다 발전된 기술로 보다 정교한 제품을 생산합니다.";

$first_menu["온라인문의"] = G5_BBS_URL."/board.php?bo_table=online";
$first_menu_target["온라인문의"] = "_self";
$first_menu_so_title["온라인문의"] = "질문주시면 빠른 시간내에 피드백드리겠습니다.";	

$first_menu["고객센터"] = G5_BBS_URL."/board.php?bo_table=notice";
$first_menu_target["고객센터"] = "_self";
$first_menu_so_title["고객센터"] = "새로운 소식을 알려드립니다.";
	
	

//2차 와 3차 메뉴 입력
/***			회사소개			***********************************************************************/
$second_menu["회사소개"]["인사말"] = G5_THEME_URL."/html/company/01.php";
$second_menu_target["회사소개"]["인사말"] = "_self";
$second_menu_so_title["회사소개"]["인사말"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["회사소개"]["연혁"] = G5_THEME_URL."/html/company/02.php";
$second_menu_target["회사소개"]["연혁"] = "_self";
$second_menu_so_title["회사소개"]["연혁"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["회사소개"]["비전"] = G5_THEME_URL."/html/company/03.php";
$second_menu_target["회사소개"]["비전"] = "_self";
$second_menu_so_title["회사소개"]["비전"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["회사소개"]["인증서"] =  G5_BBS_URL."/board.php?bo_table=cer";
$second_menu_target["회사소개"]["인증서"] = "_self";
$second_menu_so_title["회사소개"]["인증서"] = "인증받은 기술력으로 더욱 앞서겠습니다";

$second_menu["회사소개"]["오시는 길"] = G5_THEME_URL."/html/company/04.php";
$second_menu_target["회사소개"]["오시는 길"] = "_self";
$second_menu_so_title["회사소개"]["오시는 길"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["회사소개"]["테마전체보기"] = "/index.html";
$second_menu_target["회사소개"]["테마전체보기"] = "_blank";
$second_menu_so_title["회사소개"]["테마전체보기"] = "";


	/***			회사소개 > 인사말 에 대한 3차메뉴			***********************************************************************/				
	$third_menu["회사소개"]["인사말"]["3차메뉴페이지1"] = G5_THEME_URL."/html/company/01_1.php";
	$third_menu_target["회사소개"]["인사말"]["3차메뉴페이지1"] = "_self";
	$third_menu_so_title["회사소개"]["인사말"]["3차메뉴페이지1"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

	$third_menu["회사소개"]["인사말"]["3차메뉴페이지2"] = G5_THEME_URL."/html/company/01_2.php";
	$third_menu_target["회사소개"]["인사말"]["3차메뉴페이지2"] = "_self";
	$third_menu_so_title["회사소개"]["인사말"]["3차메뉴페이지2"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

	$third_menu["회사소개"]["인사말"]["3차메뉴페이지3_새창"] = "/index.html";
	$third_menu_target["회사소개"]["인사말"]["3차메뉴페이지3_새창"] = "_blank";
	$third_menu_so_title["회사소개"]["인사말"]["3차메뉴페이지3_새창"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.


	/***			회사소개 > 인사말 에 대한 3차메뉴			***********************************************************************/	
	$third_menu["회사소개"]["연혁"]["연혁메뉴1"] = G5_THEME_URL."/html/company/02_1.php";
	$third_menu_target["회사소개"]["연혁"]["연혁메뉴1"] = "_self";
	$third_menu_so_title["회사소개"]["연혁"]["연혁메뉴1"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

	$third_menu["회사소개"]["연혁"]["연혁메뉴2"] = G5_THEME_URL."/html/company/02_2.php";
	$third_menu_target["회사소개"]["연혁"]["연혁메뉴2"] = "_self";
	$third_menu_so_title["회사소개"]["연혁"]["연혁메뉴2"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.


	

/***			사업영역			***********************************************************************/
$second_menu["사업영역"]["Type01"] = G5_THEME_URL."/html/business/01.php";
$second_menu_target["사업영역"]["Type01"] = "_self";
$second_menu_so_title["사업영역"]["Type01"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.

$second_menu["사업영역"]["Type02"] = G5_THEME_URL."/html/business/02.php";
$second_menu_target["사업영역"]["Type02"] = "_self";
$second_menu_so_title["사업영역"]["Type02"] = "";//커스텀 웹페이지는 해당 페이지내에 직접 입력합니다.




/***			제품소개			***********************************************************************/
$second_menu["제품소개"]["갤러리형"] = G5_BBS_URL."/board.php?bo_table=product1";
$second_menu_target["제품소개"]["갤러리형"] = "_self";
$second_menu_so_title["제품소개"]["갤러리형"] = "보다 발전된 기술로 보다 정교한 제품을 생산합니다.";

$second_menu["제품소개"]["리스트형"] = G5_BBS_URL."/board.php?bo_table=product2";
$second_menu_target["제품소개"]["리스트형"] = "_self";
$second_menu_so_title["제품소개"]["리스트형"] = "보다 발전된 기술로 보다 정교한 제품을 생산합니다.";

$second_menu["제품소개"]["웹진형"] = G5_BBS_URL."/board.php?bo_table=webzine";
$second_menu_target["제품소개"]["웹진형"] = "_self";
$second_menu_so_title["제품소개"]["웹진형"] = "보다 발전된 기술로 보다 정교한 제품을 생산합니다.";

$second_menu["제품소개"]["갤러리형_메이슨리"] = G5_BBS_URL."/board.php?bo_table=masonry1";
$second_menu_target["제품소개"]["갤러리형_메이슨리"] = "_self";
$second_menu_so_title["제품소개"]["갤러리형_메이슨리"] = "보다 발전된 기술로 보다 정교한 제품을 생산합니다.";


	/***			제품소개 > 갤러리형 에 대한 3차메뉴	 : 게시판을 만드실때 설정한 카테고리를 3차메뉴로 사용할 수 있습니다. ***********************************************************************/				
	$third_menu["제품소개"]["갤러리형"]["홈페이지"] = G5_BBS_URL."/board.php?bo_table=product1&sca=홈페이지";
	$third_menu_target["제품소개"]["갤러리형"]["홈페이지"] = "_self";
	$third_menu_so_title["제품소개"]["갤러리형"]["홈페이지"] = "홈페이지 제품입니다.";

	$third_menu["제품소개"]["갤러리형"]["쇼핑몰"] = G5_BBS_URL."/board.php?bo_table=product1&sca=쇼핑몰";
	$third_menu_target["제품소개"]["갤러리형"]["쇼핑몰"] = "_self";
	$third_menu_so_title["제품소개"]["갤러리형"]["쇼핑몰"] =  "쇼핑몰 제품입니다.";

	$third_menu["제품소개"]["갤러리형"]["웹컨텐츠"] = G5_BBS_URL."/board.php?bo_table=product1&sca=웹컨텐츠";
	$third_menu_target["제품소개"]["갤러리형"]["웹컨텐츠"] = "_self";
	$third_menu_so_title["제품소개"]["갤러리형"]["웹컨텐츠"] =  "웹컨텐츠 제품입니다.";




/***			온라인문의			***********************************************************************/
$second_menu["온라인문의"]["비회원문의"] = G5_BBS_URL."/board.php?bo_table=online";
$second_menu_target["온라인문의"]["비회원문의"] = "_self";
$second_menu_so_title["온라인문의"]["비회원문의"] = "질문주시면 빠른 시간내에 피드백드리겠습니다.";

$second_menu["온라인문의"]["1:1문의"] = G5_BBS_URL."/qalist.php";
$second_menu_target["온라인문의"]["1:1문의"] = "_self";
$second_menu_so_title["온라인문의"]["1:1문의"] = "질문주시면 빠른 시간내에 피드백드리겠습니다.";




/***			고객센터			***********************************************************************/
$second_menu["고객센터"]["공지사항"] = G5_BBS_URL."/board.php?bo_table=notice";
$second_menu_target["고객센터"]["공지사항"] = "_self";
$second_menu_so_title["고객센터"]["공지사항"] = "새로운 소식을 알려드립니다.";

$second_menu["고객센터"]["질문과답변"] = G5_BBS_URL."/board.php?bo_table=qa";
$second_menu_target["고객센터"]["질문과답변"] = "_self";
$second_menu_so_title["고객센터"]["질문과답변"] = "궁금하신 점은 언제든지 문의주세요.";

$second_menu["고객센터"]["유투브동영상"] = G5_BBS_URL."/board.php?bo_table=youtube";
$second_menu_target["고객센터"]["유투브동영상"] = "_self";
$second_menu_so_title["고객센터"]["유투브동영상"] = "다양한 소식을 동영상으로 만나보세요.";

$second_menu["고객센터"]["갤러리"] = G5_BBS_URL."/board.php?bo_table=gallery";
$second_menu_target["고객센터"]["갤러리"] = "_self";
$second_menu_so_title["고객센터"]["갤러리"] = "다양한 소식을 이미지로 만나보세요.";

$second_menu["고객센터"]["통합검색"] = G5_BBS_URL."/search.php";
$second_menu_target["고객센터"]["통합검색"] = "_self";
$second_menu_so_title["고객센터"]["통합검색"] = "키워드를 입력하시면 검색이 가능합니다.";

$second_menu["고객센터"]["자주하시는질문"] = G5_BBS_URL."/faq.php";
$second_menu_target["고객센터"]["자주하시는질문"] = "_self";
$second_menu_so_title["고객센터"]["자주하시는질문"] = "자주하시는 질문만 모았습니다.";


	/***			고객센터 > 공지사항 에 대한 3차메뉴      ***********************************************************************/				
	$third_menu["고객센터"]["공지사항"]["회사공지"] = G5_BBS_URL."/board.php?bo_table=notice1";
	$third_menu_target["고객센터"]["공지사항"]["회사공지"] = "_self";
	$third_menu_so_title["고객센터"]["공지사항"]["회사공지"] = "회사 공지사항입니다";

	$third_menu["고객센터"]["공지사항"]["업체공지"] = G5_BBS_URL."/board.php?bo_table=notice2";
	$third_menu_target["고객센터"]["공지사항"]["업체공지"] = "_self";
	$third_menu_so_title["고객센터"]["공지사항"]["업체공지"] =  "업체 공지사항입니다.";


		



//여기서부터 수정,삭제하지 마십시오.
if($daon_admin_menu == true){	
	unset($first_menu, $first_menu_target, $first_menu_so_title);
	unset($second_menu, $second_menu_target, $second_menu_so_title);
	unset($third_menu, $third_menu_target, $third_menu_so_title);

	$sql = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '2' order by me_order, me_id ";
	$result = sql_query($sql, false);
	$first_menu = array();
	$first_menu_target = array();
	$second_menu = array();
	$second_menu_target = array();

	for ($i=0; $row=sql_fetch_array($result); $i++) {
		$first_menu[$row['me_name']] = $row['me_link'];
		$first_menu_target[$row['me_name']] = "_".$row['me_target'];

		$sql2 = " select * from {$g5['menu_table']} where me_use = '1' and length(me_code) = '4' and substring(me_code, 1, 2) = '{$row['me_code']}' order by me_order, me_id ";
		$result2 = sql_query($sql2);
		for ($k=0; $row2=sql_fetch_array($result2); $k++) {
			
			$second_menu[$row['me_name']][$row2['me_name']] = $row2['me_link'];
			$second_menu_target[$row['me_name']][$row2['me_name']] = "_".$row2['me_target'];
			
		}
	}	
}
//여기까지 수정,삭제하지 마십시오.



/***			회원			***********************************************************************/
if ($is_member) {
	
	$second_menu["맴버쉽"]["로그아웃"] = G5_BBS_URL."/logout.php";
	$second_menu_target["맴버쉽"]["로그아웃"] = "_self";
	$second_menu_so_title["맴버쉽"]["로그아웃"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["정보수정"] = G5_BBS_URL."/member_confirm.php?url=".G5_BBS_URL."/register_form.php";
	$second_menu_target["맴버쉽"]["정보수정"] = "_self";
	$second_menu_so_title["맴버쉽"]["정보수정"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["개인정보처리방침"] = G5_BBS_URL."/content.php?co_id=privacy";
	$second_menu_target["맴버쉽"]["개인정보처리방침"] = "_self";
	$second_menu_so_title["맴버쉽"]["개인정보처리방침"] = "개인정보처리방침을 준수합니다.";

	$second_menu["맴버쉽"]["서비스 이용약관"] = G5_BBS_URL."/content.php?co_id=provision";
	$second_menu_target["맴버쉽"]["서비스 이용약관"] = "_self";
	$second_menu_so_title["맴버쉽"]["서비스 이용약관"] = "서비스 이용약관을 준수합니다.";

	$second_menu["맴버쉽"]["회원탈퇴"] = G5_BBS_URL."/member_confirm.php?url=".G5_BBS_URL."/member_leave.php";
	$second_menu_target["맴버쉽"]["회원탈퇴"] = "_self";
	$second_menu_so_title["맴버쉽"]["회원탈퇴"] = "회원서비스입니다.";

}else{

	$second_menu["맴버쉽"]["로그인"] = G5_BBS_URL."/login.php";
	$second_menu_target["맴버쉽"]["로그인"] = "_self";
	$second_menu_so_title["맴버쉽"]["로그인"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["회원가입"] = G5_BBS_URL."/register.php";
	$second_menu_target["맴버쉽"]["회원가입"] = "_self";
	$second_menu_so_title["맴버쉽"]["회원가입"] = "회원서비스입니다.";

	$second_menu["맴버쉽"]["개인정보처리방침"] = G5_BBS_URL."/content.php?co_id=privacy";
	$second_menu_target["맴버쉽"]["개인정보처리방침"] = "_self";
	$second_menu_so_title["맴버쉽"]["개인정보처리방침"] = "개인정보처리방침을 준수합니다.";

	$second_menu["맴버쉽"]["서비스 이용약관"] = G5_BBS_URL."/content.php?co_id=provision";
	$second_menu_target["맴버쉽"]["서비스 이용약관"] = "_self";
	$second_menu_so_title["맴버쉽"]["서비스 이용약관"] = "서비스 이용약관을 준수합니다.";	

}