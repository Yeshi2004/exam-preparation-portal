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


CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
);

INSERT INTO admin (username, password)
VALUES ('admin', '1234');

INSERT INTO quiz_questions 
(question, option1, option2, option3, option4, correct_answer)
VALUES
('What is 2 + 2?', '2', '3', '4', '5', 'C'),
('Capital of India?', 'Mumbai', 'Delhi', 'Kolkata', 'Chennai', 'B');

