<!-- <?php
   session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>포항시립미술관</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=2.0,minimum-scale=1.0">
<link rel="icon" href="images/slogo.png">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="scripts/script.js" defer="defer"></script>
</head>

<body> -->



<div id="container" class="sub">
	<!-- sCon -->
	<div id="sCon">
		<!-- lnb -->
		<div id="lnb">
			<h2>관람안내</h2>
			<ul>
				<li class=""><a href="/poma/p_guid/g_guide/">관람안내</a></li>
				<li class=""><a href="/poma/p_guid/g_contact/">오시는길</a></li>
				<li class="active"><a href="/poma/p_guid/g_reser/?mode=write">단체관람예약</a></li>
				<li class=""><a href="/poma/p_guid/g_facility/">편의시설</a></li>
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
					<span class="loc2 arrow">단체관람예약</span>
				</div>
				<div class="sub_tit">
					<h3>단체관람예약 <span class="eng">Group Booking</span></h3>
				</div>
				<div class="inner">

    <div class="application_wrap">
				<div class="section clearAfter">
					<div class="section_tit">
	<form name="grewriteform" id="grewriteform" action="#수정하기" method="post">						
						<p>STEP 1</p>
					</div>
					<div class="section_cont">
						<dl class="dlType04">
							<dt>관람일자 입력</dt>
							<dd>
							<input type="text" name="g_re_date"></dd>
						</dl>
						<dl class="dlType04">
							<dt>관람시간 입력</dt>
							<dd>
							<select name="g_re_time">
								<option value="10:00">10:00-11:00</option>
								<option value="11:00">11:00-12:00</option>
								<option value="13:00">13:00-14:00</option>
								<option value="14:00">14:00-15:00</option>
								<option value="15:00">15:00-16:00</option>
								<option value="16:00">16:00-17:00</option>
								<option value="17:00">17:00-18:00</option>
		                    </select>
						    </dd>
						</dl>
						<dl class="dlType04">
							<dt>관람인원수 입력</dt>
							<dd>
							<input type="text" name="g_re_num"></dd>
						</dl>

				</div>
			</div>
		</div>

    <div class="application_wrap bdT0">
		<div class="section clearAfter">
			<div class="section_tit">
				<p>STEP 2</p>
			</div>
			<div class="section_cont">
				<ul class="ulType01">
					<li>
						<dl class="dlType03">
							<dt>단체구분</dt>
							<dd>
								<ul class="ulType02">
									<li><input type="radio" id="child" name="ib_gubun" value="1" onclick="gubunClick('미취학')"> <label for="child">미취학</label></li>
									<li><input type="radio" id="elementary" name="ib_gubun" value="2" onclick="gubunClick('초등부')"> <label for="elementary">초등부</label></li>
									<li><input type="radio" id="middle" name="ib_gubun" value="3" onclick="gubunClick('중등부')"> <label for="middle">중등부</label></li>
									<li><input type="radio" id="hight" name="ib_gubun" value="4" onclick="gubunClick('고등부')"> <label for="hight">고등부</label></li>
									<li><input type="radio" id="university" name="ib_gubun" value="5" onclick="gubunClick('대학(원)')"> <label for="university">대학(원)</label></li>
									<li><input type="radio" id="adult" name="ib_gubun" value="6" onclick="gubunClick('성인')"> <label for="adult">성인</label></li>
								</ul>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="dlType03">
							<dt>단체기관</dt>
							<dd><input min="0" name="subject"></dd>
						</dl>
					</li>
					<li>
						<dl class="dlType03">
							<dt>신청자 정보</dt>
							<dd>
								<div class="apply_tbl_wrap">
									<table class="apply_tbl noBd">
										<tbody>
											<tr>
												<th class="alignL th">이름</th>
												<td class="alignL td"></td>
											</tr>
											<tr>
												<th class="alignL th">휴대폰번호</th>
												<td class="alignL td"></td>
											</tr>
											<tr>
												<th class="alignL th">이메일</th>
												<td class="alignL td"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</dd>
						</dl>
					</li>
					<li>
						<dl class="dlType03">
							<dt>인원</dt>
							<dd>
							  <div class="apply_tbl_wrap">
								<table class="apply_tbl noBd">
								  <tbody>
									<tr>
									  <th class="alignL th">관람인원</th>
									  <td class="alignL td"><input value="0" min="0" class="checkNumer" name="ib_cnt" onkeyup="inputChange(this)"> 명</td>
									</tr>
									<tr>
									  <th class="alignL th">인솔자인원</th>
									  <td class="alignL td"><input value="0" min="0" class="checkNumer" name="ib_reader_cnt" onkeyup="inputChange(this)"> 명</td>
									</tr>
									<tr>
										<td colspan="2" class="alignL td">
										※ 단체는 인솔자는 필수이며, 어린이의 경우 15명당 인솔자 1인 필수입니다.
										</td>
									</tr>
								  </tbody>
								</table>
							  </div>
							</dd>
						</dl>
					</li>
					<li>
					  <dl class="dlType03">
						<dt>기타사항</dt>
						<dd><textarea name="content" cols="70"></textarea></dd>
					  </dl>
					</li>
				</ul>
			</div>
		</div>
	</div>

    <div class="application_wrap bdT0">
      <div class="section clearAfter">
        <div class="section_tit">
          <p>관람예절</p>
          <span class="stxt emph_red">※ 관람예절을 끝까지 <span class="br"></span>읽으셔야 예약이 가능합니다.</span>
        </div>
        <div class="section_cont padT10 padB10">
          <div class="terms">모두를 위한 공공 미술관입니다.
            바람직한 전시문화와 관람예절을 함께 만들어 갈 수 있도록 아래 사항에 대한 각별한 주의를 부탁합니다.

            - 입장 및 전시 관람은 천천히, 여유 있게 하시기 바랍니다.
            - 입장하기 전, 휴대폰을 꺼주시거나 진동으로 전환해주시기 바랍니다.
            - 전시장 바닥의 선이나 줄은 작품을 보호하기 위한 선이니 침범에 주의 바랍니다.
            - 아이들이 차분히 전시관람 할 수 있도록 부모님 및 인솔자의 세심한 배려 바랍니다.
			- 다른 관람객에게 방해가 되지 않도록 유의해주시기 바라며, 관람예절을 지키지 않아 타인의 관람에 피해를 줄 경우 관람을 제한 할 수 있습니다.
          </div>
        </div>
      </div>
    </div>

    <div class="btn_wrap alignR">
      <a href="#">예약신청</a>
      <a href="#">신청취소</a>
    </div>


</form>

</div>
</div>
</div>
  </div>
  <!-- //contents -->


</div>


<!-- </body></html> -->