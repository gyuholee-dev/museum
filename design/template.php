<?php
require_once 'includes/init.php';
require_once 'includes/elements.php';
?>
<html>
<head><?=makeHead()?></head>
<body>
  <header id="header"><?=makeHeader()?></header>

  <main id="container">
    <!-- visual -->
    <div id="h_visual">
      <div id="imgslide">
        <div class="imgs">
          <img src="images/001.jpg">
          <img src="images/002.jpg">
          <img src="images/001.jpg">
          <img src="images/002.jpg">
          <img src="images/001.jpg">
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

                <a style="background: url(images/220506_sub.jpg) center center / 260px 265px no-repeat; display: block;"
                  href="#" class="view01">현재전시 포스터</a>
              </div>
            </div>
            <div class="box cont02">
              <p class="tit">교육 <span class="eng">Program</span></p>
              <div class="inner">
                <ul>
                  <li>
                    <div class="img"><img src="images/tn219_208030_3534906791_yiETpBKW.png" alt=""
                        style="width:219px; height:75px;"></div>
                    <div class="txt">
                      <a href="#" class="tit">2022년 5월 전시 도슨트 자원봉사자 전시교육</a>
                      <span class="state end">접수마감</span>
                      <span class="date">2022-05-02 - 2022-06-07</span>
                      <span class="object">미술관에서 활동중인 POMA 도슨트</span>
                    </div>
                  </li>
                  <li>
                    <div class="img"><img src="images/tn219_208030_831464884_8DVaPQM3.jpg" alt=""
                        style="width:219px; height:75px;"></div>
                    <div class="txt">
                      <a href="#" class="tit">「메타픽션 : 현실 그 너머」 전시 연계 청소년 프로그램 《 나를 닮은 사물들 》</a>
                      <span class="state end">접수마감</span>
                      <span class="date">2022-04-02 - 2022-04-02</span>
                      <span class="object">지역 내 중학교 학생</span>
                    </div>
                  </li>
                  <li>
                    <div class="img"><img src="images/tn219_208030_3534906791_gNJU7qAt.jpg" alt=""
                        style="width:219px; height:75px;"></div>
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
                <img src="images/more_btn.gif" class="pc_ver" alt="더보기">
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
              <a href="cm_noti/" class="more_btn">
                <img src="images/more_btn.gif" class="pc_ver" alt="더보기">

              </a>
            </div>
            <div class="box cont04">
              <div class="inner">
                <span class="txt"><a style="color:white; display:block;" target="_blank"
                    href="http://poma.pohang.go.kr/poma/p_coll/c_app/index.html">AR 도슨트 투어</a></span>

                <a href="cm_event/" class="more_btn">
                  <img src="images/more_btn.gif" class="pc_ver" alt="더보기">

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
                <a href="#"><img src="images/sec_img01.jpg" alt="소장품/도서 바로가기"></a>
              </li>
              <li>
                <p class="tit">미술관소개 <span class="eng">About POMA</span></p>
                <a href="#"><img src="images/sec_img02.jpg" alt="미술관소개 바로가기"></a>
              </li>
              <li>
                <p class="tit">스틸아트공방 <span class="eng">Steel Art Workshop</span></p>
                <a href="#"><img src="images/sec_img03.jpg" alt="스틸아트공방 바로가기"></a>
              </li>
              <li>
                <p class="tit">관람안내/예약 <span class="eng">Guide/Reservation</span></p>
                <a href="#"><img src="images/sec_img04.jpg" alt="관람안내/예약 바로가기"></a>
              </li>
            </ul>
          </div>
        </div><!-- //secondArea -->
      </div>
    </div><!-- //mCon -->
  </main><!-- //container -->


  <footer id="footer"><?=makeFooter()?></footer>

</body>
</html>