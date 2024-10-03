# ResMap

##Steps required to run locally:
- clone project `git clone https://github.com/ChROn1C-PAiN/laravel-resmap.git`
- CD into cloned project directory.
- Create a database locally named `resmap` utf8_general_ci 
- Download and install composer https://getcomposer.org/download/
- Rename `.env.example` file to `.env`inside your project root and fill the database information.
  (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `npm install`
- Run `npm run dev`
- Run `php artisan key:generate` 
- Run `php artisan migrate --seed`
- Run `php artisan serve`
 

#####You can now access your project at localhost:8000 :)
