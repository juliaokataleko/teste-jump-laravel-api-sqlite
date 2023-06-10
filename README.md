# Service Orders API

![alt text](https://github.com/juliaokataleko/teste-jump-laravel-api/blob/master/public/images/home.png?raw=true)

### Requirements
OS: Mac Os, Linux or Windows with (wsl) <br/>
PHP 8.* installed with the following libs:
 - <b>NOTE: </b> If you need to install the libs below, please replace the asterisk with your version number. Ex.: 8.1, 8.2
 - (XML) sudo apt-get install php8.*-sqlite3
 - (SQLITE3) sudo apt-get install php8.*-xml

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