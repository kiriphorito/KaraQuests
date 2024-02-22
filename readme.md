KaraQuests

KaraQuests is a web application that allows you to store a database of your songs that users can then use to search through and add songs they wish to sing to a playlist.

This project was first made with the intention to work with UltraStar and another project UltraStarCSVIndexer (https://github.com/kiriphorito/UltraStarCSVIndexer) which creates a CSV which lists all the songs that you have which can be imported so you don't have to type in every entry. But it is very generic.

# Prerequisite
We need a MySql database for this application to work. This can be achieved with docker command:
docker run --name some-mysql -e MYSQL_ROOT_PASSWORD=password -e MYSQL_DATABASE=karaquests -p 3306:3306 -d mysql

Or you can do docker compose up

# Prerequisite
composer install
php artisan key:generate
php artisan migrate
