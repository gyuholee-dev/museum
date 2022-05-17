<?php
   session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>포항시립미술관</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,minimum-scale=1.0">
<link rel="icon" href="images/slogo.png">
<link rel="stylesheet" href="styles/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="scripts/script.js" defer="defer"></script>
</head>

<body>

<div id="wrap">
<!-- header -->
<div id="header">
	<div class="header_top">
		<div class="inner">
			<h1 class="logo"><a href="#"><img src="images/logo.png"></a></h1>
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
						<button type="submit" class="search_btn"><img src="images/search_btn.png"></button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	 <div id="gnb">
        <div class="submenu_back"></div>
		<div class="inner">
			<h2 class="logo">
				<img src="images/gnb_logo.png" alt="포항시립미술관">
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
									<li><a href="/poma/p_edu/edu01/">어린이·가족</a></li>
									<li><a href="/poma/p_edu/edu02/">청소년·성인</a></li>
									<li><a href="/poma/p_edu/edu03/">도슨트</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="/poma/p_coll/c_coll/" class="dep_btn1">소장품</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="/poma/p_coll/c_coll/">소장품</a></li>
									<li><a href="/poma/p_coll/c_endow/">작품기증</a></li>
									<li><a href="/poma/p_coll/c_libr/">도서</a></li>
									<li><a href="http://poma.pohang.go.kr/poma/p_coll/c_app/index.html" target="_blank" title="[AR 도슨트 투어] 새창으로 화면 이동">AR 도슨트 투어</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="/poma/p_ste/steel_art/" class="dep_btn1">스틸아트공방</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="/poma/p_ste/steel_art/">스틸공방</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="/poma/p_comm/cm_noti/" class="dep_btn1">참여마당</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="/poma/p_comm/cm_noti/">공지사항</a></li>
									<li><a href="/poma/p_comm/cm_event/">문화행사소식</a></li>
									<li><a href="/poma/p_comm/cm_qna/">질문과답변</a></li>
									<li><a href="/poma/p_comm/cm_news/">장두건미술상</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="/poma/p_guid/g_guide/" class="dep_btn1">관람안내</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="/poma/p_guid/g_guide/">관람안내</a></li>
									<li><a href="/poma/p_guid/g_contact/">오시는길</a></li>
									<li><a href="/poma/p_guid/g_reser/?mode=write&amp;tm=1652400984">단체관람예약</a></li>
									<li><a href="/poma/p_guid/g_facility/">편의시설</a></li>
						</ul>
					</div>
				</li>
				<li class="dep1"><a href="/poma/p_intr/i_greeting/" class="dep_btn1">미술관소개</a>
					<div class="sub">
						<ul class="gnb_sub">
									<li><a href="/poma/p_intr/i_greeting/">인사말</a></li>
									<li><a href="/poma/p_intr/vision/">정체성·미션</a></li>
									<li><a href="/poma/p_intr/i_intr/">시설현황</a></li>
									<li><a href="/poma/p_intr/i_organization/">조직도</a></li>
									<li><a href="/poma/p_intr/i_mi/">MI소개</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div><!-- header end -->
<div id="container" class="sub">
	<!-- sCon -->
	<div id="sCon">
		<!-- lnb -->
		<div id="lnb">
			<h2>미술관소개</h2>
			<ul>
				<li class="cur"><a href="/poma/p_intr/i_greeting/">인사말</a></li>
				<li class=""><a href="/poma/p_intr/vision/">정체성·미션</a></li>
				<li class=""><a href="/poma/p_intr/i_intr/">시설현황</a></li>
				<li class=""><a href="/poma/p_intr/i_organization/">조직도</a></li>
				<li class=""><a href="/poma/p_intr/i_mi/">MI소개</a></li>
			</ul>
		</div>
		<!-- lnb -->

		<!-- contents -->
		<div class="contents">
			<!-- sub_visual -->
			<div class="sub_visual sub07"></div>
			<!-- sub_visual -->

			<!-- cont -->
			<div id="cont">
				<div class="location">
					<span class="home">HOME</span>
					<span class="loc1 arrow">미술관소개</span>
					<span class="loc2 arrow">인사말</span>
				</div>
				<div class="sub_tit">
					<h3 id="CIee5b2d6927f9e5b6b54ed3baa81d9f18">인사말 <span class="eng">Greeting</span></h3>
				</div>

				<!-- inner -->
				<div class="inner">

                    <div class="text_wrap greeting_wrap">
			<p>영일만과 포항시가지가 한눈에 내려다보이는 공원 속에 자리 잡은 포항시립미술관은 2009년 12월 22일 개관하였습니다. 우리 미술관은 포항문화의 근간인 Steel을 테마로 Steel Art 컬렉션과 전시기획에 주력하고 있습니다.</p>
			
			<p>예술의 고유한 속성이라 여겨왔던 창의성이 지식기반사회의 화두로 떠오르고 있는 지금, 포항시립미술관은 다양한 프로그램으로 예술적 가치의 확산을 위한 환경과 생태를 조성하고, 예술의 창조, 교류, 순환하는 과정을 매개하는 길잡이로서 그 역할을 해나가겠습니다.</p>
			
			<p>미술관이 있어 행복한 도시 포항, 창조적(creative)이고 친근(friendly)하며 밝고(bright) 생동감 넘치는(convivial) 포항, 포항시립미술관은 모두의 친구(Partner)가 되기를 소망합니다.</p>
			

			<p class="alignR">포항시립미술관장<img src="images/greeting_sign.gif" alt="" class="sign"></p>
                     </div>

		
	</div>
	</div>
	</div>
	</div>
	<!-- //contents -->
<div class="steelArt_wrap">
	<a href="http://phsaf.co.kr/?ckattempt=1">포항스틸아트페스티벌</a>
</div>
</div>

<div class="steelArt_wrap">
	<a href="http://phsaf.co.kr/?ckattempt=1">포항스틸아트페스티벌</a>
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
			<a href="#" class="footer_logo"><img src="images/footer_logo.png" alt="하단 로고"></a>
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
				<a href="#" class="top_btn"><img src="images/top_btn.gif" alt="TOP"></a>
			</div>
		</div>
	</div>
</div><!-- //footer -->


<!-- //wrap -->
