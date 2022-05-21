-- AR 도슨트 투어
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'collection', 'app',
'AR 도슨트 투어',
'https://poma.pohang.go.kr/poma/p_coll/c_app/index.html'
);
