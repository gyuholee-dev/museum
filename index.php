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
									<li><a href="e_pre.php?">현재전시</a></li>
									<li><a href="e_past.php?">과거전시</a></li>
									<li><a href="e_expe.php?">예정전시</a></li>
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

<div id="container">
    <!-- visual -->
    <div id="h_visual">
	<div id="imgslide">
		<div class="imgs">
			<a href="#"><img src="image/001.jpg"></a>
			<a href="#"><img src="image/002.jpg"></a>
			<a href="#"><img src="image/001.jpg"></a>		
			<a href="#"><img src="image/002.jpg"></a>
			<a href="#"><img src="image/001.jpg"></a>
		</div>
		<div class="btn_prev">
			<a href="#">&#8249;</a>
		</div>
		<div class="btn_next">
			<a href="#">&#8250;</a>
		</div>
	</div>
    </div>
    <!-- //visual -->
    <!-- mCon -->
    <div id="mCon">
        <div class="inner">
            <!-- firstArea -->
            <div id="firstArea">
                <div class="box_wrap box1">
                    <div class="box cont01">
                        <p class="tit">현재전시 <span class="eng">Current Exhibition</span></p>
                       <div class="inner">

                            <a style="background: url(image/220506_sub.jpg) center center / 260px 265px no-repeat; display: block;" href="#" class="view01">현재전시 포스터</a>
                        </div>
                    </div>
                    <div class="box cont02">
                        <p class="tit">교육 <span class="eng">Program</span></p>
                        <div class="inner">
                            <ul>
                                <li>
                                    <div class="img"><img src="image/tn219_208030_3534906791_yiETpBKW.png" alt="" style="width:219px; height:75px;"></div>
                                    <div class="txt">
                                        <a href="#" class="tit">2022년 5월 전시 도슨트 자원봉사자 전시교육</a>
                                        <span class="state end">접수마감</span>
                                        <span class="date">2022-05-02 - 2022-06-07</span>
                                        <span class="object">미술관에서 활동중인 POMA 도슨트</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img"><img src="image/tn219_208030_831464884_8DVaPQM3.jpg" alt="" style="width:219px; height:75px;"></div>
                                    <div class="txt">
                                        <a href="#" class="tit">「메타픽션 : 현실 그 너머」 전시 연계 청소년 프로그램 《 나를 닮은 사물들 》</a>
                                        <span class="state end">접수마감</span>
                                        <span class="date">2022-04-02 - 2022-04-02</span>
                                        <span class="object">지역 내 중학교 학생</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img"><img src="image/tn219_208030_3534906791_gNJU7qAt.jpg" alt="" style="width:219px; height:75px;"></div>
                                    <div class="txt">
                                        <a href="#" class="tit">손아유 展 「1978년, 돌담 아래」 연계 성인 프로그램 《 Color from my Life 》</a>
                                        <span class="state end">접수마감</span>
                                        <span class="date">2022-04-16 - 2022-04-10</span>
                                        <span class="object">일반 성인 누구나</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="/poma/p_edu/edu01/" class="more_btn">
                        <img src="image/more_btn.gif" class="pc_ver" alt="더보기">
                        </a>
                    </div>
                </div>
                <div class="box_wrap box2">
                    <div class="box cont03">
                        <p class="tit">최근소식 <span class="eng">News</span></p>
                        <div class="inner">
                            <ul>
                                <li><a href="#">2022년 포항시립미술관 기록물관리전문가 선발 공고</a><span class="date">2022-05-09</span></li>
                                <li><a href="#">휴관 및 다음 전시 안내</a><span class="date">2022-05-06</span></li>
                                <li><a href="#">2022년 제18회 포항시 장두건미술상 공모</a><span class="date">2022-03-07</span></li>
                                <li><a href="#">2022년 제18회 포항시 장두건미술상 공모</a><span class="date">2022-03-07</span></li>
                            </ul>
                        </div>
                        <a href="/poma/p_comm/cm_noti/" class="more_btn">
                        <img src="image/more_btn.gif" class="pc_ver" alt="더보기">

                        </a>
                    </div>
                    <div class="box cont04">
                        <div class="inner">
                            <span class="txt"><a style="color:white; display:block;" target="_blank" href="http://poma.pohang.go.kr/poma/p_coll/c_app/index.html">AR 도슨트 투어</a></span>

                            <a href="/poma/p_comm/cm_event/" class="more_btn">
                            <img src="image/more_btn.gif" class="pc_ver" alt="더보기">

                            </a>
                        </div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
            <!-- //firstArea -->
            <!-- secondArea -->
            <div id="secondArea">
                <div class="box_wrap">
                    <ul>
                        <li>
                            <p class="tit">소장품/도서 <span class="eng">Collection/Library</span></p>
                            <a href="#"><img src="image/sec_img01.jpg" alt="소장품/도서 바로가기"></a>
                        </li>
                        <li>
                            <p class="tit">미술관소개 <span class="eng">About POMA</span></p>
                            <a href="#"><img src="image/sec_img02.jpg" alt="미술관소개 바로가기"></a>
                        </li>
                        <li>
                            <p class="tit">스틸아트공방 <span class="eng">Steel Art Workshop</span></p>
                            <a href="#"><img src="image/sec_img03.jpg" alt="스틸아트공방 바로가기"></a>
                        </li>
                        <li>
                            <p class="tit">관람안내/예약 <span class="eng">Guide/Reservation</span></p>
                            <a href="#"><img src="image/sec_img04.jpg" alt="관람안내/예약 바로가기"></a>
                        </li>
                    </ul>
                </div>
            </div><!-- //secondArea -->
        </div>
    </div><!-- //mCon -->
</div><!-- //container -->
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
