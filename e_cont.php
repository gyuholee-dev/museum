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
				<h2>전시</h2>
				<ul>
					<li class=""><a href="e_pre.php">현재전시</a></li>
					<li class="cur"><a href="e_past.php">과거전시</a></li>
					<li class=""><a href="e_expe.php">예정전시</a></li>
				</ul>
			</div>
			<!-- lnb -->


			<!-- contents -->
			<div class="contents">
				<!-- sub_visual -->
				<div class="sub_visual sub03"></div>
				<!-- sub_visual -->

				<!-- cont -->
				<div id="cont">
					<div class="location">
						<span class="home">HOME</span>
						<span class="loc1 arrow">전시</span>
						<span class="loc2 arrow">과거전시</span>
					</div>
					<div class="sub_tit">
						<h3>과거전시
<span class="eng">Past exhibition</span>
						</h3>
					</div>

					<!-- inner -->
					<div class="inner">

						<div id="board">

							<div class="exh_view_default">
					<div class="art_img_wrap">
							<img src="images/208030_3534906791_Z7MRX4xd.jpg">
					</div>




			<div class="clearAfter">
				<div class="art_wrap info">
					<p class="tit">2022 POMA Collection: 연결_시제</p>
					<div class="info_box">
						<ul>
							<li>
								<span class="tit">전시기간</span>
								<span class="cont">2022-01-25 ~ 2022-05-08</span>
							</li>
							<li>
								<span class="tit">전시장소</span>
								<span class="cont">초헌 장두건관</span>
							</li>
							<li>
								<span class="tit">전시작품</span>
								<span class="cont">사진, 조각, 영상 총 4점</span>
							</li>
							<li>
								<span class="tit">참여작가</span>
								<span class="cont">권오상, 김세진, 수퍼플렉스, 이문호</span>
							</li>
							<li>
								<span class="tit">관람시간</span>
								<span class="cont">하절기(4-10월) : 오전10시 - 오후7시<br>
동절기(11-3월) : 오전10시 - 오후6시<br>
*월요일 휴관<br>
</span>
							</li>
							<li>
								<span class="tit">관람료</span>
								<span class="cont">무료</span>
							</li>
						</ul>
					</div>
					<div class="info_text">
						<p class="0"><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">2022 </span><span style="font-family: 돋움, Dotum;">포항시립미술관 소장품전 </span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">《</span><span style="font-family: 돋움, Dotum;">연결</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">_</span><span style="font-family: 돋움, Dotum;">시제</span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">》</span><span style="font-family: 돋움, Dotum;">는 구입 이후 한 번도 전시되지 않은 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">4</span><span style="font-family: 돋움, Dotum;">점의 동시대 미술 작품을 선보인다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">국</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">·</span><span style="font-family: 돋움, Dotum;">공립미술관의 소장품은 미래세대에 물려줄 공동의 시각유산으로</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">외부 환경 변화와 차단된 수장고에서 영구히 보존되는 것을 목표로 한다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">마치 우리가 박물관 유물을 통해 수 백 년 전의 문화사를 추측하는 것처럼</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">먼 미래에는 미술관 작품을 시각적 단서삼아 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">21</span><span style="font-family: 돋움, Dotum;">세기 초반 사회상을 다각도로 해석할 수 있을 것이다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">포항시립미술관은 이러한 미래를 상정하며 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">2022</span><span style="font-family: 돋움, Dotum;">년 현재</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">우리가 사는 시점에서 유효한 근</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">(</span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">近</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">)</span><span style="font-family: 돋움, Dotum;">과거의 문화사를 조직해 수장고 위로 올려 보내고자 한다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">.</span></p><p class="0"><span style="font-family: 돋움, Dotum;">국내</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">·</span><span style="font-family: 돋움, Dotum;">외를 막론하고 동시대 예술가들은 자신의 내면세계를 추상적으로 표현하기보다 공동의 삶의 문제에 대해 적극적으로 발언하는데</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">이 과정에서 현실의 사물들이 시각 예술에 대거 등장하였다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">예컨대 수퍼플렉스는 비트코인 그래프 조각 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum; font-style: italic;">Connect with Me (4) </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">(</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum; font-size: 9pt;">2018)</span><span style="font-family: 돋움, Dotum;">를 통해 신자유주의 경제체제 이면의 개인의 불안을 시각적으로 구현해낸다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">또 계단에 위치한 권오상 작가의 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">&lt;</span><span style="font-family: 돋움, Dotum;">뉴 스트럭쳐 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">9 </span><span style="font-family: 돋움, Dotum;">키 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">&amp; </span><span style="font-family: 돋움, Dotum;">그래픽</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">&gt; (</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">2016)</span><span style="font-family: 돋움, Dotum;">에서는 쏟아지는 미디어의 홍수 속에서 파편화된 이미지들의 조합을 볼 수 있다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">.</span></p><p class="0"><span style="font-family: 돋움, Dotum;">일견 이 </span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">《</span><span style="font-family: 돋움, Dotum;">연결</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">_</span><span style="font-family: 돋움, Dotum;">시제</span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">》</span><span style="font-family: 돋움, Dotum;">의 작품들은 우리가 스쳐 지나간 일상의 사건과 사물을 있는 그대로 보여주는 것 같지만</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">작가들은 자신이 다루는 시각 매체의 역사와 새로운 기술을 정확히 이해하고 그를 변주하며 새로운 예술의 흐름을 만들어냈다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">김세진 작가의 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">&lt;</span><span style="font-family: 돋움, Dotum;">그들의 쉐라톤</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">&gt; (2006)</span><span style="font-family: 돋움, Dotum;">에서는 다큐멘터리 기법의 차용을 통한 비디오 아트의 확장을</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">이문호의 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;"><apartment> (2008)</apartment></span><span style="font-family: 돋움, Dotum;">에서는 사진</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">조각</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">설치 개념의 경계를 흐리는 색다른 시도를 확인할 수 있다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">.</span></p><p class="0"><span style="font-family: 돋움, Dotum;">사회 변화와 매체기술의 흐름에 영향을 받는 것은 비단 예술작품 뿐 아니라 그 작품들을 전시하는 미술관도 마찬가지다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. 2020</span><span style="font-family: 돋움, Dotum;">년 초반부터 시작된 코로나</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">19</span><span style="font-family: 돋움, Dotum;">는 국제물류 이동을 제한해</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">각 미술관이 소장품을 대거 활용한 기획 전시를 하도록 촉발하였다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">이에 더해 고도로 발달한 가상현실 기술은 미술관이 닫힌 상황에서도 관람객들이 시공간의 제약 없이 수장고 속의 작품들을 만날 수 있는 온라인 감상의 장을 열어주었다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">《</span><span style="font-family: 돋움, Dotum;">연결</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">_</span><span style="font-family: 돋움, Dotum;">시제</span><span style="letter-spacing: 0pt; font-family: 돋움, Dotum;">》</span><span style="font-family: 돋움, Dotum;">는 이렇듯 소장품의 가치가 재조명되는 시기에</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">수장고에 갇혀있던 작품들이 종과 횡으로 연결되기를 바라며 기획되었다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">.</span></p><p class="0"><span style="font-family: 돋움, Dotum;">보존된 소장품은 과거와 현재의 예술을 연결하는 다리로서</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">과거</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">·</span><span style="font-family: 돋움, Dotum;">현재</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">·</span><span style="font-family: 돋움, Dotum;">미래 어느 시점에 접속해도 유효한 미술사의 한 페이지로 기능한다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">포항시립미술관은 이러한 소장품과 시민들의 소통의 장을 만들어내고자 다양한 노력을 기울이고 있다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">매년 </span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">‘</span><span style="font-family: 돋움, Dotum;">찾아가는 미술관</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">’ </span><span style="font-family: 돋움, Dotum;">전시를 통해 미술관에 방문하기 어려운 시민들에게 미술관 소장품을 공개해왔으며</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">, </span><span style="font-family: 돋움, Dotum;">야외 공원의 상설 조각 작품들을 증강현실</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">(AR) </span><span style="font-family: 돋움, Dotum;">게임이라는 새로운 방식으로 선보일 예정이다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">. </span><span style="font-family: 돋움, Dotum;">앞으로도 우리 미술관 소장품이 시민들이 향유하는 공적인 재산으로서 시대를 넘어 다양한 맥락에서 호출되기를 바란다</span><span lang="EN-US" style="letter-spacing: 0pt; font-family: 돋움, Dotum;">.</span></p><div class="hwp_editor_board_content" id="hwpEditorBoardContent" data-jsonlen="18516" data-hjsonver="1.0"></div>
					</div>
				</div>




				<div class="art_wrap gallery popzone">
					<p class="tit">작품 더 보기</p>
					<ul>
						<li class="pop"><a href="#" class="detail" style="text-overflow:ellipsis; white-space:nowrap; overflow:hidden; text-align:center; vertical-align:middle;"><img src="images/editor_208030_3534906791_BnsfvdHP.jpg" class="lightview" style="max-width:100%; height:auto;"></a>
							<div class="pop_layer">
								<div class="layer_inner">
									<a href="#" class="layer_close">X</a>
									<div class="inner_wrap">
										<div class="inner_img"><img src="images/editor_208030_3534906791_BnsfvdHP.jpg" style="max-width:100%; height:auto;  max-height:600px;"></div>
										<div class="inner_txt">
											<p class="name"><span>작품명</span><strong>: 뉴 스트럭쳐 9 키 ＆ 그래픽</strong></p>
											<p><span>작가명</span><strong>: 권오상</strong></p>
											<p><span>재료</span><strong>: 알루미늄에 프린트</strong></p>
											<p><span>사이즈</span><strong>: 380×185×216cm</strong></p>
											<p><span>제작년도</span><strong>: 2015-2016</strong></p>
										</div>
									</div>


								</div>
							</div>
						</li>
						<li class="pop"><a href="#" class="detail" style="text-overflow:ellipsis; white-space:nowrap; overflow:hidden; text-align:center; vertical-align:middle;"><img src="images/editor_208030_3534906791_NHj62Duh.jpg" class="lightview" rel="images/editor_208030_3534906791_NHj62Duh.jpg" style="max-width:100%; height:auto;"></a>
							<div class="pop_layer">
								<div class="layer_inner">
									<a href="#" class="layer_close">X</a>
									<div class="inner_wrap">
										<div class="inner_img"><img src="images/editor_208030_3534906791_NHj62Duh.jpg" alt="" class="lightview" rel="images/editor_208030_3534906791_NHj62Duh.jpg" style="max-width:100%; height:auto;  max-height:600px;"></div>
										<div class="inner_txt">
											<p class="name"><span>작품명</span><strong>: 그들의 쉐라톤</strong></p>
											<p><span>작가명</span><strong>: 김세진</strong></p>
											<p><span>재료</span><strong>: 싱글채널 비디오</strong></p>
											<p><span>사이즈</span><strong>: 3분 8초</strong></p>
											<p><span>제작년도</span><strong>: 2006</strong></p>
										</div>
									</div>


								</div>
							</div>
						</li>
						<li class="pop"><a href="#" class="detail" style="text-overflow:ellipsis; white-space:nowrap; overflow:hidden; text-align:center; vertical-align:middle;"><img src="images/editor_208030_3534906791_6yx2rXzo.jpg" alt="" class="lightview" rel="images/editor_208030_3534906791_6yx2rXzo.jpg" style="max-width:100%; height:auto;"></a>
							<div class="pop_layer">
								<div class="layer_inner">
									<a href="#" class="layer_close">X</a>
									<div class="inner_wrap">
										<div class="inner_img"><img src="images/editor_208030_3534906791_6yx2rXzo.jpg" alt="" class="lightview" rel="images/editor_208030_3534906791_6yx2rXzo.jpg" style="max-width:100%; height:auto;  max-height:600px;"></div>
										<div class="inner_txt">
											<p class="name"><span>작품명</span><strong>: 나와 연계해（4）</strong></p>
											<p><span>작가명</span><strong>: 수퍼플렉스</strong></p>
											<p><span>재료</span><strong>: 스틸 튜브, 폴리우레탄, 에나멜 페인트</strong></p>
											<p><span>사이즈</span><strong>: 86×423×75cm</strong></p>
											<p><span>제작년도</span><strong>: 2018</strong></p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="pop"><a href="#" class="detail" style="text-overflow:ellipsis; white-space:nowrap; overflow:hidden; text-align:center; vertical-align:middle;"><img src="images/editor_208030_3534906791_t8Hh1AWp.jpg" alt="" class="lightview" rel="images/editor_208030_3534906791_t8Hh1AWp.jpg" style="max-width:100%; height:auto;"></a>
							<div class="pop_layer">
								<div class="layer_inner">
									<a href="#" class="layer_close">X</a>
									<div class="inner_wrap">
										<div class="inner_img"><img src="images/editor_208030_3534906791_t8Hh1AWp.jpg" alt="" class="lightview" rel="images/editor_208030_3534906791_t8Hh1AWp.jpg" style="max-width:100%; height:auto;  max-height:600px;"></div>
										<div class="inner_txt">
											<p class="name"><span>작품명</span><strong>: 아파트</strong></p>
											<p><span>작가명</span><strong>: 이문호</strong></p>
											<p><span>재료</span><strong>: 잉크젯프린트</strong></p>
											<p><span>사이즈</span><strong>: 35×48cm×15pcs</strong></p>
											<p><span>제작년도</span><strong>: 2008</strong></p>
										</div>
									</div>


								</div>
							</div>
						</li>

					</ul>
				</div>
				<div class="btn_wrap alignR">
					<a href="http://poma.pohang.go.kr/pomavr/202202/VR.html" class="list_btn" target="_blank">VR보기</a>
				</div>
			</div>

					<div class="btn_wrap alignR">
						<a href="" class="list_btn">목록</a>

						</div>
					</div>




				</div>
		</div>
		<!-- //inner //-->
	</div>
</div>

</div>
<!-- //contents -->
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
