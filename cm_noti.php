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
			<h2>참여마당</h2>
			<ul>
            <li><a href="cm_noti.php">공지사항</a></li>
            <li><a href="cm_event.php">문화행사소식</a></li>
            <li><a href="cm_qna.php">질문과답변</a></li>
            <li><a href="cm_news.php">장두건미술상</a></li>
			</ul>
		</div>
		<!-- lnb -->

		<!-- contents -->
		<div class="contents">
			<!-- sub_visual -->
			<div class="sub_visual sub08"></div>
			<!-- sub_visual -->
			<!-- cont -->
			<div id="cont">
				<div class="location">
					<span class="home">HOME</span>
					<span class="loc1 arrow">참여마당</span>
					<span class="loc2 arrow">공지사항</span>
				</div>
				<div class="sub_tit">
					<h3>공지사항
 <span class="eng">Notice</span>
					</h3>
				</div>
				<div class="inner">

<div id="board">

	<div class="bbs_search">
		<form name="searchForm" id="searchForm" method="get" onsubmit="return IvyBoard.searchCheckIt( this );">
            <input type="hidden" name="boardTheme" value="common">
            <input type="hidden" name="cate1" value="">
			<fieldset>
				<legend class="hide">게시물 검색 폼</legend>
				<select name="st" id="st">
					<option value="tc">제목+내용</option>
					<option value="title">제목</option>
					<option value="cont">내용</option>
					<option value="name">글쓴이</option>
				</select>
				<label for="skw" class="hide">검색어를 입력하세요</label>
				<input type="text" class="search_keyword" name="skw" id="skw" title="검색어입력" value="">
				<button type="submit">검색</button>
			</fieldset>
		</form>
	</div>

	<div class="bbs_list_defalut">
		<table class="bbs_list_table">
			<caption>게시판 리스트 목록</caption>
			<thead>
				<tr>
					<th scope="col" class="number web_show">번호</th>
					<th scope="col" class="subject">제목</th>
					<th scope="col" class="writer web_show">글쓴이</th>
					<th scope="col" class="date web_show">날짜</th>
					<th scope="col" class="hits web_show">조회</th>
				</tr>
			</thead>
			<tbody>




				<tr class="toptr">
					<td class="number web_show notice">공지</td>
					<td class="subject notice">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=894&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 기록물관리전문가 선발 공고">2022년 포항시립미술관 기록물관리전문가 선발 공고</a>					</td>
					<td class="writer web_show">
							최서영
					</td>
					<td class="date web_show">22.05.09</td>
					<td class="hits web_show">156</td>
				</tr>



				<tr>
					<td class="number web_show ">287</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=893&amp;page=1" class="Ellipsis" title="휴관 및 다음 전시 안내">휴관 및 다음 전시 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.05.06</td>
					<td class="hits web_show">202</td>
				</tr>



				<tr>
					<td class="number web_show ">286</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=892&amp;page=1" class="Ellipsis" title="2022년 제18회 포항시 장두건미술상 공모">2022년 제18회 포항시 장두건미술상 공모</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.03.07</td>
					<td class="hits web_show">608</td>
				</tr>




				<tr>
					<td class="number web_show ">285</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=890&amp;page=1" class="Ellipsis" title="2022년 포항스틸아트공방 기간제근로자（인턴） 최종합격자 안내">2022년 포항스틸아트공방 기간제근로자（인턴） 최종합격자 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.02.24</td>
					<td class="hits web_show">324</td>
				</tr>



				<tr>
					<td class="number web_show ">284</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=889&amp;page=1" class="Ellipsis" title="2022년 포항스틸아트공방 기간제근로자（인턴） 서류전형 결과 및 면접 안내">2022년 포항스틸아트공방 기간제근로자（인턴） 서류전형 결과 및 면접 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.02.23</td>
					<td class="hits web_show">194</td>
				</tr>



				<tr>
					<td class="number web_show ">283</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=888&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 기간제근로자（스틸아트공방） 채용 공고">2022년 포항시립미술관 기간제근로자（스틸아트공방） 채용 공고</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.02.11</td>
					<td class="hits web_show">336</td>
				</tr>



				<tr>
					<td class="number web_show ">282</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=887&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 소장품 구입 공고（기간연장）">2022년 포항시립미술관 소장품 구입 공고（기간연장）</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.02.11</td>
					<td class="hits web_show">440</td>
				</tr>


				<tr>
					<td class="number web_show ">281</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=886&amp;page=1" class="Ellipsis" title="포항시립미술관 시설 방역 안내">포항시립미술관 시설 방역 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.02.11</td>
					<td class="hits web_show">141</td>
				</tr>



				<tr>
					<td class="number web_show ">280</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=885&amp;page=1" class="Ellipsis" title="포항시립미술관 설 연휴 운영 안내">포항시립미술관 설 연휴 운영 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">22.01.28</td>
					<td class="hits web_show">283</td>
				</tr>




				<tr>
					<td class="number web_show ">279</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=884&amp;page=1" class="Ellipsis" title="2022 포항시립미술관 기간제근로자（학예, 문화예술교육인턴） 최종 합격자 안내">2022 포항시립미술관 기간제근로자（학예, 문화예술교육인턴） 최종 합격자 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.30</td>
					<td class="hits web_show">689</td>
				</tr>



				<tr>
					<td class="number web_show ">278</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=883&amp;page=1" class="Ellipsis" title="2022 포항스틸아트공방 기간제근로자（인턴） 최종합격자 안내">2022 포항스틸아트공방 기간제근로자（인턴） 최종합격자 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.28</td>
					<td class="hits web_show">357</td>
				</tr>



				<tr>
					<td class="number web_show ">277</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=882&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 기간제근로자（학예, 문화예술교육인턴） 서류전형 결과 및 면접 안내">2022년 포항시립미술관 기간제근로자（학예, 문화예술교육인턴） 서류전형 결과 및 면접 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.24</td>
					<td class="hits web_show">418</td>
				</tr>



				<tr>
					<td class="number web_show ">276</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=881&amp;page=1" class="Ellipsis" title="2022년 포항스틸아트공방 기간제근로자（인턴） 서류전형 결과 및 면접 안내">2022년 포항스틸아트공방 기간제근로자（인턴） 서류전형 결과 및 면접 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.24</td>
					<td class="hits web_show">263</td>
				</tr>




				<tr>
					<td class="number web_show ">275</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=880&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 기간제근로자（스틸아트공방） 채용 공고">2022년 포항시립미술관 기간제근로자（스틸아트공방） 채용 공고</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.13</td>
					<td class="hits web_show">424</td>
				</tr>


				<tr>
					<td class="number web_show ">274</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=879&amp;page=1" class="Ellipsis" title="2022년 포항시립미술관 기간제근로자（학예, 문화예술교육 인턴） 채용 공고">2022년 포항시립미술관 기간제근로자（학예, 문화예술교육 인턴） 채용 공고</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.09</td>
					<td class="hits web_show">1,201</td>
				</tr>




				<tr>
					<td class="number web_show ">273</td>
					<td class="subject ">
<a href="?boardTheme=common&amp;skw=&amp;mode=read&amp;idx=878&amp;page=1" class="Ellipsis" title="포항시립미술관 방역패스 의무적용 시행 안내">포항시립미술관 방역패스 의무적용 시행 안내</a>					</td>
					<td class="writer web_show">
							포항시립미술관
					</td>
					<td class="date web_show">21.12.07</td>
					<td class="hits web_show">345</td>
				</tr>

			</tbody>
		</table>
	</div>

	<div class="btn_wrap alignR">
		<a href="/poma/p_comm/cm_noti/?boardTheme=common" class="bg_blue">목록</a>
	</div>

	<div class="paging_wrap">
        <a href="#" class="page_num current">1</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=2" class="page_num">2</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=3" class="page_num">3</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=4" class="page_num">4</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=5" class="page_num">5</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=6" class="page_num">6</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=7" class="page_num">7</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=8" class="page_num">8</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=9" class="next_page">&nbsp;</a><a href="?boardTheme=common&amp;skw=&amp;mode=list&amp;page=18" class="last_page">&nbsp;</a>

	</div>

</div>
</div>
</div>
</div>
</div>
</div><!-- //contents -->


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
