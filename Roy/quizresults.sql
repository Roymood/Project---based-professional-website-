CREATE DATABASE quiz_app;

USE quiz_app;

CREATE TABLE quiz_results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    score INT NOT NULL,
    total_questions INT NOT NULL,
    percent_score INT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
