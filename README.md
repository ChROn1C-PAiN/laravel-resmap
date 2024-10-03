# laravel-resmap
Basic student accommodation assistant system


##Steps required to run locally:
- clone project `git clone https://github.com/ChROn1C-PAiN/laravel-resmap.git`
- CD into cloned project directory.
- Create a database locally named `resmap` utf8_general_ci 
- Download and install composer https://getcomposer.org/download/
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or `php composer.phar install` to install Laravel dependancies.
- Run `npm install` to install nodejs packages and dependancies.
- Run `npm run buid` to compile vite assets.
- Run `npm run dev` to build vite assets.
- Run `php artisan key:generate` to generate Laravel Application Key.
- Run `php artisan migrate --seed` to seed the database with dummy test data.
- Run `php artisan serve` to host the applcation locally at `127.0.0.1:8000`
- Run `php artisan make:filament-user` to create a new Admin User.
- Access the local Admin Panel at `127.0.0.1:8000/admin` and login as the newly created Admin User.
 

#####You can now access your project at localhost:8000 :)
