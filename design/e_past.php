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
				<div class="sub_visual"></div>
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
					<div class="inner">
						<div id="board">

							<div class="bbs_gallery_defalut">
								<ul>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_208030_3534906791_Z7MRX4xd.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">2022 POMA Collection: 연결_시제</p>
											<p class="date">2022-01-25 ~ 2022-05-08</p>
											<div class="cont">
												2022 포항시립미술관 소장품전 《연결시제》는 구입 이후 한 번도 전시되지 않은 4점의 동시대 미술 작품을 선보인다 국·공립미술관의 소장품은 미래세대에 물려줄 공동의 시각유산으로 외부 환경 변화와 차단된 수장고에서 영구히 보존되는 것을 목표로 한다 마치 우리가 박물관 유물을 통해 수 백 년 전의 문화사를 추측하는 것처럼 먼 미래에는 미술관 작품을 시각적 단서삼아 21세기 초반 사회상을 다각도로 해석할 수 있을 것이다 포항시립미술관은 이러한 미래를 상정하며 2022년 현재 우리가 사는 시점에서 유효한 근近과거의 문화사를 조직해 수장고 위로 올려 보내고자 한다국내·외를 막론하고 동시대 예술가들은 자신의 내면세계를 추상적으로 표현하기보다 공동의 삶의 문제에 대해 적극적으로 발언하는데 이 과정에서 현실의 사물들이 시각 예술에 대거 등장하였다 예컨대 수퍼플렉스는 비트코인 그래프 조각 Connect with Me 4 2018를 통해 신자유주의 경제체제 이면의 개인의 불안을 시각적으로 구현해낸다 또 계단에 위치한 권오상 작가의 &lt;뉴 스트럭쳐 9 키 &amp; 그래픽&gt; 2016에서는 쏟아지는 미디어의 홍수 속에서 파편화된 이미지들의 조합을 볼 수 있다일견 이 《연결시제》의 작품들은 우리가 스쳐 지나간 일상의 사건과 사물을 있는 그대로 보여주는 것 같지만 작가들은 자신이 다루는 시각 매체의 역사와 새로운 기술을 정확히 이해하고 그를 변주하며 새로운 예술의 흐름을 만들어냈다 김세진 작가의 &lt;그들의 쉐라톤&gt; 2006에서는 다큐멘터리 기법의 차용을 통한 비디오 아트의 확장을 이문호의  2008에서는 사진 조각 설치 개념의 경계를 흐리는 색다른 시도를 확인할 수 있다사회 변화와 매체기술의 흐름에 영향을 받는 것은 비단 예술작품 뿐 아니라 그 작품들을 전시하는 미술관도 마찬가지다 2020년 초반부터 시작된 코로나19는 국제물류 이동을 제한해 각 미술관이 소장품을 대거 활용한 기획 전시를 하도록 촉발하였다 이에 더해 고도로 발달한 가상현실 기술은 미술관이 닫힌 상황에서도 관람객들이 시공간의 제약 없이 수장고 속의 작품들을 만날 수 있는 온라인 감상의 장을 열어주었다 《연결시제》는 이렇듯 소장품의 가치가 재조명되는 시기에 수장고에 갇혀있던 작품들이 종과 횡으로 연결되기를 바라며 기획되었다보존된 소장품은 과거와 현재의 예술을 연결하는 다리로서 과거·현재·미래 어느 시점에 접속해도 유효한 미술사의 한 페이지로 기능한다 포항시립미술관은 이러한 소장품과 시민들의 소통의 장을 만들어내고자 다양한 노력을 기울이고 있다 매년 ‘찾아가는 미술관’ 전시를 통해 미술관에 방문하기 어려운 시민들에게 미술관 소장품을 공개해왔으며 야외 공원의 상설 조각 작품들을 증강현실AR 게임이라는 새로운 방식으로 선보일 예정이다 앞으로도 우리 미술관 소장품이 시민들이 향유하는 공적인 재산으로서 시대를 넘어 다양한 맥락에서 호출되기를 바란다  &nbsp;  
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6079&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_216168_3534906791_QdnMfkST.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">메타픽션 : 현실 그 너머</p>
											<p class="date">2022-01-25 ~ 2022-05-08</p>
											<div class="cont">
												《메타픽션 현실 그 너머》는 펜데믹으로 인해 이성적인 사고나 축척된 데이터가 힘을 잃어버린 상황에서 예술가들의 다면적인 시각과 무한한 가능성이 투영된 작품을 통해 새로운 사고의 메커니즘으로 나아가기 위해 기획되었다  메타픽션metafiction은 픽션과 현실 사이의 관계에 대한 의문을 제기하기 위한 장치이다 창작물이 허구픽션라는 것을 의도적으로 알려 허구와 현실의 관계에 대한 문제를 제시하며 아이러니와 자아 성찰을 유도한다 작품 안에서 사실과 픽션을 넘나드는 메타픽션은 작품의 내재적 존재를 탐색하기 위한 가장 좋은 장치가 된다&nbsp;《메타픽션 현실 그 너머》는 ‘현실’과 ‘그 너머’의 상호작용을 경험하며 불확실한 현실을 인식하게 되는 메타픽션을 다루고 있다 전시는 작품의 불확실한 이미지를 통해 현실의 인식을 유도한다 그로 인해 현실과 픽션이 분리되지 않고 만나게 되는 동시성을 갖는다&nbsp;&nbsp;아직 펜데믹은 끝나지 않았다 펜데믹으로 인해 불완전한 현 시점과 초현실주의는 맞닿아 있기에 초현실주의 작가들이 이번 전시의 시발점이 된다 익숙한 것들을 낯설게 만들어내고 형태를 알 수 없는 작품을 통해 현실 그 너머의 ‘초현실’을 그려낸다&nbsp;&nbsp;초현실주의 시인 앙드레 브르통Andre Breton 19861966은 화가는 내적이고도 비가시적인 꿈과 상상력을 재현해냄으로써 현실의 억압으로부터 정신을 해방해야 된다고 선언했다 초현실주의의 변함없는 원칙은 인간의 자유이다 인간의 ‘삶’ 자체를 재정의 하면서 ‘예술 근본’의 재구성을 시도했다 이 지점부터 전시는 시작된다&nbsp;&nbsp;이번 전시는 마르크 샤갈Marc Chagall 18871985 호안 미로Joan Miro 18931983 살바도르 달리Salvador Dali 19041989 쿠사마 야요이Kusama Yayoi b1929 변종곤BYUN Chonggon b1948 이미주LEE Miju b1982 김미진KIM Mijin b1979 쑨지Soonji b1983 이병찬LEE Byungchan b1987 아홉 작가의 작품 50여점을 선보인다&nbsp;&nbsp;일곱 개의 픽션 ‘무의식환영결합증식우연내재이면’으로 현실에 대한 의문을 제기한다 픽션의 개별 작품들은 자유롭게 상호 교류될 수 있도록 구성하였다 1전시실에는 초현실주의 작가 마르크 샤갈 호안 미로 살바도르 달리를 시작으로 쿠사마 야요이 변종곤 이미주의 작품을 전시실을 연결하는 공간에는 김미진의 작품으로 2전시실에는 쑨지 이병찬의 작품을 배치했다 전시는 현실을 기반으로 하고 있지만 비현실적인 이야기를 다루고 있기 때문에 전체적으로 현실과 초현실 익숙함과 기괴함이 공존하고 있다 작품들은 무의식의 산물인 까닭에 규정짓기는 모호하지만 그 모호함이 초현실과 기괴함을 양산한다&nbsp;&nbsp;전시는 작품과 관람자를 소통시켜 예술작품에 내포된 의미를 사회화하는 기능을 한다 《메타픽션》은 감성 비합리 비논리 우연이 힘을 발휘하는 ‘현실 그 너머’의 세계를 보여줄 것이다 전시를 통해 현실이 가상으로 가상이 현실로 느껴지는 묘한 경험을 즐기며 상상했던 기형적인 세상 잠재의식에 내포되어 있는 인간의 삶에 대해 의문을 제기할 수 있길 바란다 
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6071&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_208030_3534906791_SOBezKrM.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">손아유: 1978년, 돌담아래</p>
											<p class="date">2022-01-25 ~ 2022-05-08</p>
											<div class="cont">
												손아유 1978년 돌담아래포항시립미술관은 재일코리안&nbsp;2세로 일본과 유럽에서 판화 회화 등의 분야로 활발하게 활동했던 손아유를 조명하는 《1978년 돌담 아래》를 개최한다 포항시립미술관에는 동강 하정웅 선생의 기증으로 손아유의 작품과 아카이브가 소장되어 이번 전시에서 소재 및 재료의 변화를 읽을 수 있는 작품 50여 점을 선별해 선보인다 전시를 통해 한국과 일본의 경계인으로서 작품 활동을 이어간 손아유의 삶과 재일에 한정되지 않고 보편적 가치를 추구했던 그의 예술적 가치관을 조망하고자 한다손아유는 1949년 오사카 소네자키에서 재일코리안 2세로 태어났다 미술가의 뜻을 품고 도쿄로 상경해 모노하 작가인 다카야마 노보루의 가르침을 받으며 1970년 본격적인 작품 활동에 매진하였다 그가 예술가로서 활동을 시작했던 재일코리안 미술계는 이전 세대보다 추상주의나 실험적 작품을 제작하는 작가들이 늘어났었다 손아유 또한 어느 단체에도 소속되지 않고 에칭을 중심으로 독자적인 미술 활동을 펼쳤다손아유의 작업은 다카야마 노보루의 모노하 영향을 받아 사물에 근본적인 존재성을 부여하고 사물의 흔적으로 의미를 부여하는 등 개념 미술적 접근을 보여준다 1970년대 판화의 황금기로 불리던 일본의 미술계에서 그는 복제미술로서 판화의 의미에서 벗어나 모노하의 이론적 토대로 본연의 물질성을 강조하였다 손아유는 영국 스페인 대만 독일 등에서 개최된 국제 판화비엔날레에 참여하고 이비자 현대미술관 영국 대영미술관 오사카 부립현대미술센터 등에 작품이 소장되면서 그의 작품성을 인정받게 된다판화 분야에서 왕성한 활동과 더불어 예술적 가치를 인정받았던 그의 작품세계에 형식적인 측면으로 큰 변화를 겪게 되는 사건이 발생하게 된다 1978년 한국에 처음으로 방문하게 된 손아유는 경복궁의 돌담을 보고 강한 인상을 받게 된다 한국인이라는 뿌리를 가지고 있지만 모국의 문화와 언어 등 모든 것이 낯설었던 그에게 자신의 정체성에 대해 돌아보게 되는 계기가 된 것이다 이후 1987년 &lt;색의 위치&gt; 시리즈를 발표한 전시에서 한국을 방문한 사건이 작품의 변화에 직접적인 영향을 미쳤음을 밝혔다 손아유는 그 순간을 카타스트로프라고 표현하였다 그에게 한국 방문은 재일코리안으로서 내재되어 있던 정체성의 혼란을 야기하게 된 동시에 앞으로 예술 활동의 방향성을 제시해 준 것이다 이후 화려한 색과 유려한 선으로 수많은 존재들이 자신의 위치를 찾아가는 우주를 표현하며 재일코리안에 국한되지 않고 이를 넘어선 정체성에 대한 고찰을 작품에 담아낸다1997년 손아유는 자신의 20여 간의 작품을 정리해 발간한 작품집 「The works of Son Ahyou  Color Undulation  Body Matter Cosmos」에서 자신이 평생 동안 추구해온 예술 세계를 신체 물질 우주라는 세 개의 주제로 제시하였다 《1978년 돌담 아래》는 1978년 한국의 돌담을 본 사건의 영향을 받은 &lt;색의 위치&gt; 시리즈 제작을 전·후로 나누어 그가 말하고자한 세 가지 주제와 작품의 변화를 입체적으로 이해할 수 있도록 마련하였다 3전시실에는 신체 물질1970년 후반  1980년 중반을 주제로 반복된 행위의 기록으로서 작가의 신체성과 동판·먹·목탄 등 본연의 물질성을 강조한 작품으로 구성하고 4전시실은 선과 색으로 우주를 표현1980년 중반  1990년하며 재일코리안 작가로서 정체성을 확인해 가는 과정을 공유하고자 한다
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6070&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_208030_3534906791_yT7moRH1.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">신화를 담다: 꺼지지 않는 불꽃</p>
											<p class="date">2021-09-14 ~ 2022-01-09</p>
											<div class="cont">
												신화를 담다 꺼지지 않는 불꽃이 전시는 50여 년 전 영일만에 세계 최고의 제철소를 세운 수많은 ‘이름 없는 영웅들’의 서사이다 그 무렵 포항제철이 들어선 포항의 영일만 일대는 그야말로 허허벌판 황무지였다 자본도 기술도 경험도 없는 상태에서 오로지 할 수 있다는 도전정신 만으로 ‘영일만의 기적’을 탄생시켰고 ‘영일만의 신화’를 이뤘다 모두가 불가능하다고 했던 이 국가적 희망을 현실로 만들 수 있었던 것은 산업 현장의 주역들인 ‘이름 없는 영웅들’의 땀과 노력 그리고 희생이 있었기 때문이었다 여기에는 또한 ‘제철보국製鐵報國’의 사명 의식과 ‘우향우右向右’ 정신으로 철강 불모지를 철강 강국으로 우뚝 서게 한 박태준이 있었기에 가능했다 그들은 가난한 조국을 부강한 나라로 만들기 위해 시대적 사명감으로 결연한 의지를 가지고 다음 세대의 밝은 미래를 위해 결코 희생을 아끼지 않았다 그들은 오늘날 시대의 은유이자 서사로 존재한다 우리는 그들을 통해 사회의 가치를 인정하고 나누며 더 나은 세상으로 나아가기 위해 삶을 되돌아보고 목표를 다잡는다 영웅이란 흔히 대의를 위해 기꺼이 자신을 내던지는 사람 또는 의인들을 일컫는다 보편적으로 보통 사람이 하기 어려운 일을 해내는 사람을 뜻하기도 한다 세상에는 수많은 정의의 영웅이 존재한다 과거의 영웅이 신화 속에 존재하는 가상의 인물이었다면 근현대 사회의 전환기 영웅은 국가건설 산업화 혹은 민주화 등의 주역으로 평가받는 실존 인물이다 영웅은 더 이상 비범한 능력의 소유자를 지칭하는 것이 아니라 시대를 표상하는 또는 사회적 조건에 따라 발견되거나 창조되는 가치이다 더 넓은 의미로는 역사적 주체로서 시대를 살아가는 삶의 태도와 방식을 상징하는 또 다른 이름이다 《신화를 담다 꺼지지 않는 불꽃》은 세 개의 갈래로 구성된다 먼저 삶의 서사를 펼친다 여기서는 개인의 내면과 공동체의 연대 즉 자기 발견을 넘어 삶을 사유하는 공간과 시간을 만들어나간다 두 번째 공간에서는 지금 현재 우리의 삶이 지속되고 있는 도시와 사회를 펼친다 산업화 시대의 상징이자 산업도시 포항을 증언하는 현장을 통해 개인과 시대를 압축적으로 전달한다 그리고 마지막에 인물이 있다 한국 근현대사의 비극 속에서 자신의 운명을 수용하고 순교자적 사명감과 공公을 위한 결사의 각오로 자신을 내던진 그와 그들을 마주하며 시대를 관통하는 영웅의 의미를 되새기고자 한다 
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6060&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_208030_3534906791_dQYlUmaf.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">주한세르비아대사관 협력전 - 블라디슬라브 스체파노비치</p>
											<p class="date">2021-05-25 ~ 2021-08-29</p>
											<div class="cont">
												한 화가의 증언블라디슬라브 스체파노비치는 파이터다 복싱 경기장에서나 캔버스
위에서나 이 거구의 예술가가 맞서 싸우는 대상은 다른 무엇보다도 자신의 그림자다 그림자는 땅 위에 두 발을 딛고 선 자에게 하늘의 빛이 드리울 때 생겨나는 것이다 몸을 지닌 자를 두고 대지와 세계 사이의 팽팽한 긴장이 벌어지는 순간 대지의
끝 모를 심연이 비로소 가시화되는 존재론적 사건이 바로 그림자인 셈이다 세상에 내던져진 존재로서 화가는
순간순간 자세를 바꾸어 가며 어렴풋한 실루엣으로 드러났다 잡히지 않은 채 끊임없이 움직이는 그림자와 결투를 벌인다 그가 명민하게 포착하려는 것은 이 대결을 통해 진실이 드러나는 찰나이다 마치
예언자 엘리야가 목숨의 위협을 무릅쓰고 신탁을 전하듯 스체파노비치는 캔버스 위로 가히 폭발적인 에너지를
쏟아내며 이 시대 우리가 살아가는 세상의 진실을 거침없이 증언한다 &nbsp;소프트웨어 기업의 알고리즘에 잠식된 정신 세계화된 자본주의의
탐욕스러운 질주 도처에 난무하는 폭력과 전쟁 오늘날 우리
일상을 지배하는 이러한 거대 구조는 스체파노비치의 화폭에서 팝 아트의 에토스로 해체되고 재구성된다 익숙한
대중매체 속 이미지들이 펼쳐지는 가운데 전장戰場과 시장市場에 내몰린
아이들의 처연한 눈빛은 여전히 순수하고 쓰레기 더미가 나뒹구는 뉴욕의 번화가에도 성모자聖母子는 강림한다 성스러운
것과 세속적인 것 번영과 파멸 – 얼핏 거리가 멀어 보이는
것들이 실은 서로 얽혀 하나의 별자리를 구성하고 있다는 진실을 화가는 드러내 보인다 예술작품은 땅과
하늘 필멸의 존재와 불멸의 존재를 한 자리에 불러들여 세계를 생성하는 진리 사건이라고 하이데거는 규정한
바 있다 마찬가지로 스체파노비치는 이러한 예술의 본성이야말로 인류 문명의 마지막 수단이라 여기며 기꺼이
전사가 되어 악마의 놀음에 일격을 가한다&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6059&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
									<li>
										<div class="img" style="text-align:center; ">
											<img src="images/editor_208030_3534906791_My9OBcw2.jpg" alt="">
										</div>
										<div class="text">
											<p class="tit">제16회 장두건미술상 수상작가 김은솔 : 기억의 파동</p>
											<p class="date">2021-05-25 ~ 2021-08-29</p>
											<div class="cont">
												 포항시립미술관은 제16회 장두건미술상 수상작가 김은솔의 전시 《기억의 파동》을 개최한다 장두건미술상은 한국 근·현대미술을 대표하는 초헌 장두건 선생의 예술 업적을 기리고 지역 미술 발전을 위해 2005년에 제정되었다 매년 공모를 통해 선정한 수상작가에게 이듬해 개인전을 지원함에 따라 2020년 수상작가인 김은솔의 전시를 마련하였다&nbsp;&nbsp; 수상작가 김은솔은 포항 흥해 출신으로 사회적 이슈에 대한 관심을 이와 상응하는 기술적 매체로 표현하는 작업을 이어오고 있다 삶과 맞닿아 있는 환경·재난·역사와 테크놀로지 간의 관계성에 집중하며 과학기술에 대해 비판적이거나 낙관적인 태도에서 벗어나 삶기술의 경계에서 인간의 태도와 관점의 방향성을 이야기한다&nbsp;&nbsp; 《기억의 파동》에서는 2018년 포항 지진 코로나바이러스 감염증19이하 코로나19와 같이 작가가 직접 마주한 재난 상황과 미디어 매체를 통해 소비되는 재난의&nbsp;이면을 작품으로 선보인다 지진의 데이터와 텔레비전 조정 화면 등 객관적이고 중립적인 이미지와 이를 소리로 치환한 작품은 재난을 공감각적으로 인식하도록 유도한다 작가의 경험에서 비롯된 일련의 작품들이지만 김은솔은 본인이 겪은 재난에 감정적 공감을 요구하거나 매스컴의 재난 이미지에 대해 고발적 태도를 취하지 않는다 《기억의 파동》은 재난의 경험자수용자매체를 통한창작자예술로서로 위치에 따라 변화하는 작가의 시각을 조망하고자한다 이러한 변화는 재난의 기억으로부터 작업으로까지 파동처럼 번진 일련의 과정인 것이다&nbsp;&nbsp; 《기억의 파동》은 김은솔의 작품과 함께 재난 피해자와 지질 연구원 및 언론인의 인터뷰를 함께 제시한다 이를 통해 재난을 겪지 않았거나 재난을 매체로 수용하는 이들에게 다각적인 재난의 이면을 제공하고 소통을 시도한다 《기억의 파동》으로 우리는 재난의 다각적 경험을 공유하고 참여하는 관계 속에서 재난을 직접 겪지 않아 온전히 알 수 없는 재난 밖이라는 위치를 허물고자 한다 
											</div>
											<div class="detail_btn_wrap">
											<a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=read&amp;idx=6042&amp;page=1" class="detail_btn">자세히 보기</a>
											</div>
										</div>
									</li>
								</ul>
							</div>

							<div class="btn_wrap alignR">
								<!--
								<a href="/poma/p_exh/e_past/?boardTheme=webjine" class="bg_blue">목록</a>
								-->
							</div>

							<div class="paging_wrap">
						        <a href="#" class="page_num current">1</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=2" class="page_num">2</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=3" class="page_num">3</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=4" class="page_num">4</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=5" class="page_num">5</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=6" class="page_num">6</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=7" class="page_num">7</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=8" class="page_num">8</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=9" class="next_page">&nbsp;</a><a href="?boardTheme=webjine&amp;skw=&amp;md=pas&amp;mode=list&amp;page=17" class="last_page">&nbsp;</a>
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
