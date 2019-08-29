# Global supervariables

## Objectives

The main purpose of this exercise is getting familiar with the global supervariables.

```$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
```

## Description

In this exercise we have to:
send data using `$_POST` and `$_GET` from from `setup.php` to `result.php`. `$_POST` will send top 5 tv shows and top 5 movies. The `$_GET` will send the favourite country and the worst movie ever seen.
  
 Loop through the data and post it in a table (as key => value).

## My approach

In `setup.php` I started a session and created a forms that uses the post method and another that uses the get method. When the user submits the form in `result.php` I used `$_SESSION` variable to store to initialize 3 empty arrays. `$_SERVER['REQUEST_METHOD']` will check which form has been submitet. The results will be displayed with [bootstrap tabs](https://getbootstrap.com/docs/4.3/components/navs/#tabs).
