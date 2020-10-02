Symfony ACL Demo Application
========================

The "Symfony Demo Application" is a reference application created to show how
to develop applications following the [Symfony Best Practices][1].

Requirements
------------

  * PHP 7.2.9 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------

[Download Symfony][4] 

Run 
```bash
$ composer update
```

Change db access in .env file.

Run
```bash
$ php bin/console doctrine:migrations:generate
$ php bin/console doctrine:migrations:migrate
$ php bin/console doctrine:fixtures:load
php bin/console cache:clear
```

Or upload db dump from DUMP folder

Start web server
$ symfony serve
```

Then access the application in your browser at the given URL (<https://localhost:8000> by default).

