#Retrieving a Result Set
SELECT * FROM movies;
SELECT movies.title, movies.year FROM movies;
SELECT movies.year, movies.title FROM movies;
SELECT year, title FROM movies;
SELECT title, year FROM movies;
SELECT title FROM movies;

#Querying Tables
SELECT * FROM movies WHERE year = 1999;
SELECT * FROM movies WHERE year != 1999;
SELECT * FROM movies WHERE year > 1999;
SELECT * FROM movies WHERE year >= 1999;
SELECT * FROM movies WHERE year < 1999;
SELECT * FROM movies WHERE year <= 1999;
SELECT * FROM movies WHERE year = 1999 AND title = "The Matrix";
SELECT * FROM movies WHERE year = 1998 OR year = 2000;
SELECT * FROM movies WHERE year BETWEEN 1998 AND 2000;
SELECT * FROM movies WHERE title LIKE "godfather";
SELECT * FROM movies WHERE title LIKE "%godfather";
SELECT * FROM movies WHERE title LIKE "%godfather%";

#Ordering the Result Set
SELECT * FROM movies ORDER BY year;
SELECT * FROM movies ORDER BY year DESC;
SELECT * FROM movies ORDER BY year ASC;
SELECT * FROM movies ORDER BY year ASC, title DESC;

#Limiting the Result Set
SELECT * FROM movies LIMIT 10;
SELECT * FROM movies LIMIT 10 OFFSET 1;
SELECT * FROM movies LIMIT 10 OFFSET 0;
SELECT * FROM movies LIMIT 10 OFFSET 10;
SELECT * FROM movies LIMIT 10 OFFSET 20;
SELECT * FROM movies LIMIT 10 OFFSET 250;
SELECT * FROM movies LIMIT 20, 10;

SELECT * FROM movies LIMIT 0, 1000;
SELECT * FROM actors LIMIT 0, 1000;

#Dealing with NULL
SELECT * FROM movies WHERE year IS NULL;
SELECT * FROM movies WHERE year IS NOT NULL ORDER BY year;
