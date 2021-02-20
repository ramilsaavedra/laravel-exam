## Pictureworks Laravel Test Code

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
    add comment using command line

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

