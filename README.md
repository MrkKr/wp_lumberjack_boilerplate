**Supercharge your WordPress Development**

Lumberjack is a powerful MVC framework for the modern WordPress developer. Write better, more expressive and easier to maintain code.

## Who is Lumberjack for?

Coming from another PHP framework such as Laravel, have experience using Timber with WordPress but want more, or are just getting started with modern WordPress? Then Lumberjack is for you.

Use as little or as much as you need, it's beginner friendly!

## Documentation

The Lumberjack documentation can be found here:

[https://docs.lumberjack.rareloop.com](https://docs.lumberjack.rareloop.com)

For more information, check out the website:

[https://lumberjack.rareloop.com](https://lumberjack.rareloop.com)

## Getting Started

See the documentation for details on how to get started: [https://docs.lumberjack.rareloop.com/getting-started/installation](https://docs.lumberjack.rareloop.com/getting-started/installation)

1. Install Lumberjack and Dotenv with Composer

```
composer require rareloop/lumberjack-core
```

2. Install webpack
- dev
```
npm run serve
```
- prd
```
npm run dist
```

3. Add environment variables to Dotenv (optional)
- modify wp-config.php:
```
require_once __DIR__ . '/wp-content/themes/THEME_NAME/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__. '/wp-content/themes/THEME_NAME/');
$dotenv->load();
```
- add .env file to theme directory (example)
```
DB_NAME=wordpress
DB_USER=homestead
DB_PASSWORD=secret
DB_HOST=localhost
DB_PREFIX=wp_
```
- change wp-config.php MySQL settings to
```
define( 'DB_NAME', getenv('DB_NAME') );
etc.
```

[Find out more](https://rareloop.com)
