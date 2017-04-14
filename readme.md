# bitaac 1.0 beta

Before you start, make sure you have a webserver & mysql installed. This tutorial will not cover that. You will also need to have a database ready, with a TFS 1.X schema imported since bitaac will add triggers to `accounts` etc. 

### Server Requirements

* [Composer](https://getcomposer.org/)
* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

### Installation

Change `my/path/` to wherever you want to install bitaac & run the command in your terminal.
```bash
composer create-project --prefer-dist bitaac/bitaac=1.0.5-beta1 my/path/
```

Once the installation process is complete, you'll want to edit the `.env` file to fit your needs. Run the following command in your terminal to migrate the necessary database tables. You'll need to have an active database set up with the [TFS 1.1 schema](https://github.com/otland/forgottenserver/blob/1.1/schema.sql) pre-installed.

```bash
php artisan migrate --seed
```

And finally publish the assets.

```bash
php artisan vendor:publish
```
