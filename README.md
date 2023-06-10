# Service Orders API

![alt text](https://github.com/juliaokataleko/teste-jump-laravel-api/blob/master/public/images/home.png?raw=true)

### Requirements
OS: Mac Os, Linux or Windows <br/>
PHP 8.* installed with the following extensions:
 - sudo apt install php8.2-mbstring php8.2-pdo php8.2-mysqli  php8.2-gd php8.2-intl  php8.2-xml php8.2-curl php8.2-zip php8.2-sqlite3 php8.2-redis
 - In my case, i have php 8.2. replace this with your version in each extension. for example: php8.1-sqlite3
 - check your version running: php -v

### Installation

 - Open the terminal

 - clone the repository: 
 ```bash
 git clone https://github.com/juliaokataleko/teste-jump-laravel-api-sqlite
 ```
 - Go into cloned folder: cd /folder-name

 - run the following command to install dependencies:

 ```bash
  composer install
```

Setup .env file
 ```bash
  cp .env.example .env
```

Generate your application key
```bash
  php artisan key:generate
```

Run migrations and seeder
```bash
  php artisan migrate --seed
```

Launch the project:
```bash
  php artisan serve
```

### The application is read to run!

Acess: http://127.0.0.1:8000/