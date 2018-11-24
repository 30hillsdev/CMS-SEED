# CMS SEED


Open source of Content Management System developed with [Laravel](http://laravel.com/) framework.

#####Installing CMS SEED
CMS SEED utilizes Composer to manage its dependencies. So, before using CMS SEED, make sure you have Composer installed on your machine.

Composer Create-Project
You may also install CMS SEED by issuing the Composer create-project command in your terminal:

```
composer create-project 30hills/cms_seed --prefer-dist website
```
Setup
After creating the project move to the project root folder and run the command to set up database and configuration files.

```
php artisan cms_framework_seed:install
```


```
php artisan key:generate // run this command if key not generated while installing.
```