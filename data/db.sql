CREATE TABLE "user" (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL ,
    password VARCHAR(255)
);

INSERT INTO "user" (email, password) VALUES ('toto@gmail.com', '$2y$10$oom33RO8kWk8yJswiG.UCunwKiW6sUPOirzNzog.GK0KHgTQaniY2');
INSERT INTO "user" (email, password) VALUES ('toto1@gmail.com', '$2y$10$oom33RO8kWk8yJswiG.UCunwKiW6sUPOirzNzog.GK0KHgTQaniY2');
INSERT INTO "user" (email, password) VALUES ('toto2@gmail.com', '$2y$10$oom33RO8kWk8yJswiG.UCunwKiW6sUPOirzNzog.GK0KHgTQaniY2');

CREATE TABLE topics (
    id SERIAL PRIMARY KEY,
    user_id INTEGER not null references "user"(id),
    name VARCHAR(50),
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);


INSERT INTO topics (name, user_id) VALUES ('Comment va-t-on a la fête de la bière', 1);
INSERT INTO topics (name, user_id) VALUES ('Qui pour remplacer macron ?', 1);
INSERT INTO topics (name, user_id) VALUES ('Le frexit et ses alternatives', 2);
INSERT INTO topics (name, user_id) VALUES ('Comment on fait du php ?', 2);
INSERT INTO topics (name, user_id) VALUES ('On fait quoi vendredi soir ?', 3);
INSERT INTO topics (name, user_id) VALUES ('Lananas sur les pizza ?', 3);

CREATE TABLE comments (
    id SERIAL PRIMARY KEY,
    user_id INTEGER not null references "user"(id),
    topic_id INTEGER NOT NULL references topics(id),
    text TEXT DEFAULT null,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);


INSERT INTO comments (topic_id, text, user_id) VALUES (1, 'Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while Im in a transitional period so I dont wanna kill you, I wanna help you. But I cant give you this case, it dont belong to me. Besides, Ive already been through too much shit this morning over this case to hand it over to your dumb ass.', 1);
INSERT INTO comments (topic_id, text, user_id) VALUES (1, 'commentaire 2', 1);
INSERT INTO comments (topic_id, text, user_id) VALUES (1, 'commentaire 3', 1);
INSERT INTO comments (topic_id, text, user_id) VALUES (2, 'commentaire 1', 2);
INSERT INTO comments (topic_id, text, user_id) VALUES (2, 'commentaire 2', 2);
INSERT INTO comments (topic_id, text, user_id) VALUES (2, 'commentaire 3', 3);
INSERT INTO comments (topic_id, text, user_id) VALUES (2, 'commentaire 4', 3);

CREATE TABLE votes (
    id SERIAL PRIMARY KEY,
    user_id INTEGER not null references "user"(id),
    comment_id INTEGER not null references comments(id),
    voteValue BOOLEAN,
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at TIMESTAMP default CURRENT_TIMESTAMP
);

insert into votes (comment_id, voteValue, user_id) VALUES (1, true, 1);
insert into votes (comment_id, voteValue, user_id) VALUES (1, true, 2);
insert into votes (comment_id, voteValue, user_id) VALUES (1, false, 3);

insert into votes (comment_id, voteValue, user_id) VALUES (2, false, 1);
insert into votes (comment_id, voteValue, user_id) VALUES (2, false, 2);
insert into votes (comment_id, voteValue, user_id) VALUES (2, false, 3);



