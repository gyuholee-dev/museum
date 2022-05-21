-- 인사말
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'greeting',
'인사말',
'내용'
);

-- 정체성, 미션
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'vision',
'정체성·미션',
'내용'
);

-- 시설현황
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'facility',
'시설현황',
'내용'
);

-- 조직도
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'organization',
'조직도',
'내용'
);

-- MI 소개
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'greeting', 'introduce',
'MI 소개',
'내용'
);
