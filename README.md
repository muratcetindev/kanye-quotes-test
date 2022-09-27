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

## run the application

```
 ./vendor/bin/sail up
```
