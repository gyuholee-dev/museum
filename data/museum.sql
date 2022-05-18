/* museum 뮤지엄
*/
CREATE DATABASE museum;

/* post 포스트
postid 인덱스: 자동증가 정수
wdate 날짜: 타임스탬프
userid 작성자 id
nickname 작성자 이름
subject 주제:
category 분류:
title 타이틀
content 내용
file 파일
link 링크
*/
DROP TABLE IF EXISTS museum_post;
CREATE TABLE museum_post (
  postid INT AUTO_INCREMENT,
  wdate INT,
  userid CHAR(20),
  nickname VARCHAR(20),
  subject CHAR(20),
  category CHAR(20),
  title VARCHAR(80),
  content TEXT,
  file VARCHAR(80),
  link VARCHAR(80),
  PRIMARY KEY(postid)
);


/* user 유저
userid 아이디
password 비밀번호
username 이름
email 이메일
avatar 아바타
link 링크
usergroup 권한그룹: admin, user
*/
DROP TABLE IF EXISTS museum_user;
CREATE TABLE museum_user (
  userid CHAR(20) NOT NULL,
  password BLOB,
  nickname VARCHAR(20),
  email VARCHAR(30),
  avatar VARCHAR(80),
  link VARCHAR(80),
  usergroup CHAR(10) DEFAULT 'user',
  PRIMARY KEY(userid)
);