-- sudo mysql   # or: mysql -u'root' -p

CREATE DATABASE sample_db;

-- SHOW DATABASES;
-- SHOW SCHEMAS;

CREATE USER 'sample_db_admin'@'localhost' 
    IDENTIFIED WITH mysql_native_password BY 'use-strong-password';

GRANT USAGE ON *.* TO 'sample_db_admin'@'localhost';

ALTER USER 'sample_db_admin'@'localhost'
    REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 
    MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `sample_db`.* 
    TO 'sample_db_admin'@'localhost' WITH GRANT OPTION;

FLUSH PRIVILEGES;

-- SELECT User FROM mysql.user;
-- SELECT user,host,plugin FROM mysql.user WHERE user = 'sample_db_admin';
-- SHOW GRANTS FOR 'sample_db_admin'@'localhost';

USE sample_db;

CREATE TABLE posts (
    post_id INT AUTO_INCREMENT,
    post_title VARCHAR(255) NOT NULL,
    post_descr VARCHAR(255) NOT NULL,
    post_content TEXT NOT NULL,
    PRIMARY KEY (post_id)
);

-- SHOW TABLES;
-- DESCRIBE posts;

INSERT INTO posts (post_id, post_title, post_descr, post_content)
    VALUES (null, 'Post 1', 'Description of Post 1.', 'This is the content of Post 1. Have fun.');

INSERT INTO posts (post_id, post_title, post_descr, post_content)
    VALUES (null, 'Post 2', 'Description of Post 2.', 'This is the content of Post 2. Have fun.');

INSERT INTO posts (post_id, post_title, post_descr, post_content)
    VALUES (null, 'Post 3', 'Description of Post 3.', 'This is the content of Post 3. Have fun.');

INSERT INTO posts (post_id, post_title, post_descr, post_content)
    VALUES (null, 'Post 4', 'Description of Post 4.', 'This is the content of Post 4. Have fun.');

--  SELECT * FROM posts;