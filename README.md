# My-MVC-Framework

## MY small PHP MVC framework (Laravel like) with: 
- custom Router, Controllers and Views,
- custom Dynamic PDO CRUD Query Builder, 
- custom Dependency injection Container, 
- Namespaces and Composer Autoloading

## Setup On Your Local Machine
1. Clone the repo
2. Create the database using the mytodo.sql file by running each command separately.
3. Update config.php for your database connection
4. Run PHP's built-in webserver "php -S localhost:8000"
5. View the website at http://localhost:8000

 ## Add a new route
1. open app > views > routes.php and add the new route either as a GET or POST route

 ## Add a new view
1. Open app > views and create a new view with '.view.php' file extension
2. Open app > controllers and create a new controller
3. You can use the helper functions located in core > bootstrap.php to render a view or apply a redirect (see. PagesController or UsersController for examples)
