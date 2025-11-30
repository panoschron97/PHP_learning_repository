CREATE DATABASE IF NOT EXISTS sql_injection;
--
USE sql_injection;
--
CREATE TABLE IF NOT EXISTS users
(
id INTEGER AUTO_INCREMENT,
username VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
password VARCHAR(255) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(id),
CONSTRAINT username_unq UNIQUE(username),
CONSTRAINT email_unq UNIQUE(email)
);
--
SELECT * FROM users;
--
INSERT INTO users(username, email, password) VALUES("panos", "panos_chron@hotmail.com", "hashed_password1"),
("nikos", "nikos_chron@hotmail.com", "hashed_password2"),
("alexis", "alexis_chron@hotmail.com", "hashed_password3"),
("sotiris", "sotiris_chron@hotmail.com", "hashed_password4"),
("giwrgos", "giwrgos_chron@hotmail.com", "hashed_password5"),
("manos", "manos_chron@hotmail.com", "hashed_password6"),
("arman", "arman_chron@hotmail.com", "hashed_password7"),
("dimitris", "dimitris_chron@hotmail.com", "hashed_password8"),
("zisis", "zisis_chron@hotmail.com", "hashed_password9"),
("kostas", "kostas_chron@hotmail.com", "hashed_password10");
COMMIT;
--
SELECT * FROM users;
--
SELECT * FROM users WHERE id NOT IN (1, 2);
SELECT * FROM users WHERE id NOT IN (1, 2, NULL);
SELECT * FROM users WHERE id <> 1 AND id <> 2;
SELECT * FROM users WHERE id <> 1 AND id <> 2 AND id <> NULL;
SELECT * FROM users WHERE id <> 1 AND id <> 2 AND id IS NOT NULL;
--
SELECT * FROM users WHERE id <> 1 OR id <> 2;
SELECT * FROM users WHERE id <> 1 OR id <> 2 OR id <> NULL;
SELECT * FROM users WHERE id <> 1 OR id <> 2 OR id IS NOT NULL;
--
ALTER TABLE users AUTO_INCREMENT = 1;
--
DELETE FROM users;
COMMIT;
--
TRUNCATE TABLE users;
--
ALTER TABLE users DROP CONSTRAINT email_unq;
--
ALTER TABLE users DROP CONSTRAINT username_unq;
--
DROP TABLE IF EXISTS users;
--
DROP DATABASE IF EXISTS sql_injection;