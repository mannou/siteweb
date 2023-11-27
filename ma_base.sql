-- ma_base.sql
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    email TEXT NOT NULL
);
-- insert_data.sql
INSERT INTO utilisateurs (nom, email) VALUES
('John Doe', 'john.doe@email.com'),
('Jane Smith', 'jane.smith@email.com'),
('Alice Wonderland', 'alice.wonderland@email.com');
