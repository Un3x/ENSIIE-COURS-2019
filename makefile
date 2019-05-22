start:
	php -S localhost:8080 -t public

db.init:
	createdb ensiie
	psql -U ensiie -f ./data/db.sql ensiie

db.reset: db.drop db.init

db.drop:
	dropdb ensiie