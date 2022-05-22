# 데이터베이스 전부 백업
$ mysqldump -u root museum > museum_20220523.dump.sql

# 데이터베이스 전부 리스토어
$ mysql -u root museum < museum_20220523.dump.sql