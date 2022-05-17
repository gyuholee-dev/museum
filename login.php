<?php
   session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>포항시립미술관</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,minimum-scale=1.0">
<link rel="icon" href="image/slogo.png">
<link rel="stylesheet" href="styles/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="scripts/script.js" defer="defer"></script>
<style>
#container .rbox > .body > .inner > .find_idpw ._btn > button:hover {
    text-decoration: underline;
}
button {
    border: 0 none;
    background-color: transparent;
    cursor: pointer;
}
#container > .rbox > .head > .inner > h2, #container > .rbox > .head > .inner > p, #container > .rbox > .head > .inner > a {
    color: #fff;
}

</style>
</head>

<body>

<div id="wrap">
<!-- header -->
<div id="header">
	<div class="header_top">
		<div class="inner">
			<h1 class="logo"><a href="#"><img src="image/logo.png"></a></h1>
			<div class="util_box">
				<ul>
					<li class="login"><a href="login.php"><span class="ico">로그인</span></a></li>
				</ul>
			</div>
			<div class="search_wrap">

                <form name="search_form" id="search_form" method="post" action="Search.php" onsubmit="return searchNew.submitSearch(this); return false;">                    
                    <fieldset>
						<legend class="hide">검색 폼</legend>

                        <input type="text" name="qt" id="searchWord" placeholder="검색어를 입력하세요" title="검색어입력" style="ime-mode: active;"> 
						<button type="submit" class="search_btn"><img src="image/search_btn.png"></button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	 <div id="gnb">
        <div class="submenu_back"></div>
		<div class="inner">
			<h2 class="logo">
				<img src="image/gnb_logo.png" alt="포항시립미술관">
			</h2>
			<ul class="menu">
				<li class="dep1"><a href="p_exh.php" class="dep_btn1">전시</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="e_pre.php">현재전시</a></li>
									<li><a href="e_past.php">과거전시</a></li>
									<li><a href="e_expe.php">예정전시</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="edu01.php" class="dep_btn1">교육</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="edu01.php">어린이·가족</a></li>
									<li><a href="edu02.php">청소년·성인</a></li>
									<li><a href="edu03.php">도슨트</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="c_coll.php" class="dep_btn1">소장품</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="c_coll.php">소장품</a></li>
									<li><a href="c_endow.php">작품기증</a></li>
									<li><a href="c_libr.php">도서</a></li>
									<li><a href="http://poma.pohang.go.kr/poma/p_coll/c_app/index.html" target="_blank" title="[AR 도슨트 투어] 새창으로 화면 이동">AR 도슨트 투어</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="steel_art.php" class="dep_btn1">스틸아트공방</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="steel_art.php">스틸공방</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="cm_noti.php" class="dep_btn1">참여마당</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="cm_noti.php">공지사항</a></li>
									<li><a href="cm_event.php">문화행사소식</a></li>
									<li><a href="cm_qna.php">질문과답변</a></li>
									<li><a href="cm_news.php">장두건미술상</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="g_guide.php" class="dep_btn1">관람안내</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="g_guide.php">관람안내</a></li>
									<li><a href="g_contact.php">오시는길</a></li>
									<li><a href="g_reser.php">단체관람예약</a></li>
									<li><a href="g_facility.php">편의시설</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="i_greeting.php" class="dep_btn1">미술관소개</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="i_greeting.php">인사말</a></li>
									<li><a href="vision.php">정체성·미션</a></li>
									<li><a href="i_intr.php">시설현황</a></li>
									<li><a href="i_organization.php">조직도</a></li>
									<li><a href="i_mi.php">MI소개</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div><!-- header end -->
<div id="container">
	<div class="rbox">
		<div class="head">
			<div class="inner">
				<h2>통합로그인</h2>
				<p class="txt"><span>포항시의 통합회원으로 가입하시면</span><span>포항시가 운영하는 다양한 홈페이지를 하나의 아이디와 한 번의 로그인으로 편리하게 이용하실 수 있습니다.</span></p>
				<p class="cut"></p>
				<a href="https://www.pohang.go.kr/pohang/join.do" class="go_join" title="회원가입 바로가기">회원가입 바로가기</a>
				
				
				












<script type="text/javascript" src="/smart/_TouchEn/cmn/TouchEnNx.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/json2.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/TouchEnNx_config.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/TouchEnNx_exproto.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/TouchEnNx_install.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/TouchEnNx_daemon.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/nxKey/js/TouchEnNxKey_Interface.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/nxKey/js/TouchEnNxKey.js"></script><script type="text/javascript" charset="utf-8" src="/smart/_TouchEn/cmn/TouchEnNx_loader.js"></script>


<script>
	function runTK(){
		if(document.getElementById("securityChk").checked == true){
			TK_Loading();
		}else{
			alert("PC용 보안프로그램 이용여부를 선택한 후 적용을 클릭하십시오.");
		}
	}

	$( document ).ready(function() {
		
		var start = new Date().getTime();
		
		//console.log("keyboard start " + start);
		
		var isMobile = false;		
		var UserAgent = navigator.userAgent;
		
		if (UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null){
			isMobile = true;
		}
		var useKeypad = true;
		if(isMobile && useKeypad){
			
			$("#security_chk").hide();

			if ( $("#userPwd").length > 0 ) {
				if ( $("#isTouchEnKeyPad").length <= 0 ) {
					$("#userPwd").after("<input type='hidden' id='isTouchEnKeyPad' name='isTouchEnKeyPad' value='N'>");
				}
			
				$("#userPwd").parents("form").find(":submit").click(function(){
					mtk.fillEncData();
				});
				$("#userPwd").parents("form").find(":password").each(function(){
					$(this).attr("data-tk-useinput","true");
					$(this).attr("data-tk-kbdType","qwerty");
					$(this).attr("data-tk-dataType","aA@");
					$(this).val("");
				})
				initmTranskey(); // 모바일일 시 함수 실행 필요
				$("#userPwd").parents("form").find(":password").focusin(function(){
					mtk.onKeyboard(this);
					$("#isTouchEnKeyPad").val('Y');
				 });
			}else if( $("#inputUserPwd").length > 0 ){
				if ( $("#isTouchEnKeyPad").length <= 0 ) {
					$("#inputUserPwd").after("<input type='hidden' id='isTouchEnKeyPad' name='isTouchEnKeyPad' value='N'>");
				}
			
				$("#inputUserPwd").parents("form").find(":submit").click(function(){
					mtk.fillEncData();
				});
				$("#inputUserPwd").parents("form").find(":password").each(function(){
					$(this).attr("data-tk-useinput","true");
					$(this).attr("data-tk-kbdType","qwerty");
					$(this).attr("data-tk-dataType","aA@");
					$(this).val("");
				})
				initmTranskey(); // 모바일일 시 함수 실행 필요
				$("#inputUserPwd").parents("form").find(":password").focusin(function(){
					mtk.onKeyboard(this);
					$("#isTouchEnKeyPad").val('Y');
				 });
			}

		}else{
			var userAgentLower = navigator.userAgent.toLowerCase();
			
			var loadmodule = [];
			var isMainLogin = true;
			try{
				if(TouchEnNxConfig.use.nxkey && useTouchEnnxKey){
					if(typeof touchenexInfo != "object") 
						alert("include TouchEnNxKey javascript");
					if(typeof loadmodule[0] != "object") 
						loadmodule[0] = touchenexInfo;
					else loadmodule[loadmodule.length] = touchenexInfo;
				}
				TouchEnNx.useModule = loadmodule;
			}catch(e){}
			 
			TOUCHENEX_CHECK.check(TouchEnNx.useModule, function(result){
				if (result.status) {
					//설치 시 
					$("#security_chk").hide();
					TK_Loading();
				}else{
					//미설치 시
					if(isMainLogin){
						$("#security_chk").show();
					}
				}
				
				var callback = new Date().getTime();
				//console.log("keyboard callback " + (callback - start));
			});
			var end = new Date().getTime();
			//console.log("keyboard end " + (end - start));
		}
	});
</script>


<div id="security_chk" class="security_chk" style="display: none;">
	<p class="txt">PC용 보안프로그램 이용여부를 선택한 후 적용을 클릭하십시오.</p>
	<div class="chk_inp">
	    <div class="inp_wrap">
	        <input type="checkbox" id="securityChk">
	        <label for="securityChk">키보드 보안 프로그램 이용</label>
	    </div>
	    <button class="security_apply_btn" onclick="runTK()">적용</button>
	</div>
	<p class="txt1">※ 위 두 S/W는 PC보호와 키보드 보안을 위하여 설치하는 S/W 입니다. </p>
</div>



				
				<div class="certi_indi">
					<p class="info">통합계정이 없으신가요?<button type="button">도움말 보기</button></p>
					<div class="help_pop exp_sns">
						<button class="close">닫기</button>
						<div class="txt_wrap">
							<p class="tit">계정을 통합하세요.</p>
							<p class="txt">포항시가 운영하는 다양한 홈페이지를 하나의 아이디와 한 번의 로그인으로 편리하게 이용하실 수 있습니다.</p>
						</div>
					</div>
					<h3>개별인증사이트로 이동</h3>
					<div class="sel">
						<div class="select">
							<select name="" id="selectSite" title="개별인증사이트로 이동">
								<option value="">사이트 선택</option>
								<option value="http://www.phsisul.org">포항시설관리공단</option>
								<option value="http://www.phcf.or.kr">포항문화재단</option>
								<option value="https://lifetimeedu.pohang.go.kr">포항평생학습원</option>
								<option value="http://phlib.pohang.go.kr">포항시립도서관</option>
							</select>
						</div>
						<button type="button" onclick="javascript:onGoSite();">선택한 사이트로 이동</button>
						<div class="break"></div>
					</div>
				</div>
			</div>
			
			<!-- <p class="logo"><img src="/smart/images/login/logo_alpha.png" alt="포항시 로고"></p> -->
		</div>
		
		<div class="body"> 
			<div class="type_tab">
				<ul>
					<li class="login_tab active" id="login_tab1"><a href="#type01">아이디</a></li>
				</ul>
			</div>
			
			<div class="inner login innerTab" id="type01">
				<h3>LOGIN</h3>
				<!--<form name = "proc" action = "http://www.pohang.go.kr/pohang/loginCreateToken.do?link=/smart/loginSession.do&redirectLink=http://www.pohang.go.kr:8080/smart/loginAction.do&rtnurl=http://poma.pohang.go.kr/poma/p_comm/cm_noti/" method = "post" onsubmit="return checkLogin()">-->
				<form name="proc" action="https://www.pohang.go.kr/pohang/loginCreateToken.do?link=/smart/loginSession.do&amp;redirectLink=http://poma.pohang.go.kr/&amp;rtnurl=http://poma.pohang.go.kr/poma/p_comm/cm_noti/" method="post" onsubmit="return checkLogin()">
					<div class="_id"><label for="userId">로그인</label><input type="text" name="userId" id="userId" placeholder="아이디" tk_security="true"></div>
					<div class="_pw"><label for="userPwd">비밀번호</label><input type="password" name="userPwd" id="userPwd" placeholder="비밀번호" autocomplete="off" tk_security="true"></div>
					
					<button type="submit">로그인</button>
				<input type="hidden" name="hid_key_data" id="hid_key_data" value="c9278065c4ca7cb3e9abf2b3226b04e540554640a99fbce6dd4861fbaf0cdf39f28998ac154a084d6d8dca8ddc9b254c8b6f4ef3b9c2001ccc1a3b68cda264384b63142ed416e5ab87b354c43ab5f09c6c01b7c06b5d1e054c6fe3d8689ab547ab01c3d0c0b06c1dfa966c0ebd8042c45ee035827b341a02aeb72a163464301b18a045edecd6a8eccd95cf9211490468a73d0528f1db8978af945f2da8eeb8bddb35576ccaa0ce7786347b13860518aa2f0b6be9471aa75bc429219366abc72dd2246d874ee904e24bb4cd1ab58f4287ae8ef63ba87d533620ec17507ccd178567120e62df02286126ed342c127105e4d193de8f8fc6ef05f471da1b8e104cde"><input type="hidden" name="hid_enc_data" id="hid_enc_data" value=""></form>
				<div class="find_idpw"> 
				     <div class="_btn"> 
 				      <button onclick="javascript:location.href='https://www.pohang.go.kr/pohang/login.do?enc=Zm5jdDF8QEB8JTJGbWFpbkxvZ2luJTJGcG9oYW5nJTJGZmluZCUyRmlkLmRvJTNG';" class="_id">아이디 찾기</button>
				      <span class="cut">|</span> 
 				      <button onclick="javascript:location.href='https://www.pohang.go.kr/pohang/login.do?enc=Zm5jdDF8QEB8JTJGbWFpbkxvZ2luJTJGcG9oYW5nJTJGZmluZCUyRnB3LmRvJTNG';" class="_pw">비밀번호 찾기</button>
				    </div>
			    </div>  
			</div>
			
		</div>
	</div>
</div>
<div class="clear"></div>
<div id="footer">
	<div class="footer_nav">
		<div class="inner">
			<ul>
				<li><a href="#">개인정보처리방침</a></li>
				<li><a href="#">이용약관</a></li>
				<li><a href="http://www.pohang.go.kr">포항시청 바로가기</a></li>
                                <li><a href="https://www.facebook.com/POMAmuseum" class="face_book" target="_blank">페이스북</a></li>
                                <li><a href="https://www.instagram.com/poma_museum/" class="instagram" target="_blank">인스타그램</a></li>
                                <li><a href="https://www.youtube.com/channel/UCgLh_YiDKaN38d0rz2akokQ" class="youtube" target="_blank">유튜브</a></li>
			</ul> 
		</div>
	</div>
	<div class="footer_address">
		<div class="inner">
			<a href="#" class="footer_logo"><img src="image/footer_logo.png" alt="하단 로고"></a>
			<div class="address_wrap">
				<ul class="address_list">
					<li class="m_ver">포항시립미술관</li>
					<li>37600 경상북도 포항시 북구 환호공원길 10</li>
					<li class="m_line">TEL 054-270-4700 </li>
					<li>FAX 054-252-0257</li>
				</ul>
				<ul class="time_list">
					<li>4-10월 오전 10시 ~ 오후 7시까지</li>
					<li>11-3월 오전 10시 ~ 오후 6시까지</li>
					<li>매주 월요일 휴관</li>
				</ul>
				<p class="copy">copyright(c) 2012 POMA all right reserved</p>
			</div>
			<div id="topGo" class="home">
				<a href="#" class="top_btn"><img src="image/top_btn.gif" alt="TOP"></a>
			</div>
		</div>
	</div>
</div><!-- //footer -->


<!-- //wrap -->
