-- https://mariadb.com/kb/en/mariadb/data-definition/
-- UNTESTED

DROP DATABASE IF EXISTS tradie_mm;
CREATE DATABASE tradie_mm;

USE tradie_mm;

-- 
CREATE TABLE tradie_users (
	user_id INT NOT NULL AUTO_INCREMENT,
	user_email VARCHAR(50) NOT NULL,
	user_phone VARCHAR(20),
	PRIMARY KEY (user_id)
)

CREATE TABLE tradie_requests (
	request_id INT NOT NULL AUTO_INCREMENT,
	location VARCHAR(200) NOT NULL,
	description TEXT NOT NULL,
	submission_date DATE NOT NULL,
	user_id INT NOT NULL,
	CONSTRAINT `fk_request_user`
		FOREIGN KEY (user_id) REFERENCES tradie_users (user_id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)

