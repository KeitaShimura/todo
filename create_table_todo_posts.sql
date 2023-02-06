CREATE TABLE IF NOT EXISTS todo.posts (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    content TEXT NOT NULL,
    created_at DATETIME,
    updated_at DATETIME
);

