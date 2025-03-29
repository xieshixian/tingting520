CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(255) NOT NULL,
                       email VARCHAR(255) UNIQUE NOT NULL
);

INSERT INTO users (name, email) VALUES ('John Doe', 'john@example.com');

INSERT INTO users (name, email) VALUES ('John Doe22', 'john@example22.com');