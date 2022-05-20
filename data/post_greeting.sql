-- 인사말
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'greeting',
'인사말',
'<div class=\"text_wrap greeting_wrap\">
<p>영일만과 포항시가지가 한눈에 내려다보이는 공원 속에 자리 잡은 포항시립미술관은 2009년 12월 22일 개관하였습니다. 우리 미술관은 포항문화의 근간인 Steel을 테마로 Steel Art 컬렉션과 전시기획에 주력하고 있습니다.</p>
			
<p>예술의 고유한 속성이라 여겨왔던 창의성이 지식기반사회의 화두로 떠오르고 있는 지금, 포항시립미술관은 다양한 프로그램으로 예술적 가치의 확산을 위한 환경과 생태를 조성하고, 예술의 창조, 교류, 순환하는 과정을 매개하는 길잡이로서 그 역할을 해나가겠습니다.</p>
			
<p>미술관이 있어 행복한 도시 포항, 창조적(creative)이고 친근(friendly)하며 밝고(bright) 생동감 넘치는(convivial) 포항, 포항시립미술관은 모두의 친구(Partner)가 되기를 소망합니다.</p>
			

<p class=\"alignR\">포항시립미술관장<img src=\"images/greeting_sign.gif\" alt=\"\" class=\"sign\"></p>
</div>'
);

-- 정체성, 미션
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'vision',
'정체성·미션',
'<div class=\"text_wrap\">
    <h3 class=\"cont_tit\">정체성</h3>
    <div class=\"identity_wrap\">
        <div class=\"img\"><img src=\"images/identity_img01.jpg\" alt=\"\"></div>
        <div class=\"txt\">
            <div class=\"inner\">
                <p class=\"txt1\">포항시립미술관은<br>세계 유일의 스틸아트 미술관입니다.</p>
                <p class=\"txt2\">지역의 역사적·문화적 정체성은 ‘철’이라는 재료 속에 <br>상징적으로 녹아 있습니다.</p>
                <p class=\"txt2\">철의 탄생이 인류 문명사의 급진적 전환을 이끌었듯이 우리<br> 미술관은 스틸아트를 통해 ‘삶 속에서 예술이, 예술 속에 삶’이<br>호흡하는 신철기시대(neo-iron age)를 열어가고자 합니다.</p>
            </div>
        </div>
    </div>
</div>


<div class=\"text_wrap\">
    <h3 class=\"cont_tit\">미션</h3>
    <div class=\"mission_wrap alignC bdTop\">
        <img src=\"images/mission_img01.png\" alt=\"\">
    </div>
</div>



<div class=\"text_wrap\">
    <h3 class=\"cont_tit\">연혁</h3>
</div>
<div class=\"history_wrap bdTop alignC pc_ver\">
    <div class=\"inner\">
        <dl class=\"first\">
            <dt><img src=\"images/history_y_img01.png\" alt=\"2006년\"></dt>
            <dd>
                <ul>
                    <li><span class=\"date\">11/15</span> 미술관 건립공사 착공</li>
                </ul>
            </dd>
        </dl>
        <dl>
            <dt><img src=\"images/history_y_img02.png\" alt=\"2009년\"></dt>
            <dd>
                <ul>
                    <li><span class=\"date\">11/15</span> 미술관  본관동 준공</li>
                    <li><span class=\"date\">12/22</span> 미술관 개관  </li>
                </ul>
            </dd>
        </dl>
        <dl>
            <dt><img src=\"images/history_y_img03.png\" alt=\"2010년\"></dt>
            <dd>
                <ul>
                    <li><span class=\"date\">03/31</span> 증설수장고 준공</li>
                </ul>
            </dd>
        </dl>
    </div>
</div>'
);
