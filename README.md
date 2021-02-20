## Installation Guide
   1. git clone or download the repository
   2. create a database named "laravel-exam"
   4. open the terminal and run composer install
   5. run the command php artisan migrate:refresh --seed
   6. run the command php artisan key:generate
   7. to use the app run the command php artisan serve

## Routes

 * Get user
    - URL: /user/{id}
    - Method: Get
    - parameter : id

    fetch a user base on id

 * Add comment
    - URL: /add-comment
    - Method: POST

    add comment through validated form

 * Add comment via command
    - URL: api/add-comment-via-command
    - Method: POST

    add comment using command line through validated api

## Command

    Add comment using command line

    php artisan add:comment {id} {comment}

## User Data
    
    User one

    'id' => 1,
    'name' => 'User Test 1',
    'password' => passworduser1,

    User two

    'id' => 2,
    'name' => 'User Test 2',
    'password' => passworduser2,

## Unit Test
   to run a test run the command php artisan test or vendor/bin/phpunit

   note: if there is an error run the command php artisan config:clear and rerun the test