# exam-preparation-portal
final year project

CREATE DATABASE exam_portal;
USE exam_portal;

-- Admin table
CREATE TABLE admins (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
password VARCHAR(255)
);

-- Notes
CREATE TABLE notes (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(200),
subject VARCHAR(100),
file VARCHAR(255)
);

-- Past Papers
CREATE TABLE past_papers (
id INT AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(100),
year INT,
file VARCHAR(255)
);

-- Model Papers
CREATE TABLE model_papers (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(200),
subject VARCHAR(100),
file VARCHAR(255)
);


CREATE TABLE quiz_questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT,
    option1 VARCHAR(255),
    option2 VARCHAR(255),
    option3 VARCHAR(255),
    option4 VARCHAR(255),
    correct_answer CHAR(1)
);



INSERT INTO admins (username, password)
VALUES ('Yeshi', '623002');


