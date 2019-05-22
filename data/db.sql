CREATE TABLE topics (
    id SERIAL PRIMARY KEY,
    name VARCHAR(50),
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);


INSERT INTO topics (name) VALUES ('Comment va-t-on a la fête de la bière');
INSERT INTO topics (name) VALUES ('Qui pour remplacer macron ?');
INSERT INTO topics (name) VALUES ('Le frexit et ses alternatives');
INSERT INTO topics (name) VALUES ('Comment on fait du php ?');
INSERT INTO topics (name) VALUES ('On fait quoi vendredi soir ?');
INSERT INTO topics (name) VALUES ('Lananas sur les pizza ?');
