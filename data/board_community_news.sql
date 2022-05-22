-- 장두건미술상
INSERT INTO museum_board 
(wdate, userid, nickname, subject, category, title, file, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'community', 'news',
'장두건미술상',
'',
'<h2>장두건 미술상</h2>
<div class="flexbox start" style="align-items:center;white-space:initial;">
  <div class="flexbox column start" style="margin-right:10px">
    <p>포항시에서는 한국 근·현대미술을 대표하는 화가이자 포항미술의 초석을 마련한 故 초헌(草軒) 장두건(張斗建) 선생의 예술정신을 기리기 위해
    매해 ‘장두건미술상’ 선정 작가를 공모합니다.</p><br>
    <table style="border-top:1px solid #eee;border-bottom:1px solid #eee;">
      <tr>
        <td>주      최</td>
        <td>포항시</td>
      </tr>
      <tr>
        <td>주      관</td>
        <td>장두건 미술상 운영위원회</td>
      </tr>
      <tr>
        <td>시상부문</td>
        <td>미술 전 장르</td>
      </tr>
      <tr>
        <td>시상내용</td>
        <td>장두건미술상(1명)<br>
          포항시장 상패 및 창작지원금 8,000,000원<br>
          수상 다음 해 포항시립미술관 <장두건미술상 수상작가전> 개최</td>
      </tr>
      <tr>
        <td>서류교부 및<br> 검수기간</td>
        <td>매해 3~4월 예정</td>
      </tr>
    </table>
  </div>
  <div class="flexbox" style="width:630px;padding:5px;border:1px solid #aaa;">
    <img src="files/community/news/jangdogun.jpg">
  </div>
<div>'
);

