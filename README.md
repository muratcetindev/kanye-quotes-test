## kanye Quotes

## how to run

# 1. download and install

-   first download the repo in your side

```
git clone https://github.com/eddev-php/kanye-quotes-test.git
```

-   go to file location

```
cd kanye-quotes-test
```

-   install depencies

```
composer install
yarn install
```

# 2. setting up enviroment

-   copy enviroment files

```
cp .env.example .env
```

-   generate application key

```
    php artisan key:generate
```

# 3. database

1. create a database your side
2. open .env file and set the database configuration like following

```
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWORD
```

you can also change the `db_connection` , ` db_host` or ` db_port` as desigered

## after finishing up with database

```
php artisan config:cache
```

# 4. run the application

you can simply run the application via command line

```
php artisan serve
```
