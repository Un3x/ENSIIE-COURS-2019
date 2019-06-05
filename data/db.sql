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

CREATE TABLE comments (
    id SERIAL PRIMARY KEY,
    topic_id INTEGER NOT NULL references topics(id),
    text TEXT DEFAULT null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);


INSERT INTO comments (topic_id, text) VALUES (1, 'commentaire 1');
INSERT INTO comments (topic_id, text) VALUES (1, 'commentaire 2');
INSERT INTO comments (topic_id, text) VALUES (1, 'commentaire 3');
INSERT INTO comments (topic_id, text) VALUES (2, 'commentaire 1');
INSERT INTO comments (topic_id, text) VALUES (2, 'commentaire 2');
INSERT INTO comments (topic_id, text) VALUES (2, 'commentaire 3');
INSERT INTO comments (topic_id, text) VALUES (2, 'commentaire 4');

CREATE TABLE votes (
    id SERIAL PRIMARY KEY,
    comment_id INTEGER not null references comments(id),
    voteValue BOOLEAN,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);

insert into votes (comment_id, voteValue) VALUES (1, true);
insert into votes (comment_id, voteValue) VALUES (1, true);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);
insert into votes (comment_id, voteValue) VALUES (1, false);