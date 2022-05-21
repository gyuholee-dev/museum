-- 작품기증
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'collection', 'endowment',
'작품기증',
'내용'
);
