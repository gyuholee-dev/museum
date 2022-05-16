<?php
   session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>포항시립미술관</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,minimum-scale=1.0">
<link rel="icon" href="image/slogo.png">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="js/script.js" defer="defer"></script>
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
				<h2>전시</h2>
				<ul>
					<li class="cur"><a href="e_pre.php">현재전시</a></li>
					<li class=""><a href="e_past.php">과거전시</a></li>
					<li class=""><a href="e_expe.php">예정전시</a></li>
				</ul>
			</div>
			<!-- lnb -->

			<!-- contents -->
			<div class="contents">
				<!-- sub_visual -->
				<div class="sub_visual"></div>
				<!-- sub_visual -->
				<!-- cont -->
				<div id="cont">
					<div class="location">
						<span class="home">HOME</span>
						<span class="loc1 arrow">전시</span>
						<span class="loc2 arrow">현재전시</span>
					</div>
					<div class="sub_tit">
						<h3>현재전시
<span class="eng">Current Exhibition</span>
						</h3>
					</div>
					<div class="inner">
						<div id="board">

							<div class="bbs_gallery_defalut">
								<ul>
									<li style="width:100%; height:300px; line-height:300px; text-align:center">
									등록된 전시가 없습니다.
									</li>
								</ul>
							</div>

							<div class="btn_wrap alignR">
							</div>

							<div class="paging_wrap">
						        
							</div>

						</div>
					</div>
				</div>
				<!-- cont -->
			</div>
			<!-- contents -->
		</div>
		<!-- sCon -->
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
