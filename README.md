# Understanding Laravel Core: Why Laravel is the Framework of Choice

## 📖 Introduction
Laravel is a modern PHP framework designed to make web development easier, faster, and more efficient. It follows the Model-View-Controller (MVC) pattern and provides built-in tools for routing, authentication, database management, and more. Laravel simplifies common tasks and allows developers to write clean, scalable, and maintainable code.
## 🛠️ Topics Covered

### 1. Introduction to Laravel
   - Brief history and evolution
   - Why Laravel? Key advantages
   - Comparison with other frameworks

### 2. Laravel Architecture
   - MVC (Model-View-Controller) pattern
   - Facades and their role in Laravel

   ``` php
        use Illuminate\Support\Facades\Cache;
        Cache::put('key', 'value', 3600);
   ```

### 3. Requirements to Run Laravel
   - PHP (Minimum version: 8.0 recommended)
   - Composer (Dependency Manager for PHP)
   - Web Server (Apache, Nginx, or Laravel's built-in server)
   - Database (MySQL, PostgreSQL, SQLite, or SQL Server)
   - Node.js & NPM (For frontend asset management if required)

### 4. Routing and Middleware
   - Defining routes in Laravel
   - Route parameters and named routes
   - Middleware: Purpose and usage

### 5. Eloquent ORM & Database Management
   - Understanding Eloquent ORM
   - Migrations and database seeding

### 6. Authentication & Authorization
   - Laravel’s built-in authentication system
   - Role-based access control
   - API authentication using Laravel Sanctum

### laravel cli 

 ``` bash
 - php artisan make:migration migration_name --table=table_name
 - php artisan migrate
 - php artisan make:controller ControllerName
 - php artisan make:model ModelName
 - php artisan make:middleware CheckAdmin
 - php artisan route:list
 - php artisan serve
 - php artisan make:seeder    
 - php artisan make:factory ModelFactory --model=model_name
 - php artisan db:seed

```