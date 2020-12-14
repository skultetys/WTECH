To run this project you need to: 
    restore database eshop.sql in your postgreSQL client to create database used in this program
    run 'composer install' in terminal to load necessary packages
    configure database connection
    run 'php artisan migrate' in terminal to create database tables needed for this project to work
    run 'php artisan db:seed --class=ItemSeeder' in terminal to fill database with products