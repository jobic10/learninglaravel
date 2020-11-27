<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# My Learning Journey With Laravel

- **Day 1:**
    - What is Laravel ?
    - What is Composer ?
    - Installing Laravel
    - Folder and File Structure (Still looking complex to me, though!)
    - Modified default welcome.blade.php file
    - Created new route (/about) alongside a new view for the route
    - Quick intro to Controllers
    - Quick intro to Components
        - Passing value to Components

- **Day 2:**
    - Learnt Middlewares (Created `AgeCheck` Middleware)
        - Global Middleware - Registered `AgeCheck` As Global
        - Group Middleware - Registered `AgeCheck` As Group
        - Route Middleware - Registered `AgeCheck` As Route
    - Forms
        - PUT. POST, DELETE, PATCH, GET Form Methods
        - Quick Intro To Form Validation
    - Brief Intro To Session
        - `put` and `has`
        - Check if session key exists and redirect based on condition check
        - `pull` in sessions 
    - Flash Session
    - File Upload
        - `store`
        - `storeAs`
    - Localization
    - Model
        - Connecting To Database Using `.env` file
        - Fetch Records Using Model 
        - Displaying fetched records in view
    - Pagination

- **Day 3:**
    - Creating Database tables
    - Saving data to database 
    - Displayed records from saved entries
    - Symbolic Links
    - Deleting Database records
    - Deleting Database records (Safely)
    - Updating Database records 

- **Day 4:**
    - Seeding (`php artisan make:seeder StudentSeeder`)
    - Accessors

- **Day 5:**
    - Mutator
    - Rollback in migration
    - Relationships
        - One to One 
- **Day 6:**
    - Relationships
        - One to Many
    - Stub
        - Controller Stub
        - Model Stub
    - Fluent Strings
    - Route Model Binding
    - Creating Custom Command
    - APIs
        - GET / GET Data From Database
        - POST => Save Data to Database
        - PUT => Update Data (All parameters passed)
        - PATCH => Update Data (Few parameters passed)
        - DELETE => Delete Data
        - Search for data using GET
        - Validation
        - HTTP Response code. Used 401 for failed validations

- **Day 7:**
    - Created Seeder File For User's Table
    - API With Sanctum
        - Generating tokens
        - Using generated tokens to view API routes

- **Day 8:**
    - Finished setting up JetStream

### Stackoverflow to the rescue
#### Be sure to check the Laravel version in these questions/answers
- https://stackoverflow.com/questions/41259651/general-error-1005-cant-create-table-foreign-key-constraint-is-incorrectly-fo

- https://stackoverflow.com/questions/50221670/how-to-define-a-one-way-one-to-one-relationship-in-laravel-5-4-eloquent

- https://stackoverflow.com/questions/28459418/use-of-put-vs-patch-methods-in-rest-api-real-life-scenarios


### Other links
- https://restfulapi.net/rest-put-vs-post
