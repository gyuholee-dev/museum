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
			<h2>관람안내</h2>
			<ul>
            <li><a href="g_guide.php">관람안내</a></li>
            <li><a href="g_contact.php">오시는길</a></li>
            <li><a href="g_reser.php">단체관람예약</a></li>
            <li><a href="g_facility.php">편의시설</a></li>
			</ul>
		</div>
		<!-- lnb -->

		<!-- contents -->
		<div class="contents">
			<!-- sub_visual -->
			<div class="sub_visual sub05"></div>
			<!-- sub_visual -->

			<!-- cont -->
			<div id="cont">
				<div class="location">
					<span class="home">HOME</span>
					<span class="loc1 arrow">관람안내</span>
					<span class="loc2 arrow">관람안내</span>
				</div>
				<div class="sub_tit">
					<h3 id="CI0c84a233d086fc721e4e4eddda3894ca">관람안내 <span class="eng">Visitor Information</span></h3>
				</div>

				<!-- inner -->
				<div class="inner">



		<div class="dlType_wrap">

				<dl class="dlType01" style="width:100%;">
					<dt>관람안내</dt>
					<dd>
						<p><span class="emph_LGray">하절기(4-10월) :</span> 오전 10시 ~ 오후 7시</p>
						<p><span class="emph_LGray">동절기(11-3월) :</span> 오전 10시 ~ 오후 6시</p>
                                                <p>※ 관람종료 30분 전까지 입장이 가능합니다.</p>
					</dd>
				</dl>
			<div class="inner">
				<dl class="dlType01">
					<dt>휴관일</dt>
					<dd>
						<p>매주 월요일(단 월요일이 공휴일인 경우에는 정상 개관)<br>설·추석 당일 오전(13시 오픈)<br>전시준비 기간(별도공지)</p>
					</dd>
				</dl>
				<dl class="dlType01">
					<dt>도슨트 투어 (전시설명회)</dt>
					<dd>
               					<p>주중 11시, 15시 운영 <br>주말 11시, 14시, 16시 운영 <br> <br> ※ 코로나 19 방역지침에 의해 변경 및 취소될 수 있습니다.</p>

					</dd>
				</dl>
				<dl class="dlType01">
					<dt>관람료</dt>
					<dd>
						<p>무료<br> (특정 전시는 관람료가 부가될 수 있음)</p>
					</dd>
				</dl>
				<dl class="dlType01">
					<dt>관람문의</dt>
					<dd>
						<p>054. 270. 4700</p>
					</dd>
				</dl>
			</div>
			<div class="float_cut"></div>
			<dl class="dlType02">
				<dt>단체 관람 안내</dt>
				<dd>
					<p>포항시립미술관은 방문하시는 관람객이 쾌적한 환경에서 작품을 관람하실 수 있도록 <br>20인 이상의 단체의 경우 사전예약을 받고 있습니다.</p>
					<p>※최대 10인씩 관람사전예약 신청을 통해 접수</p>
					<p>관람 희망일 일주일 전까지 홈페이지 단체관람 예약 신청란을 통하여 예약하시면,<span class="br"></span>안내용 책자 배부, 주차공간 확보 등 편의를 제공해 드립니다.</p>
					<p class="bulDot">어린이와 학생 단체 관람의 경우 보호자 혹은 인솔교사의 동반이 필요하며<span class="br"></span>미술관 방문 전 관람 예절은 지도하여 주시면 더욱 질서 있고 안전한 관람이 가능합니다.</p>
					<!--a href="/poma/p_guid/g_reser/?mode=write&tm=1652677273" class="reservation_btn">단체관람 예약신청</a-->
					<a href="https://poma.pohang.go.kr/poma/p_guid/g_reser/?mode=write&amp;tm=1648033725" class="reservation_btn">단체관람예약</a>
				</dd>
			</dl>
			<dl class="dlType02">
				<dt>관람 예절</dt>
				<dd>
					<p>모두를 위한 공공 미술관입니다.<br> 바람직한 전시문화와 관람 예절을 함께 만들어 갈 수 있도록 아래 사항에 대한 각별한 주의를 부탁합니다.</p>
					<ul class="bulDotList marT30">
						<li>입장 및 전시 관람은 천천히, 여유 있게 하시기 바랍니다.</li>
						<li>입장하기 전, 휴대폰을 꺼주시거나 진동으로 전환해주시기 바랍니다. </li>
						<li>전시장 바닥의 선이나 줄은 작품을 보호하기 위한 선이니 침범에 주의 바랍니다.</li>
						<li>아이들이 차분히 전시관람 할 수 있도록 부모님 및 인솔자의 세심한 배려 바랍니다.</li>
						<li>다른 관람객에게 방해가 되지 않도록 유의해주시기 바라며, 관람예절을 지키지 않아 타인의 관람에 피해를 줄 경우 관람을 제한 할 수 있습니다. </li>
					</ul>
				</dd>
			</dl>
			<dl class="dlType02">
				<dt>전시관람 주의사항</dt>
				<dd>
					<div class="clearAfter guide_tip_wrap">

						<ul>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico01.gif" alt=""></span>음식물 반입금지</p>
								<div class="cont">
									물, 음료 및 기타 음식물은 카페에서만 가능하며, 음식물을 가지고 온 경우에는 안내데스크에 보관하신 후 입장하시기 바랍니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico02.gif" alt=""></span>쓰레기 반입 금지</p>
								<div class="cont">
									미술관이 위치한 환호공원은 ‘쓰레기 되가져 가기’ 운동을 하는 공원이며, 미술관에도 쓰레기통이 없습니다. 자신의 쓰레기는 반드시 되가져가 주시기 바랍니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico03.gif" alt=""></span>위험 물품 반입금지</p>
								<div class="cont">
									바퀴달린 신발, 퀵보드, 부피 큰 가방, 우산, 풍선, 물총 등 작품보호와 감상에 방해가 되는 물품 전시장을 입장할 수 없으니 안내데스크에 보관해 주시기 바랍니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico04.gif" alt=""></span>애완동물 출입금지</p>
								<div class="cont">
									미술관 내에 애완동물은 출입을 할 수 없습니다. 단 안내견은 입장이 가능합니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico05.gif" alt=""></span>작품보호</p>
								<div class="cont">
									작품에 손가락이나 소지품이 닿지 않도록 주의 해주시기 바라며, 그 외에 작품을 훼손할 수 있는 행위를 자제해 주시기 바랍니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico06.gif" alt=""></span>사진촬영 여부</p>
								<div class="cont">
									작품보호와 작가의 저작권이 관련되어 있으니 사진촬영 여부는 관리요원의 안내에 따라 주시기 바랍니다.
								</div>
							</li>
							<li>
								<p class="tit"><span class="ico"><img src="images/guide_ico07.gif" alt=""></span>관람예절 준수</p>
								<div class="cont">
									보호자는 아이들의 손을 잡아주시고, 아이들이 전시장에서 소리치거나, 뛰어다니지 않도록 지도 바랍니다. 또한 다른 관람객을 위해 휴대폰은 진동으로 해주시기 바랍니다.
								</div>
							</li>
						</ul>
					</div>
					<p>※ 기타 전시관람에 따른 질서는 관리요원의 안내에 따라 주시기 바랍니다.</p>
				</dd>
			</dl>
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
