-- 도서
INSERT INTO museum_post 
(wdate, userid, nickname, subject, category, title, content) 
VALUES 
( UNIX_TIMESTAMP(), 'admin', '포항시립미술관', 'collection', 'book',
'도서',
'내용'
);
