-- SQLにデータを追加
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('A','t01@com',20,'あ',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('B','t02@com',20,'あ',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('C','t03@com',20,'あ',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('D','t04@com',20,'あ',sysdate());
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES('E','t10@com',20,'あ',sysdate());
INSERT INTO gs_bm_table(bookName,bookUrl,bookComment,createdTime)VALUES('test','https://www.test1.com','あaaaaaa',sysdate());

-- データの検索
SELECT * FROM gs_an_table;
SELECT name,email FROM gs_an_table;
SELECT * FROM gs_an_table WHERE id >= 1 AND id<=3;
SELECT * FROM gs_an_table WHERE indate LIKE '2024-05%';
SELECT * FROM gs_an_table WHERE email LIKE '%@gmail.com';
SELECT * FROM gs_an_table WHERE email LIKE '%@%';
SELECT * FROM gs_an_table WHERE email LIKE '%1%';

-- SELECT * FROM テーブル名 ORDER BY カラム DESC/ASK;
SELECT * FROM gs_an_table ORDER BY indate DESC;

-- SELECT * FROM テーブル名 (ORDER BY カラム) LIMIT 数;
-- LIMIT 5;は5行のデータを取得することを意味します。
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3;

-- SELECT * FROM テーブル名 (ORDER BY カラム) LIMIT 数,数;
-- LIMIT 3,5;は、結果セットの4行目（0から始まるため、3は4行目を意味します）から始まり、5行のデータを取得することを意味します。
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3,5;

-- insert.php用
INSERT INTO gs_an_table(name,email,age,naiyou,indate)VALUES(:name,:email,:age,:naiyou,sysdate());
