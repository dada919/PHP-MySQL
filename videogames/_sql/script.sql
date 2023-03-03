DROP DATABASE IF EXISTS videogames;

CREATE DATABASE videogames;

CREATE TABLE videogames.game(
    id TINYINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    release_date DATE NOT NULL,
    poster VARCHAR(255) NOT NULL,
    price DECIMAL(5, 2) NOT NULL
);

INSERT INTO videogames.game (id, title, description, release_date, poster, price) VALUES
(NULL, 'Son of the Forest', 'Survie', '2023-02-28', 'https://cdn.akamai.steamstatic.com/steam/apps/1326470/header.jpg?t=1677179639', 28.99),
(NULL, 'The Forest', 'Survie', '2015-05-30', 'https://cdn.cloudflare.steamstatic.com/steam/apps/242760/capsule_616x353.jpg?t=1666811027', 10),
(NULL, 'Phasmophobia', ' jeu d horreur', '2020-09-18', 'https://cdn.cloudflare.steamstatic.com/steam/apps/739630/capsule_616x353.jpg?t=1674232976', 15.99);